<?php 
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * User
 */
class Payment extends DataLayer
{     
     /**
      * __construct
      *
      * @return void
      */
     function __construct() {
        parent::__construct("payment", [], 'id', false);
    }

    public function getProduct()
    {
       return (new Product)->findById($this->id_product)->data();
    }

    public function getUser()
    {
        return (new User)->findById($this->id_user)->data();
    }


}