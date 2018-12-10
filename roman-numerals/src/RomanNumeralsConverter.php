<?php

class RomanNumeralsConverter
{
    /**
     * @param int $number
     * @return string
     */
    public function convert(int $number): string
    {
        $this->guardAgainstInvalidNumber($number);

        $solution = '';

        return $solution;
    }

    /**
     * @param $number
     */
    private function guardAgainstInvalidNumber(int $number): void
    {
        if ($number <= 0) {
            throw new InvalidArgumentException;
        }
    }

}
