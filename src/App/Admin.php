<?php

namespace Source\App;
use Source\Models\User;
use CoffeeCode\Router\Router;

class Admin extends Controller
{

    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function index()
    {
        echo $this->view->render("themes\dash_admin\admin");
    }

    public function register()
    {
        echo $this->view->render("themes\dash_admin\\registerprod");
    }


}