<?php

namespace App\Controller;

use App\Service\History\HistoryBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResultInfoController extends AbstractController
{
    /**
     * @Route("/resultinfo.json", name="result_info")
     * @return Response
     */
    public function index(Request $request, HistoryBuilder $historyBuilder): Response
    {
        return $this->render('result_info/index.html.twig', [
            'controller_name' => 'ResultInfoController',
        ]);
    }
}
