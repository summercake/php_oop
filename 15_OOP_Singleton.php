<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
final class DBHelper{
    // db connection
    private $conn;
    private static $instance = null;

    private function __construct(){
        $this->conn = @mysqli_connect('localhost','root','root');
    }

    public static function getSingleton(){
        /*if (self ::$instance == null) {
            self::$instance = new DBHelper();
        }*/
        if (!(self ::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    // to ban clone
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function query($sql){
        echo "Querying";
    }
}
//$db1 = new DBHelper();
//$db2 = new DBHelper();