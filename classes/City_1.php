<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

class City_1
{
    private $name;
    private $foundation;
    private $population;

    public function __construct($name, int $population, int $foundation){
        $this->name = $name;
        $this->population = $population;
        $this->foundation = $foundation;
    }
    public function getValue($prop)
    {
        return $this->$prop;
    }

}
