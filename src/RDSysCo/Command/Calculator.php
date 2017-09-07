<?php

namespace RDSysCo\Command;

use RDSysCo\Command\Commands\Addition;
use RDSysCo\Command\Commands\Division;
use RDSysCo\Command\Commands\Multiplication;
use RDSysCo\Command\Commands\NullCommand;
use RDSysCo\Command\Commands\Subtraction;

class Calculator implements CalculatorReceiver, CalculatorCommandInvoker
{
    private $result;

    /**
     * @var Command
     */
    private $lastCommand;

    public function __construct()
    {
        $this->result = 0;
        $this->addCommand(new NullCommand(0, $this));
    }


    public function add($input)
    {
        $this->addCommand(new Addition($input, $this));
    }

    public function mul($input)
    {
        $this->lastCommand = new Multiplication($input, $this);
        $this->lastCommand->execute();
    }

    public function sub($input)
    {
        $this->addCommand(new Subtraction($input, $this));
    }

    public function div($input)
    {
        $this->addCommand(new Division($input, $this));
    }


    public function undo()
    {
        $this->lastCommand->undo();
    }

    public function setResult($result)
    {
        $this->result = $result;
    }

    public function getResult()
    {
        return $this->result;
    }


    public function addCommand(Command $command)
    {
        $this->lastCommand = $command;
        $this->lastCommand->execute();
    }
}
