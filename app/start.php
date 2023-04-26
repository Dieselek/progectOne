<?php
require 'routing.php';

use Delight\Auth\Auth;
use DI\ContainerBuilder;
use League\Plates\Engine;
$builder = new ContainerBuilder();
$container=$builder->addDefinitions([
    Engine::class=>function()
    {
        return new Engine('../app/view');
    },
    PDO::class=>function()
    {
        return new PDO("mysql:host=localhost;dbname=test1","dima","3696");
    },
    Auth::class=>function()
    {
    $db=new PDO('mysql:host=localhost; dbname=test1','dima','3696');
    return new Auth($db);
    }
]);
$container = $builder->build();

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $container->call($handler,$vars);
        break;
}



