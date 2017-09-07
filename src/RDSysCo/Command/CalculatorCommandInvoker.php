<?php
/**
 * Filename: CalculatorCommandInvoker.
 * User: Mithredate
 * Date: Sep, 2017
 */

namespace RDSysCo\Command;


interface CalculatorCommandInvoker
{
    public function addCommand(Command $command);
}