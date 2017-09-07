<?php
/**
 * Filename: Division.
 * User: Mithredate
 * Date: Sep, 2017
 */

namespace RDSysCo\Command\Commands;


use RDSysCo\Command\Command;

class Division extends Command
{
    public function execute()
    {
        $this->guardDivisionByZero();

        $this->receiver->setResult($this->receiver->getResult() / $this->input);
    }

    public function undo()
    {
        $this->receiver->setResult($this->receiver->getResult() * $this->input);
    }

    private function guardDivisionByZero()
    {
        if($this->input == 0) {
            throw new \InvalidArgumentException("Division by zero no allowed!");
        }
    }
}