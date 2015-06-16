<?php
/**
 * Created by PhpStorm.
 * User: Juliano
 * Date: 15/06/2015
 * Time: 20:56
 */

class Session{
    private static $session_id;
    private static $session_name;

    private static function initialize() {
        session_start();
    }

    public static function set_session_id() {
        self::$session_id = session_id();
    }

    public static function get_session_id() {
        return self::$session_id;
    }

    public static function session_exist() {
      isset($_SESSION[self::$session_name]);
    }

    public static function create_session($name) {
        if (self::session_exist)
            self::remove_session();
        self::initialize();
        self::$session_name = $name;
        $_SESSION[self::$session_name]= array();
    }

    public static function insert_value(array $value) {
        array_push($_SESSION[self::$session_name], data);
    }

    public static function remove_session() {
        unset($_SESSION[self::$session_name]);
    }

    public static function get_session() {
        return $_SESSION[self::$session_name];
    }
}
