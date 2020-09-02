<?php

namespace App\Entity;

use App\Factory\DeliveryFactory;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class Package extends AbstractUtility
{
    /** @var Address */
    public $address;

    /** @var Cart[] */
    public $carts;

    /** @var AbstractDelivery[] */
    public $deliveries;

    /** @var DeliveryFactory */
    protected $deliveryFactory;

    /**
     * @param Request $request
     *
     * @throws Exception
     */
    public function __construct(Request $request)
    {
        $this->deliveryFactory = new DeliveryFactory();

        $body = json_decode($request->getContent(), false);

        $this->address = $this->cast($body->address, Address::class);

        $this->carts = [];

        $carts = [];
        if (property_exists($body, "carts")) {
            $carts = $body->carts;
        }

        foreach ($carts as $cart) {
            $this->carts[] = new Cart($cart);
        }

        $this->deliveries = [];

        $deliveries = [];
        if (property_exists($body, "deliveries")) {
            $deliveries = $body->deliveries;
        }

        foreach ($deliveries as $delivery) {
            unset($delivery->version);

            $this->deliveries[] = $this->cast($delivery, $this->deliveryFactory->buildDelivery($delivery->referenceCode, $delivery->version));
        }
    }
}
