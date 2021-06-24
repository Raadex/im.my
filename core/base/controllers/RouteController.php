<?php


namespace core\base\controllers;


class RouteController
{
    private static $_instance;

    protected function __construct() { }

    protected function __clone() { }

    public static function getInstance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self;
    }

}