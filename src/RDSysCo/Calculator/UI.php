<?php

namespace RDSysCo\Calculator;

use RDSysCo\Calculator\Commands\AdditionCommand;

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

    public function getResult() {
        return $this->calculator->getResult();
    }

}
