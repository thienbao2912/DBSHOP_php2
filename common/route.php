<?php

use App\Controllers\AuthController;
use App\Controllers\CalendarController;
use App\Controllers\CensorController;
use App\Controllers\UserController;
use Phroute\Phroute\RouteCollector;
    use Phroute\Phroute\Dispatcher;

    $url = !isset($_GET['url']) ? "/" : $_GET['url'];

    $router = new RouteCollector();

    // filter check đăng nhập
    $router->filter('auth', function(){
        if(!isset($_SESSION['isLogin']) || ($_SESSION['isLogin'] === false)){
            header('location: ' . BASE_URL . 'login');die;
        }
    });
    //filter admin
    $router->filter('admin', function(){
        if(!isset($_SESSION['isLogin']) || ($_SESSION['isLogin'] === false) || $_SESSION['user']['roleID'] != 1){
            header('location: ' . BASE_URL . 'login');die;
        }
    });
    // khu vực cần quan tâm -----------

    // Khu vực định nghĩa ra các đường dẫn
    $router->get("/", [CalendarController::class, "index"]);
    //login
    $router->get("login", [AuthController::class, "index"]);
    $router->post("submitLogin", [AuthController::class, "login"]);
    $router->get("logout", [AuthController::class, "logout"]);
    //forgot password
    $router->get("forgot-password", [AuthController::class, "forgot"]);
    $router->post("submitForgot", [AuthController::class, "forGotPassword"]);
    //calendar
$router->group(['before' => 'auth'], function($router){
    $router->get("list-calendar", [CalendarController::class, "index"]);
    $router->get("add-calendar", [CalendarController::class, "add"]);
    $router->post("submitAdd", [CalendarController::class, "store"]);
    $router->get("edit-calendar/{id}", [CalendarController::class, "edit"]);
    $router->post("submitEdit/{id}", [CalendarController::class, "update"]);
    $router->get("delete-calendar/{id}", [CalendarController::class, "delete"]);
});

    //censor
    //định nghĩa route có đã đăng nhập tài khoản admin
    $router->group(['before' => 'admin'], function($router){
        $router->get("list-censor", [CensorController::class, "index"]);
        $router->post("approve", [CensorController::class, "approve"]);
        //user
        $router->get("list-user", [UserController::class, "index"]);
        $router->get("add-user", [UserController::class, "add"]);
        $router->post("submitAddUser", [UserController::class, "store"]);
        $router->get("edit-user/{id}", [UserController::class, "edit"]);
        $router->post("submitEditUser/{id}", [UserController::class, "update"]);
        $router->get("delete-user/{id}", [UserController::class, "delete"]);
    });



    $dispatcher = new Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

    // Print out the value returned from the dispatched function
    echo $response;


?>