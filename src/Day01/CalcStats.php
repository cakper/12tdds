<?php

namespace Day01;

class CalcStats
{
    private $roundPrecision = 6;

    public function min(array $numbers)
    {
        return min($numbers);
    }

    public function max(array $numbers)
    {
        return max($numbers);
    }

    public function count(array $numbers)
    {
        return count($numbers);
    }

    public function avg(array $numbers)
    {
        $avg = array_sum($numbers) / $this->count($numbers);
        return round($avg, $this->roundPrecision);
    }
}
