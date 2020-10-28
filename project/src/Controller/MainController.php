<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Nav;
use App\Entity\Measured;
use App\Entity\Client;


class MainController extends AbstractController
{
    /**
    * @Route("/")
    */
    public function loginAction(){
        return $this->render('login.html.twig', [
                'navs' => [],
        ]);
    }

    /**
    * @Route("/start", name="start")
    */
    public function startAction(){

        $client1 = new Client();
        $client1->setName('Client1');
        $client1->setLastUpdate(true);
        $client1->setTemperature('22,1');
        $client1->setHumidity(12);
        $client1->setAirPresure(1000);

        $client2 = new Client();
        $client2->setName('Client2');
        $client2->setLastUpdate(false);
        $client2->setTemperature('18,5');
        $client2->setHumidity(27);
        $client2->setAirPresure(1100);

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

        $navs = [$logout];
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

}