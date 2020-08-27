<?php

namespace App\Entity;

class Store
{
    /** @var Address */
    public $address;

    /** @var string */
    public $document;

    public function parseDocument()
    {
        $this->document = preg_replace('/[^0-9]/', '', $this->document);
    }
}
