<?php

class StringCalculator
{
    /**
     * @param $numbers
     * @return int
     */
    public function add(string $numbers): int
    {
        $solution = 0 ;

        return $solution;
    }

    /**
     * @param $number
     */
    private function guardAgainstInvalidNumber($number)
    {
        if ($number < 0)
        {
            throw new InvalidArgumentException("Invalid number provided: {$number}");
        }
    }
}
