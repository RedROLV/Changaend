<?php 

namespace Source\App;
use Source\Models\User;
class Auth extends Controller {

    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function register(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

        $user = new User();
        $user->nome = $data["nome"];
        $user->email = $data["email"];
        $user->senha = md5($data["senha"]);
        $user->telefone = $data['telefone'];
        $user->usuario = $data["usuario"];


        
        if (!$user->save()) {
            echo $this->ajax("message", [
                "type" => "bg-danger",
                "message" => $user->fail()->getMessage()
            ]);
            return;
        }

        $_SESSION["user"] = $user->id_user;
      
        $this->router->redirect('home');
    }

    public function login($data)
    {
        $email = filter_var($data["usuario"], FILTER_SANITIZE_STRIPPED);
        $pass = filter_var($data["senha"], FILTER_DEFAULT);

        if (!$email || !$pass) {
            echo $this->ajax("message", [
                "type" => "bg-danger",
                "message" => "Informe um e-mail e senha para logar"
            ]);
            return;
        }

        $user = (new User())->find("usuario = :e", "e={$email}")->fetch();

        if (!$user || md5($pass) != $user->senha) {
            echo $this->ajax("message", [
                "type" => "bg-danger",
                "message" => "Email ou senha informados são inválidos"
            ]);
            return;
        }


        $_SESSION["user"] = $user->id_user;


        echo $this->ajax("redirect", ["url" => $this->router->route("admin.index")]);
    }


    public function forget($data)
    {
        $email = filter_var($data["email_recover"], FILTER_VALIDATE_EMAIL);
        $code = (md5(uniqid(rand(), true)));

        if (!$email) {
            echo $this->ajax("message", [
                "type" => "bg-info",
                "message" => "Informe seu e-mail corretamente"
            ]);
            return;
        }

        $user = (new User())->find("email = :e", "e={$email}")->fetch();
        
        if (!$user) {
            echo $this->ajax("message", [
                "type" => "bg-danger",
                "message" => "O e-mail informado não é cadastrado"
            ]);
            return;
        }
       
        $user->forget = $code;

        if (!$user->save()) {
           echo $user->fail()->getMessage();
        }
        $_SESSION["forget"] = $user->id_user;

      
        echo $this->ajax("redirect", [
            "url" => $this->router->route("web.forget")
        ]);
     
    }


    public function reset($data): void
    {
        if (!$user = (new User())->findById($_SESSION["forget"])) {
            flash("bg-danger", "Não foi possível recuperar, tente novamente");
            echo $this->ajax("redirect", [
                "url" => $this->router->route("web.forget")
            ]);
            return;
        }

        if (empty($data["password"]) || empty($data["password_re"])) {
            echo $this->ajax("message", [
                "type" => "bg-info" ,
                "message" => "Informe as senhas"
            ]);
            return;
        }

        if ($data["password"] != $data["password_re"]) {
            echo $this->ajax("message", [
                "type" => "bg-danger" ,
                "message" => "Digite as senhas iguais"
            ]);
            return;
        }

        $user->passwd = md5($data["password"]);
        $user->forget = null;
        if (!$user->save()) {
            echo $this->ajax("message", [
                "type" => "error" ,
                "message" => $user->fail()->getMessage()
            ]);
            return;
        }

        unset($_SESSION["forget"]);
        flash("bg-success", "Sua senha foi alterada com sucesso");

        echo $this->ajax("redirect", [
            "url" => $this->router->route("web.login")
        ]);
        return;
    }
    
        
}