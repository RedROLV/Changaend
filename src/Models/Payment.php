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


}