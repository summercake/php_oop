<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
$person = new stdClass();
var_dump($person);
$person -> name = 'jack';
$person -> ability = '36 change';
var_dump($person);
echo 'name = '.$person -> name;
echo 'name = '.$person -> name;
echo "\n";
$heros = array(
    'no1' => 'spiderman',
    'no2' => 'ironman',
    'no3' => 'Thur',
);
// after array change to object, it is a stdClass object.
$hero_obj = (object)$heros;
var_dump($hero_obj);


$age = 18;
$age_obj = (object)$age;
var_dump($age_obj);
echo $age_obj -> scalar;