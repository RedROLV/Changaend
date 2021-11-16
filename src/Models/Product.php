<?php 
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * User
 */
class Product extends DataLayer
{     
     /**
      * __construct
      *
      * @return void
      */
     function __construct() {
        parent::__construct("produtos", [
            "imagem",
            'nome',
            'preco',
            'qnt',
            'descricao'
        ], 'id', false);
    }


}