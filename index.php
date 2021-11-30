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
$router->get("/cadastro", "Web:cadastrar", "web.cadastrar");

/*
 * WEB POST ROUTES
 */
$router->group(null);
$router->post("/login", "Auth:login", "auth.login");
$router->post("/register", "Auth:register", "auth.register");
$router->post("/forget", "Auth:forget", "auth.forget");
$router->post("/reset", "Auth:reset", "auth.reset");


/*
*  USER INTERN AREA GET ROUTES
*/
$router->group('user');
$router->get("/", "Dash:index", "dash.index");
$router->get("/buy/{id}", "Dash:buy", "dash.buy");
$router->post("/buy", "Dash:buying", "dash.buying");

$router->group('admin');
$router->get("/", "Admin:index", "admin.index");
$router->get("/register", "Admin:register", "admin.register");
$router->get("/report", "Admin:report", "admin.report");
$router->post("/registerProduct", "Dash:registerProduct", "dash.registerProduct");
$router->get("/deleteProduct/{id}", "Dash:deleteProduct", "dash.deleteProduct");
/*
 * ADMIN AREA GET ROUTES
 */



/*
 * FOR ERRORS
 */
$router->group('ooops');
$router->get("/{error}", "Web:error", "web.error");

// executins routes
$router->dispatch();

if ($router->error()){
    $router->redirect("web.error", ["error" => $router->error()]);
} 

ob_end_flush();

