<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\Nav;
use App\Entity\Measured;
use App\Entity\Client;
use App\Entity\ClientRecord;
use App\Entity\Room;
use App\Entity\UserClient;
use App\Repository\ClientRecordRepository;
use App\Repository\ClientsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Mukadi\Chart\Utils\RandomColorFactory;
use Mukadi\ChartJSBundle\Chart\Builder;
use Mukadi\Chart\Chart;
use Symfony\Component\Validator\Constraints\DateTime;


class MainController extends AbstractController
{

    /**
    * @Route("/", name="app_login")
    * Überprüfung ob ein Nutzer angemeldet ist und jeweilige Zuweisung
    */
    public function loginAction(AuthenticationUtils $authenticationUtils){
        if ($this->getUser()) {
                return $this->redirectToRoute('start');
        }else{
            return $this->render('login.html.twig', [
                'error' =>$authenticationUtils->getLastAuthenticationError(),
                'navs' => [],
            ]);
        }
    }

    /**
    * @Route("/start", name="start")
    * Abruf der Startseite
    */
    public function startAction(ManagerRegistry $registry){
        // Überprüfung auf Anmeldung
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }else{
            $em = $this->getDoctrine()->getManager();
            $roomRepo =$em->getRepository(Room::class);
            $userClientRepo = $em->getRepository(UserClient::class);
            $clientRepo = new ClientsRepository($registry);
            $crRepo = new ClientRecordRepository($registry);

            // Erstellung von Objekten zur Messwertdarstellung
            $temperature = new Measured();
            $airPresure = new Measured();
            $humidity = new Measured();

            $temperature->setName('Temperatur');
            $temperature->setUnit('°C');
            $temperature->setIcon('fas fa-temperature-high');

            $airPresure->setName('Luftdruck');
            $airPresure->setUnit('pHa');
            $airPresure->setIcon('fas fa-wind');

            $humidity->setName('Luftfeuchtigkeit');
            $humidity->setUnit('%');
            $humidity->setIcon('fas fa-cloud-rain');

            $measuredValues = [$temperature, $airPresure, $humidity];

            // Erstellung von Navigationselementen
            $logout = new Nav();
            $logout->setLink('./logout');
            $logout->setText('Abmelden');
            $logout->setIcon('fas fa-window-close');

            $syncClient = new Nav();
            $syncClient->setLink('./clients');
            $syncClient->setText('Einstellungen');
            $syncClient->setIcon('fa fa-list');

            $navs = [$syncClient, $logout];

            // Auslesen der Daten aus DB in Objekte
            $rooms = $roomRepo->findAll();
            $userClients = $userClientRepo->findBy(['userIk'=>$this->getUser()->getIntKey()]);

            $clients = $clientRepo->findClientsWithUserClients($userClients);
            // Aktuelle Werte Clients holen
            $currentClientRecords = [] ;

            if (!empty($clients)){
                foreach($clients as $client){
                    if (!empty($crRepo->getMaxDateEntry($client->getIntKey()))){
                        array_push($currentClientRecords, $crRepo->getMaxDateEntry($client->getIntKey()));
                    }
                }
            }

            $minDate = date("Y-m-d H:i:s", strtotime("-1 hours"));

            return $this->render('start.html.twig', [
                'navs' => $navs,
                'measuredValues'=> $measuredValues,
                'clients' => $clients,
                'userIk' => $this->getUser()->getIntKey(),
                'rooms' => $rooms,
                'currentClientValues' => $currentClientRecords,
                'minDate' => $minDate
            ]);
        }
    }

    public function chart(Builder $builder,string $value, string $bennenung,string $farbe, Request $request) {
        $builder
            ->query('SELECT p.recordDate,p.'.$value.' FROM \App\Entity\ClientRecord p where p.clientIk=:client_key and p.roomIk=:client_room order by p.recordDate')
            ->setParameter(':client_key',$request->request->get('client'))
            ->setParameter(':client_room',$request->request->get('room'))
            ->addDataset($value,$bennenung,[
                "backgroundColor" => $farbe
            ])
            ->labels('recordDate')
        ;

        $chart = $builder->buildChart($value,Chart::LINE);
        return $chart;
    }

    /**
    * @Route("/details", name="details")
    */
    public function detailsAction(Request $request){
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }else{
            // Erstellung von Navigationselementen
            $start = new Nav();
            $start->setText('Zurück');
            $start->setIcon('fas fa-arrow-circle-left');
            $start->setLink('./start');
            $logout = new Nav();
            $logout->setLink('./logout');
            $logout->setText('Abmelden');
            $logout->setIcon('fas fa-window-close');

            $navs = [$start, $logout];

            $em = $this->getDoctrine()->getManager();
            $roomRepo = $em->getRepository(Room::class);

            $room = $roomRepo->findOneBy(['intKey' => $request->request->get('room')]);

            $builder = new Builder($em);
            $chart1 = $this->chart($builder,"temperature", "Temperatur", "#ffbb00", $request);
            $chart2 = $this->chart($builder,"humidity", "Luftfeuchtigkeit", "#00ddff", $request);
            $chart3 = $this->chart($builder,"airPressure", "Luftdruck", "#0dff9e", $request);

            $charts = [$chart1,$chart2,$chart3];
            return $this->render('details.html.twig', [
                'navs' =>$navs,
                'charts' => $charts,
                'room' => $room,
            ]);
        }
    }

    /**
    * @Route("/clients", name="clients")
    * Einstellungsseite
    */
    public function clientsAction(){
        // Überprüfung auf Anmeldung
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }else{
            $em = $this->getDoctrine()->getManager();
            $clientRepo = $em->getRepository(Client::class);
            $userClientRepo = $em->getRepository(UserClient::class);
            $roomRepo = $em->getRepository(Room::class);
            // Erstellung von Navigationselementen
            $start = new Nav();
            $start->setText('Zurück');
            $start->setIcon('fas fa-arrow-circle-left');
            $start->setLink('./start');
            $logout = new Nav();
            $logout->setLink('./logout');
            $logout->setText('Abmelden');
            $logout->setIcon('fas fa-window-close');

            $userNo = $this->getUser()->getIntKey();
            $navs = [$start, $logout];
            // Selektierung der Datenwerte aus DB
            $ownRooms = $roomRepo->findBy(['userIk' => $userNo]);
            $userClients = $userClientRepo->findBy(['userIk'=>$userNo]);
            $userClientValues = [];
            foreach($userClients as $userClient){
                array_push($userClientValues, $userClient->getClientIk());
            }
            return $this->render('clients.html.twig', [
                'clients'=> $clientRepo->findAll(),
                'userClientsValues' => $userClientValues,
                'userNo' => $userNo,
                'rooms' => $ownRooms,
                'navs' =>$navs,
            ]);
        }
    }

    /**
     * @Route("/clientRoom", name="client_room")
     */
    public function changeClientRoomAction (Request $request){
        $em = $em = $this->getDoctrine()->getManager();
        $clientRepo = $em->getRepository(Client::class);
        $curClient = $clientRepo->findOneBy(['macAdress'=>$request->request->get('client')]);
        $roomValue= $request->request->get('ownRooms_'.$curClient->getIntKey());

        if(!empty($curClient) &&!empty($roomValue)){
            if($roomValue != $curClient->getRoomIk()){
                $curClient->setRoomIk($roomValue);
                $em->flush();
            }
        }

        return $this->redirectToRoute('clients');
    }

    /**
     * @Route("/createRoom", name="create_room")
     */
    public function createNewRoomAction (Request $request){
        if($request->request->get('newRoomName')){
            $em = $this->getDoctrine()->getManager();
            $newRoom = new Room();
            $newRoom->setRoomName($request->request->get('newRoomName'));
            $newRoom->setUserIk($this->getUser()->getIntKey());
            if($request->request->get('newRoomisPrivate')){
                $newRoom->setIsPrivate(1);
            }else{
                $newRoom->setIsPrivate(0);
            }

            $em->persist($newRoom);
            $em->flush();
        }

        return $this->redirectToRoute('clients');
    }

    /**
     * @Route("/saveChanges", name="save_changes")
     */
    public function saveChangesAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $userClientRepo = $em->getRepository(UserClient::class);
        $roomRepo = $em->getRepository(Room::class);

        $roomValues = [];
        $clientsValues = [] ;
        // Zu setzende Werte aus Request holen
        foreach($request->request as $key => $value){
            if(is_int($key)){
                array_push($clientsValues, $key);
            }else {
                $roomValues[$key] = $value;
            }
        }
        // Räume des Nutzers holen
        $userRooms = $roomRepo->findBy(['userIk'=> $this->getUser()->getIntKey()]);
        // Ändern der Raumnamen und des Zugangsstatus
        foreach($userRooms as $userRoom){
            $roomKey = $userRoom->getIntKey();
            if(array_key_exists('room_'. $roomKey, $roomValues)){
                if($roomValues['room_'.$roomKey]!=""){
                    $userRoom->setRoomName($roomValues['room_'.$roomKey]);
                }
            }
            if (array_key_exists('room_'. $roomKey.'_isPrivate', $roomValues)){
                $userRoom->setIsPrivate(0);
            }else{
                $userRoom->setIsPrivate(1);
            }

        }
        $em->flush();

        //Alle UserClientverbindungen zum aktuellen User holen
        $userClients = $userClientRepo->findBy(["userIk"=>$this->getUser()->getIntKey()]);


        // Zu löschende Verbindungen entfernen
        foreach($userClients as $userClient){
           $em->remove($userClient);
        }
        $em->flush();
        // Anzulegende Verbindungen setzen
        foreach($clientsValues as $clientValue){
            $newUserClient = new UserClient();
            $newUserClient->setUserIk($this->getUser()->getIntKey());
            $newUserClient->setClientIk($clientValue);
            $em->persist($newUserClient);
        }
        // Werte in DB speichern
        $em->flush();

        return $this->redirectToRoute('clients');
    }

    /**
    * @Route("/logout", name="app_logout")
    */
    public function logoutAction(){
    }

}