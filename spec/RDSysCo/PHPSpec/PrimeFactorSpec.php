<?php

namespace spec\RDSysCo\PHPSpec;

use RDSysCo\PHPSpec\PrimeFactor;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactor::class);
    }

    function it_should_return_empty_for_1(){
        $this->convert(1)->shouldReturn([]);
    }

    function it_should_return_2_for_2(){
        $this->convert(2)->shouldReturn([2]);
    }

    function it_should_return_5_for_5() {
        $this->convert(5)->shouldReturn([5]);
    }

    function it_should_return_2_5_for_10() {
        $this->convert(10)->shouldReturn([2,5]);
    }

    function it_should_return_3_3_3_for_27(){
        $this->convert(27)->shouldReturn([3,3,3]);
    }
    function it_should_return_2_2_3_3_for_36()
    {
        $this->convert(36)->shouldReturn([2,2,3,3]);
    }
    function it_should_throw_exception_for_0()
    {
        $this->shouldThrow(\Exception::class)->during('convert',[0]);
    }
    function it_should_throw_exception_for_negative_50()
    {
        $this->shouldThrow(\Exception::class)->during('convert', [-50]);
    }
}
