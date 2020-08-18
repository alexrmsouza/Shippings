<?php

namespace App\Entity;

class Package
{
    /** @var Address */
    public $address;

    /** @var Cart[] */
    public $carts;

    /** @var array */
    public $deliveries;
}