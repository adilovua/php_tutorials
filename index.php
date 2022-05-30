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
        public function identify() {
            echo "<br>Persons name is ". $this->name. "<br>He(She) is ". $this->age. " years old!!! <br>";
        }
    }

    $person_1 = new employee("MyName", 19, 1000000);
    $person_2 = new employee("YourName", 29, 2000000);
    $person_3 = new employee("HisName", 39, 3000000);
    $SumOfSalary = $person_1->salary + $person_2->salary + $person_3->salary;
    $SumOfAges = $person_1->age + $person_2->age + $person_3->age;
    echo " Sum of salary of Persons is ". $SumOfSalary. " <br> Sum of ages of Persons is ". $SumOfAges;

    $person_1->identify();

