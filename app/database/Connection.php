<?php
namespace app\database;

use PDO;

class Connection
{

    public const HOST = 'localhost';
    public const NAME = 'unespar_sistema_t';
    public const USER = 'sistemaproec';
    public const PASS = 's1proeC';

    private static $connection = null;

    public static function connect()
    {
        if(!self::$connection){
            self::$connection = new PDO(
                'mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS,
                //"mysql:host=localhost;dbname=rotasphpoo","root","root",
                 [
                PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_OBJ
            ]);
        }

        return self::$connection;
    }
}
