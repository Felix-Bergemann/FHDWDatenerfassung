<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Nav;
use App\Entity\Measured;
use App\Entity\Client;
use App\Entity\User;


class MainController extends AbstractController
{
    /**
    * @Route("/")
    */
    public function loginAction(){

        $em =  $this->getDoctrine()->getManager();
        $clientsRepo = $em->getRepository(User::class);
        dump($clientsRepo->findAll());

        return $this->render('login.html.twig', [
                'navs' => [],
        ]);
    }

    /**
    * @Route("/start", name="start")
    */
    public function startAction(){

        $client1 = new Client();

        $client2 = new Client();


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
        $logout->setLink('/');
        $logout->setText('Abmelden');
        $logout->setIcon('fas fa-window-close');

        $syncClient = new Nav();
        $syncClient->setLink('/clients');
        $syncClient->setText('Clients zuordnen');
        $syncClient->setIcon('fa fa-list');

        $navs = [$syncClient, $logout];
        $clients = [$client1, $client2];

        return $this->render('start.html.twig', [
            'navs' => $navs,
            'measuredValues'=> $measuredValues,
            'clients' => $clients
        ]);
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

        $start = new Nav();
        $start->setText('Zurück');
        $start->setIcon('fas fa-arrow-circle-left');
        $start->setLink('/start');
        $logout = new Nav();
        $logout->setLink('/');
        $logout->setText('Abmelden');
        $logout->setIcon('fas fa-window-close');

        $navs = [$start, $logout];

        $clients = ['Client 1', 'Client 2', 'Client 3','Client 4'];

        return $this->render('clients.html.twig', [
            'clients'=> $clients,
            'navs' =>$navs,
        ]);
    }

}