<?php

namespace App\Factory;

use App\Deliveries\Datafrete\v1\Entity\Datafrete;

class DeliveryFactory
{
    const DATAFRETE = 'datafrete';

    public function buildDelivery($delivery)
    {
        $deliveriesDictionary = [
            self::DATAFRETE => Datafrete::class
        ];

        return $deliveriesDictionary[$delivery];
    }
}
