<?php

class Connection {
    public static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=localhost;dbname=triviadb;", "root", "",
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }


        if(self::$instance){
          return self::$instance;
        }
        else{
            echo "Connection Failed" ;
        }


    }
}