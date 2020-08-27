<?php

namespace App\Controller;

use App\Service\Configurator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    /**
     * @var Configurator $client
     */
    private $configurator;

    public function __construct()
    {
        $this->configurator = new Configurator();
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $deliveries = $this->configurator
            ->setRequest($request)
            ->findDeliveries()
        ;

        return new JsonResponse($deliveries, 200);
    }
}
