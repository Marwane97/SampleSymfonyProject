<?php


namespace App\Service\History;


class HistoryBuilder
{
    public function build($rawParameters)
    {
        $histories = $this->decodeParameters($rawParameters);

        return OptionsResolver::resolve($histories);
    }

    /**
     * @param string $parameters
     * @return mixed
     * @throws \Exception
     */
    public function decodeParameters(string $parameters)
    {
        $parameters = json_decode($parameters, true);

        if (empty($parameters) || JSON_ERROR_NONE !== json_last_error()) {
            throw new \Exception('Request payload is not a valid JSON object');
        }

        return $parameters;
    }
}