<?php

namespace App\Controller;

use App\Entity\History ;
use App\Repository\HistoryRepository;
use App\Service\History\History as ServiceHistory;
use App\Service\History\HistoryBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoryController extends AbstractController
{
    /**
     * @var ServiceHistory
     */
    private $serviceHistory;

    /**
     * HistoryController constructor.
     * @param ServiceHistory $serviceHistory
     */
    public function __construct(ServiceHistory $serviceHistory)
    {
        $this->serviceHistory = $serviceHistory;
    }

    /**
     * @Route("/", name="history")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $rawParameter = $request->getContent();
        return new JsonResponse([
            'status' => 'success',
            'history' => $this->serviceHistory->execute($rawParameter)
        ]);
    }
}
