<?php

class Conexao{
    public static $instance;
    private function __construct(){
        //criar a funcionalidade de instância
    }
    public static function getConexao(){
        if(!isset(self::$instance)){
            self::$instance = new PDO('mysql:host=localhost;dbname=login', 'root','senac',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
    }
}