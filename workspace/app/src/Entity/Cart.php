<?php

namespace App\Entity;

use Exception;

class Cart extends AbstractUtility
{
    /** @var Store */
    public $store;

    /** @var Item[] */
    public $items;

    /**
     * @param $cart
     *
     * @throws Exception
     */
    public function __construct($cart)
    {
        if (property_exists($cart, "store")) {
            $this->store = $this->cast($cart->store, Store::class);

            $this->store->parseDocument();
        }

        $this->items = [];

        foreach ($cart->items as $item) {
            /** @var Item $castedItem */
            $castedItem = $this->cast($item, Item::class);
            $castedItem->toIntQuantity();

            $this->items[] = $castedItem;
        }
    }
}
