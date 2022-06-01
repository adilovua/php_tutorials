<?php

class Arr
{
    private $numbers;
    private $isArray = true;

    public function setNumbers($number)
    {
        if (is_array($number)) {
            $this->numbers = $number;
        }
        else {
            $this->isArray = false;
        }
    }

    public function getAverage()
    {
        if (isset($this->numbers)) {
            $sum = 0;
            foreach ($this->numbers as $value)
            {
                if (is_numeric($value)) {
                    $sum = $sum + $value;
                }
            }
            return $sum/count($this->numbers);
        }
        else {
           echo "Array is not given or Data you gave is not an Array";
        }
    }
}
