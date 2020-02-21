<?php

class connect
{
    public function __construct()
    {
    }
    public static function connect()
    {
        $db = new mysqli('127.0.0.1', 'root', '', 'store_master');

        $db->query("SELECT NAMES 'utf8'");
        return $db;
    }
}
