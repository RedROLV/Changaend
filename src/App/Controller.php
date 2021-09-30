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
        $this->view = new Engine(dirname(__FILE__ , 3) . "/views");



        
    }


    public function ajax(string $param, array $values): string
    {
        return json_encode(array(
            $param => $values
        ));
    }
    
}