<?php 
    
namespace Source\App;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller {
    /*
    @var Engine
    */
    protected $view;
    /*
    @var Router
    */
    protected $router;


    public function __construct($router) {
        $this->router = $router;
        $this->view = Engine::create(dirname(__FILE__ , 3) . "/views/", "php");
        $this->view->addData(["router" => $this->router]);
    }


    public function ajax(string $param, array $values): string
    {
        return json_encode(array(
            $param => $values
        ));
    }
    
}

    /*
    A ser modificado
    */