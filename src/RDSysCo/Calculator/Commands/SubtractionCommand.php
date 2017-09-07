<?php

namespace RDSysCo\Calculator\Commands;

use RDSysCo\Calculator\Command;

class SubtractionCommand extends Command
{
    public function execute()
    {
        $this->calculator->sub($this->op);
    }

    public function undo()
    {
        $this->calculator->add($this->op);
    }
}
