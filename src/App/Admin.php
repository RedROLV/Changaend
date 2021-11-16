<?php

namespace Source\App;
use Source\Models\User;
use CoffeeCode\Router\Router;

class Admin extends Controller
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
        echo "admin dash";
    }


}