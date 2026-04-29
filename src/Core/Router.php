<?php
namespace App\Core;

//classe que simula o roteamento

class Router{

    private $routes = [];

    //registrar a rota get
    public function get($uri,$action){
        $this->routes['GET'][$uri] = $action;
    }

    //registrar post
    public function post($uri,$action){
        $this->routes['POST'][$uri] = $action;
    }

    //executa rota
    public function run(){
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        if(isset($this->routes[$method][$uri])){
            $action = $this->routes[$method][$uri];
            $controller = new $action[0];
            $method = $action[1];

            $controller->$method();

        }else{
            echo "404";
        }
    }

}

?>