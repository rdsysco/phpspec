<?php

namespace RDSysCo\Calculator\Commands;

use RDSysCo\Calculator\Command;

class DivisionCommand extends Command
{
    public function execute()
    {
        $this->calculator->div($this->op);
    }

    public function undo()
    {
        $this->calculator->mul($this->op);
    }
}
