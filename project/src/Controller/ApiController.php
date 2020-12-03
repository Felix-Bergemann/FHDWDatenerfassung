<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Client;
use App\Entity\ClientRecord;

class ApiController extends AbstractController {

    /**
     * @Route("/api/clientdata", name="api_clientdata", methods={"POST"})
     */
    public function getClientData(Request $request){
        $data=json_decode($request->getContent(),true);
        $em =  $this->getDoctrine()->getManager();
        $clientsRepo = $em->getRepository(Client::class);

        $clientRecord = new ClientRecord();
        $clientRecord->setRecordDate(date_create($data['date']));
        $clientRecord->setTemperature($data['measurements']['temperature']);
        $clientRecord->setAirPressure($data['measurements']['pressure']);
        $clientRecord->setHumidity($data['measurements']['humidity']);

        $em->persist($clientRecord);
        $em->flush();

        return new JsonResponse(200);
    }

}