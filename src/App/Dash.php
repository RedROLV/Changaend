<?php

namespace Source\App;
use Source\Models\User;
use CoffeeCode\Router\Router;
use Source\Models\Payment;
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

        $products = (new Product())->find()->fetch(true);
        echo $this->view->render("themes\dash_user\user", [
            "products" => $products
        ]);
    }

    

    
    public function registerProduct($data) {

        $product = new Product();
        $product->img = $data["img"];
        $product->nome = $data["nome"];
        $product->preco = $data["preco"];
        $product->descricao = $data["descricao"];

        $product->save();
        echo "<script> alert('produto incluido') </script>";
        $this->router->redirect("dash.index");
    }

    public function DeleteProduct($data)
    {
        $product = (new Product)->findById($data["id"])->destroy();

        if ($product) {
            echo "deletado com sucesso";
            $this->router->redirect("dash.index");
        }
    }

    public function buy($data)
    {
        $product = (new Product)->findById($data["id"]);

        echo $this->view->render("themes\dash_user\buy", [
            "product" => $product
        ]);
    }

    public function buying($data)
    {
        $product = (new Payment);
        $product->id_product = $data["product_id"];
        $product->id_user = $data["user_id"];
        $product->hash_buy = rand(82764382, 99823764);

        if ($product->save()) {
            echo "<script> alert('PARABENS COMPRA CONCLUIDA') </script>";
            $this->router->redirect("dash.index");
        }
        

        
        
    }
}