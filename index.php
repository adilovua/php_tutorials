<?php

//Import classes
    require_once "./classes/Employee.php";
    require_once "./classes/User.php";
    require_once "./classes/Student.php";
    require_once "./classes/City.php";
    require_once "./classes/Arr.php";


    $person_1 = new employee("MyName", 19, 1000000);
    $person_2 = new employee("YourName", 29, 2000000);
    $person_3 = new employee("HisName", 39, 3000000);
    $SumOfSalary = $person_1->salary + $person_2->salary + $person_3->salary;
    $SumOfAges = $person_1->age + $person_2->age + $person_3->age;
    echo " Sum of salary of Persons is ". $SumOfSalary. " <br> Sum of ages of Persons is ". $SumOfAges;
    echo "<br>";
    echo "<br>";

    echo $person_2->getName();
    echo "<br>";
    echo $person_2->getAge();
    echo "<br>";
    echo $person_2->getSalary();
    echo "<br>";

    $person_1->identify();
    echo "<br>";
    $Alex = new User();
    $Alex->setName("Alex");
    $Alex->setAge(30);

    $John = new Student();
    $John->setName("John Smith");
    $John->setCourse(4);
    $John->transferToNextCourse();

    echo "<br>";
    $cities = [ new City("Tashkent", 3000000),
        new City("Samarqand", 1500000),
        new City("Bukhara", 1000000)];

    foreach ($cities as $value) {
        echo $value->getName()." population: ". $value->getPopulation()."<br>";
    }

    $ArrOfNumber = [3,3,3,3,3];
    $arr = new Arr;
    $arr->setNumbers($ArrOfNumber);
    echo $arr->getAverage();
