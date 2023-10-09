<?php

class Database
{

    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
             Database::$connection = new mysqli("localhost", "root", "ThA@#123", "my_sample", "3306");
            //Database::$connection = new mysqli("sql101.epizy.com", "epiz_34305044", "R8ieCtDuaW3Pm", "epiz_34305044_my_sample", "3306");
        }
    }

    public static function iud($q)
    {
        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q)
    {
        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}
