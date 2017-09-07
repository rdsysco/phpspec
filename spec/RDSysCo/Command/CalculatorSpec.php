<?php

namespace spec\RDSysCo\Command;

use RDSysCo\Command\Calculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_returns_0_for_adding_nothing() {
        $this->add(0);
        $this->getResult()->shouldReturn(0);
    }

    function it_works_for_simple_addition() {
        $this->add(10);
        $this->getResult()->shouldReturn(10);
    }

    function it_works_for_multiple_additions() {
        $this->add(10);
        $this->add(20);
        $this->getResult()->shouldReturn(30);
    }

    function it_undoes_addition() {
        $this->add(10);
        $this->undo();
        $this->getResult()->shouldReturn(0);
    }

    function it_returns_0_for_multiplication_to_nothing() {
        $this->mul(10);
        $this->getResult()->shouldReturn(0);
    }

    function it_returns_0_for_multiply_by_0 () {
        $this->add(10);
        $this->mul(0);
        $this->getResult()->shouldReturn(0);
    }

    function it_multiplies() {
        $this->add(10);
        $this->mul(5);
        $this->getResult()->shouldReturn(50);
    }

    function it_undoes_multiplication() {
        $this->add(10);
        $this->mul(5);
        $this->undo();
        $this->getResult()->shouldReturn(10);
    }

    function it_undoes_multiply_by_0() {
        $this->add(10);
        $this->mul(0);
        $this->undo();
        $this->getResult()->shouldReturn(10);
    }

    function it_works_for_subtraction() {
        $this->sub(10);
        $this->getResult()->shouldReturn(-10);
    }

    function it_undoes_sub() {
        $this->sub(10);
        $this->undo();
        $this->getResult()->shouldReturn(0);
    }

    function it_divides() {
        $this->add(10);
        $this->div(2);
        $this->getResult()->shouldReturn(5);
    }

    function it_guards_division_by_0 () {
        $this->add(10);
        $this->shouldThrow(\InvalidArgumentException::class)->during('div', [0]);
    }

    function it_undoes_division() {
        $this->add(10);
        $this->div(2);
        $this->undo();
        $this->getResult()->shouldReturn(10);
    }

    function it_works_for_complicated_primitive_calculations() {
        $this->add(2);
        $this->mul(5);
        $this->sub(2);
        $this->div(4);
        $this->getResult()->shouldReturn(2);
    }

    function it_works_for_complicated_primitive_calculations_with_undo() {
        $this->add(2);
        $this->add(5);
        $this->undo();
        $this->mul(5);
        $this->mul(10);
        $this->undo();
        $this->sub(2);
        $this->sub(5);
        $this->undo();
        $this->div(4);
        $this->div(2);
        $this->undo();
        $this->getResult()->shouldReturn(2);
    }
}
