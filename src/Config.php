<?php

    define('SITE', [
        "name" => "Changend",
        "desc" => "Olx de Brecho online",
        "locale" => "pt_BR",
        "base_url" => "http://localhost/Projects/Changaend"
    ]);

    define("PAGARME_API_KEY", ""); // coloque sei token da api do pagar.me

    define("DATA_LAYER_CONFIG", [
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "dbname" => "pmp",
        "username" => "root",
        "passwd" => "",
        "options" => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
    ]);


    /*
    *   MAIL CONNECT
    */

    define('MAIL', [
        "host" => "",
        "port" => "",
        "user" => "",
        "passwd" => "",
        "from_name" => "",
        "from_email" => ""
    ]);

    