<?php

namespace App\Service;

use App\Entity\Package;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class Configurator
{
    /** @var Request */
    private $request;

    /**
     * @throws Exception
     */
    public function findDeliveries()
    {
        return $package = new Package($this->request);
    }

    /**
     * @return Request
     */
    public function getRequest(): ?Request
    {
        return $this->request;
    }

    /**
     * @param Request $request
     *
     * @return Configurator
     */
    public function setRequest(Request $request): self
    {
        $this->request = $request;
        return $this;
    }
}
