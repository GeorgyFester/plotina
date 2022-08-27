<?php

namespace App\states;

class Disconnected
{
    // BEGIN (write your solution here)
    public function __construct($state)
    {
        if (is_object($state)) {
            if ($this->getName() == $state->getName()) {
                throw new \Exception('Boom!');
            }
        }
    }
    public function getName()
    {
        return 'disconnected';
    }
    public function write($data)
    {
        throw new \Exception('Boom!');
    }
    // END
}
