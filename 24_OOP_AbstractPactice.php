<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */

abstract class DB
{
    public $conn;

    abstract function getConnection(array $arr = null);

    abstract function query(array $arr = null);
}

class MySqlDB extends DB{
    function getConnection(array $arr = null)
    {
        // TODO: Implement getConnection() method.
        echo "mysql connecting";
    }

    function query(array $arr = null)
    {
        // TODO: Implement query() method.
        echo "mysql querying";
    }
}

class OracleDB extends DB{
    function getConnection(array $arr = null)
    {
        // TODO: Implement getConnection() method.
    }

    function query(array $arr = null)
    {
        // TODO: Implement query() method.
    }
}

$mysql_db = new MySqlDB();
$mysql_db -> getConnection();
echo "\n";
$mysql_db -> query();