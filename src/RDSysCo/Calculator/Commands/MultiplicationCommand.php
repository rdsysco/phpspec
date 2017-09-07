<?php

namespace RDSysCo\Calculator\Commands;

use RDSysCo\Calculator\Command;

class MultiplicationCommand extends Command
{
    public function execute()
    {
        $this->calculator->mul($this->op);
    }

    public function undo()
    {
        $this->calculator->div($this->op);
    }
}
