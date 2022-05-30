<?php

//Import classes
    require_once "./classes/Employee.php";
    require_once "./classes/User.php";


    $person_1 = new employee("MyName", 19, 1000000);
    $person_2 = new employee("YourName", 29, 2000000);
    $person_3 = new employee("HisName", 39, 3000000);
    $SumOfSalary = $person_1->salary + $person_2->salary + $person_3->salary;
    $SumOfAges = $person_1->age + $person_2->age + $person_3->age;
    echo " Sum of salary of Persons is ". $SumOfSalary. " <br> Sum of ages of Persons is ". $SumOfAges;
    echo "<br>";

    $person_1->identify();
    echo "<br>";
    $Alex = new User("Alex", 32);
    $Alex->Show("Hello");
