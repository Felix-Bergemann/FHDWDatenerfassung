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
            $currentClientRecords = [] ;
            foreach($clients as $client){
                // Hier weiter machen
                //$curReccord = $this->getDoctrine()->getRepository(ClientRecord::class)->getMaxDateEntry($client->getIntKey());
            }

            return $this->render('start.html.twig', [
                'navs' => $navs,
                'measuredValues'=> $measuredValues,
                'clients' => $clients,
                'currentClientValues' => $currentClientRecords
            ]);
        }
    }

    /**
    * @Route("/details", name="details")
    */
    public function detailsAction(){
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

            return $this->render('details.html.twig', [
                'navs' =>$navs,
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