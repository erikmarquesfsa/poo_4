<?php
namespace App\Controller;
use App\Model\Produto;

//controla fluxo do app

class ProdutoController{
    
    public function index(){
        echo "<h1>Minha página</h1>";
        echo "<a href='/produtos'>Ver Produtos</a>";
    }

    public function listar()
    {
        $produtos = Produto::listar();

        echo "<h2>Produtos</h2>";

        foreach ($produtos as $p) {
            echo $p['nome'] . " - R$ " . $p['preco'] . "<br>";
        }

        echo "<br><a href='/produtos/criar'>Novo Produto</a>";
    }

}

?>