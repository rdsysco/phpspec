<?php
/**
 * Filename: Subtraction.
 * User: Mithredate
 * Date: Sep, 2017
 */

namespace RDSysCo\Command\Commands;


use RDSysCo\Command\Command;

class Subtraction extends Command
{

    public function execute()
    {
        $this->receiver->setResult($this->receiver->getResult() - $this->input);
    }

    public function undo()
    {
        $this->receiver->setResult($this->receiver->getResult() + $this->input);
    }
}