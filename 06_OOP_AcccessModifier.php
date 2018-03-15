<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/12/2018
 * Time: 10:09 PM
 */
// public can be accessed anywhere
// protected can be accessed inside the class
// private can be accessed inside the class
class Clerk
{
    public $name;
    protected $job;
    private $salary;

    function __construct($name, $job, $salary)
    {
        $this -> name = $name;
        $this -> job = $job;
        $this -> salary = $salary;
    }

    public function getJob()
    {
        return $this -> job;
    }

    public function getSalary()
    {
        return $this -> salary;
    }
}

$clerk1 = new Clerk('jack', 'PHP Engineer', 30000);
echo $clerk1 -> name;
echo "\n";
//echo $clerk1 -> job; // it can not be accessed
echo $clerk1 -> getJob();
echo "\n";
echo $clerk1 -> getSalary();

