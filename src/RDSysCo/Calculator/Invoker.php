<?php

namespace RDSysCo\Calculator;

use RDSysCo\Calculator\Commands\NullCommand;

class Invoker
{
    /**
     * @var Command
     */
    private $lastCommand = false;


    public function addCommand(Command $command)
    {
        $this->lastCommand = $command;
        $this->lastCommand->execute();
    }

    public function removeCommand()
    {
        if(!$this->lastCommand) {
            return ;
        }
        $this->lastCommand->undo();
        $this->lastCommand = false;
    }
}
