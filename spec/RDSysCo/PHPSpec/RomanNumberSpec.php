<?php

namespace spec\RDSysCo\PHPSpec;

use RDSysCo\PHPSpec\RomanNumber;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumber::class);
    }

    function it_should_return_I_for_1()
    {
        $this->convert(1)->shouldReturn("I");
    }

    function it_should_return_II_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    function it_should_return_III_for_3()
    {
        $this->convert(3)->shouldReturn('III');
    }

    function it_should_return_IV_for_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }

    function it_should_return_V_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    function it_should_return_VI_for_6()
    {
        $this->convert(6)->shouldReturn("VI");
    }

    function it_should_return_VIII_for_8()
    {
        $this->convert(8)->shouldReturn("VIII");
    }

    function it_should_return_IX_for_9()
    {
        $this->convert(9)->shouldReturn("IX");
    }

    function it_should_return_XVI_for_16()
    {
        $this->convert(16)->shouldReturn("XVI");
    }

    function it_should_return_LXXXIX_for_89()
    {
        $this->convert(89)->shouldReturn("LXXXIX");
    }

    function it_should_return_XCIV_for_94()
    {
        $this->convert(94)->shouldReturn("XCIV");
    }

    function it_should_return_C_for_100()
    {
        $this->convert(100)->shouldReturn("C");
    }

    function it_should_return_CD_for_400()
    {
        $this->convert(400)->shouldReturn("CD");
    }

    function it_should_return_CDXCVII_for_497()
    {
        $this->convert(497)->shouldReturn("CDXCVII");

    }

    function it_should_return_D_for_500()
    {
        $this->convert(500)->shouldReturn("D");
    }

    function it_should_return_CM_for_900()
    {
        $this->convert(900)->shouldReturn('CM');
    }

    function it_should_return_MCMLXXXIII_for_1983()
    {
        $this->convert(1983)->shouldReturn('MCMLXXXIII');
    }

    function it_should_return_MCMLXXXIV_for_1984()
    {
        $this->convert(1984)->shouldReturn('MCMLXXXIV');
    }

    function it_should_throw_exception_for_0(){
        $this->shouldThrow(\InvalidArgumentException::class)->during('convert',[0]);
    }

    function it_should_throw_exception_for_negative_number(){
        $this->shouldThrow(\InvalidArgumentException::class)->during('convert',[-500]);
    }
}
