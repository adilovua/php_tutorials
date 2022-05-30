<?php

class Student {
    public $name;
    public $course;

    public function setName($name) {
        $this->name = $name;
        return $this->name;
    }

    public function setCourse($course) {
        if ($this->isCourseCorrect($course)) {
            $this->course = $course;
            return $this->course;
        }
        else {
            echo "it is not correct course";
        }
    }

    public function transferToNextCourse(){

        if ($this->course == 5) {
            echo "Congratulations!!! you Graduated the study!!!";
        }
        else {
            $this->course++;
            echo "Now you are on {$this->course} course ";
        }
    }

    private function isCourseCorrect($course){
        return $course >= 1 and $course <= 5;
    }
}
