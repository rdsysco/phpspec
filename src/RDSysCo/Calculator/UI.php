<?php

namespace RDSysCo\Calculator;

use RDSysCo\Calculator\Commands\AdditionCommand;
use RDSysCo\Calculator\Commands\DivisionCommand;
use RDSysCo\Calculator\Commands\MultiplicationCommand;
use RDSysCo\Calculator\Commands\NullCommand;
use RDSysCo\Calculator\Commands\SubtractionCommand;

class UI
{
    /**
     * @var Invoker
     */
    private $invoker;
    /**
     * @var Calculator
     */
    private $calculator;

    public function __construct(Calculator $calculator, Invoker $invoker)
    {
        $this->invoker = $invoker;
        $this->calculator = $calculator;
    }

    public function add($number)
    {
        $this->invoker->addCommand(new AdditionCommand($this->calculator, $number));
    }

    public function sub($number)
    {
        $this->invoker->addCommand(new SubtractionCommand($this->calculator, $number));
    }

    public function div($number)
    {
        $this->invoker->addCommand(new DivisionCommand($this->calculator, $number));
    }

    public function mul($number)
    {
        $this->invoker->addCommand(new MultiplicationCommand($this->calculator, $number));
    }

    public function undo()
    {
        $this->invoker->removeCommand();
    }

    public function getResult() {
        return $this->calculator->getResult();
    }

}
