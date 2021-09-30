<?php 
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * User
 */
class User extends DataLayer
{     
     /**
      * __construct
      *
      * @return void
      */
     function __construct() {
        parent::__construct("usuarios", [
            "nome",
            'email',
            'senha'
        ], 'id_usuario', false);
    }
    
    /**
     * save
     *
     * @return bool
     */
    
    public function save(): bool
    {
        if (!$this->validadePass() || !parent::save()) {
            return false;
        }
        
        return true;
    }
    
    /**
     * validateEmail
     *
     * @return bool
     */
    public function validateEmail(): bool
    {
        if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

            $this->fail = new Exception("Informe um e-mail válido");

            return false;
        }

        $userByEmail = null;

        if (!$this->id_user) {
            $userByEmail = $this->find("email = :email", "email={$this->email}")->count();
        } else {
            $userByEmail = $this->find("email = :email AND id_user != :id", "email={$this->email}&id={$this->id}")->count();
        }

        if ($userByEmail) {
            $this->fail = new Exception("O e-mail informado já está em uso");
            return false;
        }

        return true;
    }
    
    /**
     * validadePass
     *
     * @return bool
     */
    public function validadePass():bool
    {
        if (empty($this->senha) || strlen($this->senha) < 5) {
            $this->fail = new Exception("Informe uma senha com pelo menos 5 caracteres.");
            return false;
        }
        return true;
    }

}