<?php

namespace spec\Day01;

use PHPSpec2\ObjectBehavior;

class CalcStats extends ObjectBehavior
{
    private $numbers = array(6, 9, 15, -2, 92, 11);

    function it_should_be_initializable()
    {
        $this->shouldHaveType('Day01\CalcStats');
    }

    function it_should_return_minimum_value()
    {
        $this->min($this->numbers)->shouldReturn(-2);
    }

    function it_should_return_maxmium_value()
    {
        $this->max($this->numbers)->shouldReturn(92);
    }

    function it_should_return_number_of_elements_in_the_sequence()
    {
        $this->count($this->numbers)->shouldReturn(6);
    }

    function it_should_return_average_value()
    {
        $this->avg($this->numbers)->shouldReturn(21.833333);
    }
}
