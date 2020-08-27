<?php

namespace App\Deliveries\Datafrete\v1\Entity;

use App\Entity\AbstractDelivery;

class Datafrete extends AbstractDelivery
{
    const VERSION = "1.03.10";

    /** @var string */
    public $datafreteUrl;

    /** @var string */
    public $datafreteToken;
}
