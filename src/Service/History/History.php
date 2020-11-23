<?php


namespace App\Service\History;

use App\Repository\HistoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;

class History
{
    /**
     * @var HistoryBuilder
     */
    private $historyBuilder;

    /**
     * @var HistoryRepository
     */
    private $historyRepository;

    public function __construct(HistoryBuilder $historyBuilder, HistoryRepository $historyRepository)
    {
        $this->historyBuilder = $historyBuilder;
        $this->historyRepository = $historyRepository;
    }

    public function execute($rawParameter)
    {
        $parameters = $this->historyBuilder->build($rawParameter);

        try {
            $this->historyRepository->saveHistory($parameters['date'], $parameters['result_count'], $parameters['flight_count']);
        } catch (ORMException $e) {
        }

        return $parameters;
    }

}