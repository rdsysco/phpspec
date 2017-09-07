<?php
/**
 * Filename: CalculatorReceiver.
 * User: Mithredate
 * Date: Sep, 2017
 */

namespace RDSysCo\Command;


interface CalculatorReceiver
{
    public function getResult();

    public function setResult($result);
}