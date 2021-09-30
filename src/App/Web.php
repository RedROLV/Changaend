<?php

namespace Source\App;
use Source\Models\User;
use Source\Models\Categories;
use CoffeeCode\Router\Router;

class Web extends Controller
{

    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function index()
    {
        /**echo $this->view->render("themes/web/index", [
            'title' => site('name'). ' | jeito mais facil de encontrar um serviço!'
        ]);         */

        // echo "pelo amor de deus";

        echo $this->view->render('themes/home');
        


    }


    public function cadastrar()
    {
        echo $this->view->render('themes/cadastro', [
            'title' => site('name'). ' | Faça o cadastro!'
        ]);

    }


    public function login()
    {
        echo $this->view->render("themes/login", [
            'title' => site('name'). ' | Faça o login!'
        ]);
    }


    public function forget()
    {
        echo $this->view->render("themes/web/recover", [
            'title' => site('name'). " | recuperar a senha",

        ]); 
    }

    public function reset($data)
    {

        $email = filter_var($data["email"], FILTER_VALIDATE_EMAIL);
        $forget = filter_var($data["forget"], FILTER_DEFAULT);


        if (!$email || !$forget) {
            flash("bg-error", "Não foi possível recuperar, tente novamente");
            $this->router->redirect("web.forget");
        }

        $user = (new User())->find("email = :e AND forget = :f", "e={$email}&f={$forget}")->fetch();
        
        if (!$user) {
            flash("bg-error", "Não foi possível recuperar, tente novamente");
            $this->router->redirect("web.forget");
        }

        echo $this->view->render("themes/web/reset", [
            'title' => site('name'). " | recuperar a senha",
        ]); 
    }

    public function error($data)
    {

        $errcode = filter_var($data['errcode'], FILTER_SANITIZE_STRIPPED);

        echo $this->view->render("themes/web/error", [
            'title' => site('name'). " | ooops erro {$errcode}",
            'errcode' => $errcode
        ]);
    }
}