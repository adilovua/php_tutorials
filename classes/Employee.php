<?php

class employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function identify()
    {
        echo "<br>Persons name is " . $this->name . "<br>He(She) is " . $this->age . " years old!!! <br>";
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSalary(){
        return $this->salary;
    }
}
