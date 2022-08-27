<?php

namespace App\states;

class Connected
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
        return 'connected';
    }
    public function write($data)
    {

    }
    // END
}
