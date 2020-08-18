<?php


namespace App\Service;


use Symfony\Component\HttpFoundation\Request;

class Configurator
{
    /** @var Request */
    private $request;

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @param Request $request
     *
     * @return Configurator
     */
    public function setRequest(Request $request): Configurator
    {
        $this->request = $request;
        return $this;
    }
}