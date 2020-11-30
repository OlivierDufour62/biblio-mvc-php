<?php

namespace Core;

use PDO;

abstract class Model 
{
    private static $pdo;

    private static function setBdd()
    {
        self::$pdo = new PDO('mysql:host=localhost;dbname=biblio', 'root');
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd()
    {
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}