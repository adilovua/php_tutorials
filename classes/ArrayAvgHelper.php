<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

class ArrayAvgHelper
{
    public function getAvg1($arr){
        $power = 1;
        return $this->getSum($arr, $power);
    }

    public function getAvg2($arr){
        $power = 2;
        return $this->getSum($arr, $power);
    }

    public function getAvg3($arr){
        $power = 3;
        return $this->getSum($arr, $power);
    }
    public function getAvg4($arr){
        $power = 4;
        return $this->getSum($arr, $power);
    }

    private function getSum($arr, $power){
        $sum = 0;
        foreach ($arr as $value) {
            $sum += $this->calcSqrt($value, $power);
        }
        return $sum;
    }

    private function calcSqrt($number, $power){
        return pow($number, 1/$power);
    }

}
