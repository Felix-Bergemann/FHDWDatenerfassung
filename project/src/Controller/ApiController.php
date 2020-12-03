<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Client;
use App\Entity\ClientRecord;

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

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

        console_log($data);
        $em->persist($clientRecord);
        $em->flush();

        return new JsonResponse(200);
    }

}