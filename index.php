<?php

ob_start();
session_start();

require_once __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(site());
$router->namespace('Source\App');

/*
 * WEB
 */
$router->group(null);
$router->get("/", "Web:index", "web.index");


$router->get("/termos", "Web:terms", "web.terms");
$router->get("/login", "Web:login", "web.login");
$router->get("/recuperar", "Web:forget", "web.forget");
$router->get("/senha/{email}/{forget}", "Web:reset", "web.reset");
$router->get("/ca", "Web:cadastrar", "web.cadastrar");

/*
 * WEB POST ROUTES
 */
$router->group(null);
$router->post("/login", "Auth:login", "auth.login");
$router->post("/register", "Auth:register", "auth.register");
$router->post("/forget", "Auth:forget", "auth.forget");
$router->post("/reset", "Auth:reset", "auth.reset");
/*
 * Adm
 */

$router->group('admin');
$router->get('/', function(){
    echo '<h1>Nn existe ainda</h1>';
}, 'admin.index');


/*
 * FOR ERRORS
 */
$router->group('ooops');
$router->get("/{errcode}", "Web:error", "web.error");

// executins routes
$router->dispatch();

if ($router->error()){
    $router->redirect("web.error", ["errcode" => $router->error()]);
} 

ob_end_flush();

