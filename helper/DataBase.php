<?php
/**
 * Created by PhpStorm.
 * User: Juliano
 * Date: 22/06/2015
 * Time: 20:07
 */
include "GlobalHelper.php";

class DataBase {
    private static $instance;
    private $connection;

    private function __construct() {
    }

    public static function getInstance(){
        if (self::$instance == null)
            self::$instance = new DataBase();
        return self::$instance;
    }

    public function connect() {
        $connection = mysql_connect(GlobalHelper::$HOST, GlobalHelper::$USER, GlobalHelper::$PASSWORD) or print (mysql_error());
        mysql_select_db(GlobalHelper::$DATABASE, $connection) or print(mysql_error());
    }

    public function __destruct(){
        mysql_close($connection);
    }

    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }

}