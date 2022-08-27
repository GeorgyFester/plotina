<?php

namespace App;

class TcpConnection implements TcpConnectionInterface
{
    private $ip;
    private $port;
    private $state;

    // BEGIN (write your solution here)
    public function __construct($ip, $port)
    {
        $this->ip = $ip;
        $this->port = $port;
    }
    public function getCurrentState()
    {
        return $this->state->getName();
    }
    public function connect()
    {
        $state = new states\Connected($this->state);
        $this->state = $state;
    }
    public function disconnect()
    {
        $state = new states\Disconnected($this->state);
        $this->state = $state;
    }
    public function write($data)
    {
        $this->state->write($data);
    }
    // END
}
