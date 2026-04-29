<?php
namespace App\Controller;
use App\Model\Produto;

//controla fluxo do app

class ProdutoController{
    
    public function index(){
        echo "<h1>Minha página</h1>";
        echo "<a href='/produtos'>Ver Produtos</a>";
    }

}

?>