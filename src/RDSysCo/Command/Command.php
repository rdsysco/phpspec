<?php
/**
 * Filename: Command.
 * User: Mithredate
 * Date: Sep, 2017
 */

namespace RDSysCo\Command;


abstract class Command
{

    /**
     * @var int
     */
    protected $input;

    /**
     * @var CalculatorReceiver
     */
    protected $receiver;

    public function __construct($input, CalculatorReceiver $receiver)
    {
        $this->input = $input;
        $this->receiver = $receiver;
    }

    abstract public function execute();

    abstract public function undo();
}