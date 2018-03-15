<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class IndexAction
{
    public function index()
    {
        echo 'index';
    }

    public function test($year = 2016, $month = 10, $day = 10)
    {
        echo $year.'--'.$month.'--'.$day;
    }

    public function _before_index()
    {
        echo "\n".__FUNCTION__."\n";
    }

    public function _after_index()
    {
        echo __FUNCTION__."\n";
    }
}

$reflect_class = new ReflectionClass('IndexAction');
if ($reflect_class -> hasMethod('index')) {
    echo "has index()";
    echo "\n";
    $reflect_method = $reflect_class -> getMethod('index');
    if ($reflect_method -> isPublic()) {
        echo "index() is public";
        if ($reflect_class -> hasMethod('_before_index')) {
            $reflect_method_before = $reflect_class -> getMethod('_before_index');
            if ($reflect_method_before -> isPublic()) {
                $reflect_method_before -> invoke($reflect_class -> newInstance());
            }
        }
        $reflect_class -> getMethod('test') -> invoke($reflect_class -> newInstance());
        echo "\n";
        if ($reflect_class -> hasMethod('_after_index')) {
            $reflect_method_after = $reflect_class -> getMethod('_after_index');
            if ($reflect_method_after -> isPublic()) {
                $reflect_method_after -> invoke($reflect_class -> newInstance());
            }
        }
    }
} else {
    echo "no index()";
}




