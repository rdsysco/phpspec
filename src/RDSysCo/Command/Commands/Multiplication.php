<?php
/**
 * Filename: Multiplication.
 * User: Mithredate
 * Date: Sep, 2017
 */

namespace RDSysCo\Command\Commands;


use RDSysCo\Command\Calculator;
use RDSysCo\Command\Command;

class Multiplication extends Command
{
    private $prev;


    public function execute()
    {
        $this->prev = $this->receiver->getResult();
        $this->receiver->setResult($this->receiver->getResult() * $this->input);
    }

    public function undo()
    {
        $this->receiver->setResult($this->prev);
    }
}