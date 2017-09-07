<?php

namespace RDSysCo\Calculator;

class Invoker
{

    private $lastCommand;

    public function addCommand(Command $command)
    {
        $this->lastCommand = $command;
        $this->lastCommand->execute();
    }
}
