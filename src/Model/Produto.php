<?php
namespace App\Model;
use App\Core\Database;
use PDO;

//model para listar os resultados
public static function listar(){
    $conn = Database::getConnection();
    $sql = "SELECT * FROM produtos ORDER BY id DESC";
    $stmt = $conn->query($sql);

    //retornar dados

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
} 


?>