<?php

namespace spec\RDSysCo\Calculator;

use RDSysCo\Calculator\Invoker;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InvokerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Invoker::class);
    }
}
