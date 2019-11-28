
<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/DBData.php';
require __DIR__ . '/../app/Controllers/MainController.php';


$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/details/[i:id]', 'MainController#details', 'details');

$match = $router->match();

if ($match !== false) {

    $dispatchInfos = $match['target'];
    $controllerAndMethod = explode('#', $dispatchInfos);
    $controllerName = $controllerAndMethod[0];
    $methodName = $controllerAndMethod[1];

    $controller = new $controllerName();
    $controller->$methodName($match['params']);

    // $match['params']['id'];
    
} else {

    $controller = new MainController();
    $controller->error404();
}