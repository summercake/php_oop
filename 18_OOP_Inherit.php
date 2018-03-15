<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
// base class
class Student
{
    public $name;
    public $gender;
    protected $score;

    public function __construct($name, $gender)
    {
        $this -> name = $name;
        $this -> gender = $gender;
    }

    //public function testing()
    //{
    //    echo "testing";
    //}
    public function setScore($score)
    {
        $this -> score = $score;
    }

    public function getScore()
    {
        return $this -> score;
    }
}

// sub class
class Pupil extends Student
{
    public function testing()
    {
        echo 'Pupil tests';
    }
}

// sub class
class Undergraduate extends Student
{
    public function testing()
    {
        echo 'Undergraduate tests';
    }
}

$pupil = new Pupil('jack', 'male');
$pupil -> testing();
$pupil -> setScore(100);
echo "\n";
echo $pupil->getScore();
echo "\n";
$under_graduate = new Undergraduate('mike', 'male');
$under_graduate -> testing();
$under_graduate -> setScore(59);
echo "\n";
echo $under_graduate->getScore();
