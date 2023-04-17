<?php

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', ["App\controller\HomeController", "home"]);
    $r->addRoute('GET', '/adminka', ["App\controller\HomeController", "adminHome"]);
    $r->addRoute('GET', '/adminCategory', ["App\controller\HomeController", "adminCategory"]);
    $r->addRoute('GET', '/adminImages', ["App\controller\HomeController", "adminImages"]);
    $r->addRoute('GET', '/registration', ["App\controller\HomeController", "registration"]);
});


$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];