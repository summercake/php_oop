<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Cat
{
    public $name;
    private static $instance = null;

    private function __construct($name){
        $this->name = $name;
    }

    public static function getSingleton($name){
        if (!(self ::$instance instanceof self)) {
            self::$instance = new Cat($name);
        }
        return self::$instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}