<?php

//inheritance - for code resuablity

class Person
{
    public $name;
    public $age;

    public function dispay()
    {
        echo "<h1> " . $this->name . "</h1> ";
        echo "<h2> " . $this->age . "</h2> ";
    }
}

class Student extends Person
{
    public $school;
    public $rollno;

    public function stDetails()
    {
        echo "<h1> " . $this->name . "</h1>";
        echo "<h1> " . $this->age . "</h1>";
        echo "<h1> " . $this->school . "</h1>";
        echo "<h1> " . $this->rollno . "</h1>";
    }

    public function getName() {
        echo "<h1> " .$this->name. "</h1>";
    }
}


$st = new Student();
$st->name = "Rahul";
$st->school = "Sri Sai University";
$st->rollno = "123456";

$st->getName();
