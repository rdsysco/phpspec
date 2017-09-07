<?php

namespace RDSysCo\Calculator;

abstract class Command
{
    /**
     * @var
     */
    protected $op;
    /**
     * @var
     */
    protected $calculator;

    public function __construct(Calculator $calculator, $op)
    {
        $this->op = $op;
        $this->calculator = $calculator;
    }

    abstract public function execute();
    abstract public function undo();
}
