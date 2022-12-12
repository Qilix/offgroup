<?php

class Connection
{
    static $server = "localhost";
    static $user = "root";
    static $pass = "root";
    static $db = "offgroup";

    static $link;

    public static function connect(){
        self::$link = mysqli_connect(self::$server, self::$user, self::$pass, self::$db) or die("Sorry, can't connect to the mysql.");;
        return self::$link;
    }

}
