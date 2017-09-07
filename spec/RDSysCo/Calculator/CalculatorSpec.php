<?php

namespace spec\RDSysCo\Calculator;

use RDSysCo\Calculator\Calculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    public function it_returns_0_initially()
    {
        $this->getResult()->shouldReturn(0);
    }

    public function it_adds_correctly()
    {
        $this->add(5);
        $this->getResult()->shouldReturn(5);
    }

    public function it_subs_correctly()
    {
        $this->add(10);
        $this->sub(5);
        $this->getResult()->shouldReturn(5);
    }

    public function it_multiplies_correctly()
    {
        $this->add(2);
        $this->mul(2);
        $this->getResult()->shouldReturn(4);
    }

    public function it_divides()
    {
        $this->add(2);
        $this->div(2);
        $this->getResult()->shouldReturn(1);
    }

    public function it_guards_division_by_0()
    {
        $this->add(2);
        $this->shouldThrow(\InvalidArgumentException::class)->during('div', [0]);
    }
}
