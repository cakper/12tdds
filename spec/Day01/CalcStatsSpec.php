<?php

namespace spec\Day01;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalcStatsSpec extends ObjectBehavior
{
    private $numbers = array(6, 9, 15, -2, 92, 11);

    function it_should_be_initializable()
    {
        $this->shouldHaveType('Day01\CalcStats');
    }

    function it_returns_minimum_value()
    {
        $this->min($this->numbers)->shouldReturn(-2);
    }

    function it_returns_maxmium_value()
    {
        $this->max($this->numbers)->shouldReturn(92);
    }

    function it_returns_number_of_elements_in_the_sequence()
    {
        $this->count($this->numbers)->shouldReturn(6);
    }

    function it_returns_average_value()
    {
        $this->avg($this->numbers)->shouldReturn(21.833333);
    }
}