<?php

namespace App\Http\Wsdl;

// the filename must be in lowercase for the setClass
class Orders
{
    /**
     * This method takes a string as an arg and returns a string as output. Amazing!
     *
     * @param string $arg
     * @return string
     */
    public function test($arg)
    {
        return "Test service received $arg";
    }
}
