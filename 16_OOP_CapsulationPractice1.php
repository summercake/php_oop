<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class clerk{
    public $name;
    protected $job;
    private $salary;

    public function __construct($name, $job, $salary){
        $this->name = $name;
        $this->job = $job;
        $this->salary = $salary;
    }

    public function getJob($pwd){
        if ($pwd == '123') {
            return $this->job;
        } else {
            return 'Pwd incorrect!!!';
        }
    }
}

$clerk = new Clerk('jack', 'php coder', 23000);
echo $clerk->name;
echo "\n";
echo $clerk -> getJob('123');