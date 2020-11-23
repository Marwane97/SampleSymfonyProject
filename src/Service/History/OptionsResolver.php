<?php


namespace App\Service\History;

use Symfony\Component\OptionsResolver\OptionsResolver as HistoryOptionResolver;


class OptionsResolver
{
    /**
     * @param $data
     * @return array
     */
    public static function resolve($data)
    {
        return self::__resolve($data);
    }

    /**
     * @param array $data
     * @return array
     */
    private static function __resolve(array $data)
    {
        $data = (new HistoryOptionResolver())
            ->setRequired([
                'result_count',
                'flight_count',
                'date'
            ])
            ->addAllowedTypes('result_count', 'int')
            ->addAllowedTypes('flight_count', 'int')
            ->setAllowedTypes('date', 'string')
            ->resolve($data)
        ;

        return $data;
    }
}