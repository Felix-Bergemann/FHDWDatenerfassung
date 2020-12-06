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
use Mukadi\Chart\Utils\RandomColorFactory;
use Mukadi\ChartJSBundle\Chart\Builder;
use Mukadi\Chart\Chart;
use Symfony\Component\Validator\Constraints\DateTime;

class MainController extends AbstractController
{

    /**
    * @Route("/", name="app_login")
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
    */
    public function startAction(Request $request){
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }else{
            $em = $this->getDoctrine()->getManager();
            $clientRepo = $em->getRepository(Client::class);
            $roomRepo =$em->getRepository(Room::class);

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

            $logout = new Nav();
            $logout->setLink('/logout');
            $logout->setText('Abmelden');
            $logout->setIcon('fas fa-window-close');

            $syncClient = new Nav();
            $syncClient->setLink('/clients');
            $syncClient->setText('Clients zuordnen');
            $syncClient->setIcon('fa fa-list');

            $navs = [$syncClient, $logout];
            $clients = $clientRepo->findAll();
            $rooms = $roomRepo->findAll();
            $currentClientRecords = [] ;
            $recordRepo = $this->getDoctrine()->getRepository(ClientRecord::class);
            foreach($clients as $client){
                // Hier weiter machen

                //$curReccord = $recordRepo->getMaxDateEntry($client->getIntKey());
            }

            return $this->render('start.html.twig', [
                'navs' => $navs,
                'measuredValues'=> $measuredValues,
                'clients' => $clients,
                'userIk' => $this->getUser()->getIntKey(),
                'rooms' => $rooms,
                'currentClientValues' => $currentClientRecords
            ]);
        }
    }
    public function chart(Builder $builder,string $value, string $bennenung,string $farbe) {        
        $builder
            ->query('SELECT p.recordDate,p.'.$value.' FROM \App\Entity\ClientRecord p where p.clientIk=:client_key order by p.recordDate')
            ->setParameter(':client_key',$_POST['client'])
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
       // echo '<script>console.log(' . json_encode($_POST['client'], JSON_HEX_TAG) . ');</script>';
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }else{
            $start = new Nav();
            $start->setText('Zurück');
            $start->setIcon('fas fa-arrow-circle-left');
            $start->setLink('/start');
            $logout = new Nav();
            $logout->setLink('/');
            $logout->setText('Abmelden');
            $logout->setIcon('fas fa-window-close');

            $navs = [$start, $logout];

            $clientKey = $request->request->get('client');

            $em = $this->getDoctrine()->getManager();
            $clientRecordRepo = $em->getRepository(ClientRecord::class);
            $roomRepo = $em->getRepository(Room::class);


            $clientRecords = $clientRecordRepo->findBy(['clientIk' => $clientKey]);
            $room = $roomRepo->findOneBy(['intKey' => $request->request->get('room')]);


            $clientRecordsValues = [];

            foreach($clientRecords as $clientRecord){
                echo '<script>console.log(' . json_encode( $clientRecord->getMeasurements(), JSON_HEX_TAG) . ');</script>';
                array_push($clientRecordsValues, $clientRecord->getMeasurements());
            }

            $builder = new Builder($em);
            $chart1 = $this->chart($builder,"temperature", "Temperatur", "#ffbb00");
            $chart2 = $this->chart($builder,"humidity", "Luftfeuchtigkeit", "#00ddff");
            $chart3 = $this->chart($builder,"airPressure", "Luftdruck", "#0dff9e");
            return $this->render('details.html.twig', [
                'navs' =>$navs,
                'charts' => [$chart1, $chart2,$chart3],
                'room' => $room,
            ]);
        }
    }

     /**
    * @Route("/clients", name="clients")
    */
    public function clientsAction(){
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }else{
        $em = $this->getDoctrine()->getManager();
        $clientRepo = $em->getRepository(Client::class);
        $userClientRepo = $em->getRepository(UserClient::class);
        $roomRepo = $em->getRepository(Room::class);

        $start = new Nav();
        $start->setText('Zurück');
        $start->setIcon('fas fa-arrow-circle-left');
        $start->setLink('/start');
        $logout = new Nav();
        $logout->setLink('/logout');
        $logout->setText('Abmelden');
        $logout->setIcon('fas fa-window-close');

        $navs = [$start, $logout];

        $ownRooms = $roomRepo->findBy(['userIk' => $this->getUser()->getIntKey()]);
        $userClients = $userClientRepo->findBy(['userIk'=>$this->getUser()->getIntKey()]);
        $userClientValues = [];
        foreach($userClients as $userClient){
            array_push($userClientValues, $userClient->getClientIk());
        }
        return $this->render('clients.html.twig', [
            'clients'=> $clientRepo->findAll(),
            'userClientsValues' => $userClientValues,
            'rooms' => $ownRooms,
            'navs' =>$navs,
        ]);
        }
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