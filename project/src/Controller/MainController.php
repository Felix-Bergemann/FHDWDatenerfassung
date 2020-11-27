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
use App\Entity\Room;
use App\Entity\User;
use App\Entity\UserClient;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
            $roomRepo = $em->getRepository(Room::class);
            $userRepo = $em->getRepository(User::class);

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

            return $this->render('start.html.twig', [
                'navs' => $navs,
                'measuredValues'=> $measuredValues,
                'clients' => $clients
            ]);
        }
    }

    /**
    * @Route("/details", name="details")
    */
    public function detailsAction(){

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

     /**
    * @Route("/clients", name="clients")
    */
    public function clientsAction(){

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

        $ownRooms = $roomRepo->findBy(['userIk' => 2]);
        $userClients = $userClientRepo->findBy(['userIk'=>2]);

        return $this->render('clients.html.twig', [
            'clients'=> $clientRepo->findAll(),
            'userClients' => $userClients,
            'rooms' => $ownRooms,
            'navs' =>$navs,
        ]);
    }

    /**
    * @Route("/logout", name="app_logout")
    */
    public function logoutAction(){
    }

}