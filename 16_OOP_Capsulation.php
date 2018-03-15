<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */

/*
 * public ---------------------> it can be accessed by anywhere
 * protected ------------------> it can be accessed by self and sub-class
 * private --------------------> it can be accessed only by self
 */

class Calculate
{
    public $n1;
    protected $n2;
    private $n3;

    public function getN1()
    {
        return $this -> n1;
    }

    protected function getN2()
    {
        return $this -> n2;
    }

    private function getN3()
    {
        return $this -> n3;
    }
}