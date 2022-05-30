<?php
class User {
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function Show($str){
        echo "Username is {$this->name} <br> User age is {$this->age} <br> {$str}!!!";
    }
}
