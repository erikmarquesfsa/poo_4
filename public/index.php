<?php
//autoload composer
require __DIR__ .'/../vendor/autoload.php';

//IMPORTAR CLASSES
use App\Core\Router;
use App\Controller\ProdutoController;

//cria roteador
$router = new Router();

//definir rotas
$router->get('/',[ProdutoController::class,'index']);
$router->get('/produtos',[ProdutoController::class,'listar']);
$router->get('/produtos/criar',[ProdutoController::class,'criar']);
$router->post('/produtos/salvar',[ProdutoController::class,'salvar']);

//executa
$router->run();

?>