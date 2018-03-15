<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Book
{
    public $book_name;
    public $author;
    public $price;
    private $sales = 0;

    public function __construct($book_name, $author, $price)
    {
        $this -> book_name = $book_name;
        $this -> author = $author;
        $this -> price = $price;
    }

    public function setSales($num)
    {
        if (is_int($num)) {
            $this -> sales = $num;
        } else {
            echo 'wrong data!!!!';
        }
    }

    public function getSales($code)
    {
        if ($code == '123') {
            return $this -> sales;
        } else {
            return 'wrong pwd!!!';
        }
    }
}

$book1 = new Book('php coding', 'jack', 32.99);
$book1 -> setSales(100);
echo "\n";
echo $book1 -> getSales('123');

