<?php

namespace App\Entity;

class Item
{
    const FRACTIONAL_QUANTITY = 1;

    /** @var float */
    public $quantity = 0;

    /** @var float */
    public $price = 0;

    /** @var float */
    public $height = 0;

    /** @var float */
    public $width = 0;

    /** @var float */
    public $depth = 0;

    /** @var float */
    public $weight = 0;

    /** @var float */
    public $cubicWeight = 0;

    /** @var float */
    public $volume = 0;

    /** @var string */
    public $description = "";

    /** @var string */
    public $sku = "";

    public function toIntQuantity()
    {
        if (is_float($this->quantity)) {
            $this->price = round($this->price * $this->quantity, 2);
            $this->cubicWeight = $this->cubicWeight * $this->quantity;
            $this->weight = $this->weight * $this->quantity;
            $this->quantity = self::FRACTIONAL_QUANTITY;
        }
    }
}
