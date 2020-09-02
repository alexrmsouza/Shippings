<?php

namespace App\Factory;

use App\Deliveries\Datafrete\v1\Entity\Datafrete as DatafreteV1;
use Exception;

class DeliveryFactory
{
    const DATAFRETE = 'datafrete';

    /**
     * @param $delivery
     * @param $version
     *
     * @return string
     *
     * @throws Exception
     */
    public function buildDelivery(string $delivery, string $version): string
    {
        $deliveriesDictionary = [
            self::DATAFRETE => [
                DatafreteV1::VERSION => DatafreteV1::class
            ]
        ];

        if (!isset($deliveriesDictionary[$delivery][$version])) {
            throw new Exception("Invalid delivery ($delivery) or version ($version).");
        }

        return $deliveriesDictionary[$delivery][$version];
    }
}
