<?php

class Arr_1
{
    private $number = [];

    public function Add(int $number)
    {
        $this->number[] = $number;
    }

    public function getAverage()
    {
        foreach ($this->number as $value) {
            if (is_numeric($value)) {
                $sum = $sum + $value;
            }
        }
        return $sum / count($this->number);
    }
}
