<?php

namespace App\Core;

use PDO;
//classe responsável pela conexão
class Database
{
    private static $conn;
    //metodo para retornar conexao unica
    public static function getConnection()
    {
        //conecta se ainda n conectou
        if (!self::$conn) {
            //dados para conectar
            $host = "localhost";
            $dbname = "mini_frame";
            $user = "root";
            $pass = "";

            //cria conexao pdo
            self::$conn = new PDO(
                "mysql:host=$host;dbname=$dbname",
                $user,
                $pass
            );
            //configura erros
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        //RETORNA CONEXÃO
        return self::$conn;
    }
}
