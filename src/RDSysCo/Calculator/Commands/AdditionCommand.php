<?php

namespace RDSysCo\Calculator\Commands;

use RDSysCo\Calculator\Command;

class AdditionCommand extends Command
{

    public function execute()
    {
        $this->calculator->add($this->op);
    }

    public function undo()
    {
        $this->calculator->sub($this->op);
    }
}
