<?php

namespace App\Core;

use PDO;

// Classe responsável pela conexão com o banco
class Database
{
    private static $conn;

    // Método estático para retornar conexão única
    public static function getConnection()
    {
        // Se ainda não conectou, cria conexão
        if (!self::$conn) {

            // Dados de conexão
            $host = "localhost";
            $dbname = "mini_frame";
            $user = "root";
            $pass = "";

            // Cria conexão PDO
            self::$conn = new PDO(
                "mysql:host=$host;port=3307;dbname=$dbname",
                $user,
                $pass
            );

            // Configura erros como exceção
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        // Retorna conexão
        return self::$conn;
    }
}

?>
