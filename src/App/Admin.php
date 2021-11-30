<?php

namespace Source\App;
use Source\Models\User;
use CoffeeCode\Router\Router;
use Source\Models\Payment;

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

    public function report()
    {
        $all = [];

        $payments = (new Payment)->find()->fetch(true);

        foreach ($payments as $payment) {
            $all[] = array(
                $payment->data(),
                $payment->getProduct(),
                $payment->getUser(),
            );
        }

        echo $this->view->render("themes\dash_user\\report", [
            "payments" => $all
        ]);
    }

}