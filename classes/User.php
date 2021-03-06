<?php
class User {
    public $name;
    public $age;

    /*public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }*/
    // Метод для изменения возраста юзера:
    public function setName($name)
    {
        $this->name = $name;
        return  $this->name;
    }

    public function setAge($age)
    {
        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    // Метод для добавления к возрасту:
    public function addAge($years)
    {
        $newAge = $this->age + $years; // вычислим новый возраст

        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge; // обновим, если новый возраст прошел проверку
        }
    }

    // Объявим приватным:
    private function isAgeCorrect($age)
    {
        return $age >= 18 and $age <= 60;
    }
}
