<?php

namespace Source\App;
use Source\Models\User;
use CoffeeCode\Router\Router;
use Source\Models\Product;

class Dash extends Controller
{

    public function __construct($router)
    {
        parent::__construct($router);
        
        if (empty($_SESSION["user"]) || !$this->user = (new User())->findById($_SESSION["user"])) {
            unset($_SESSION["user"]);
            $this->router->redirect("web.login");
        }
        
        
    }

    public function index()
    {
        echo "user dash";
    }

    

    
    public function registerProduct($data) {

        $product = new Product();
        $product->imagem = $data["imagem"];
        $product->nome = $data["nome"];
        $product->preco = $data["preco"];
        $product->qnt = $data["qnt"];
        $product->descricao = $data["descricao"];

        $product->save();
    }

    public function DeleteProduct($data)
    {
        $product = (new Product)->findById($data["id"])->destroy();

        if ($product) {
            echo "deletado com sucesso";
        }
    }
}