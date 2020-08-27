<?php

namespace App\Entity;

use Exception;
use stdClass;

abstract class AbstractUtility
{
    /**
     * @param $obj
     * @param $toClass
     *
     * @return mixed|stdClass
     *
     * @throws Exception
     */
    public function cast($obj, $toClass)
    {
        if (!$obj) {
            return new $toClass();
        }

        if(!class_exists($toClass)) {
            throw new Exception("Undefined class {$toClass}.");
        }

        $objIn = serialize($obj);
        $objOut = 'O:' . strlen($toClass) . ':"' . $toClass . '":' . substr($objIn, $objIn[2] + 7);

        return unserialize($objOut);
    }
}
