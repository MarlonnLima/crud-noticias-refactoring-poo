<?php

namespace App\Model;

class Conexao {
    private static $instance;

    public static function getConnection() {

        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;dbname=crud-noticias;charset=utf8', 'root', '44565');
        endif;

        return self::$instance;
    }
}