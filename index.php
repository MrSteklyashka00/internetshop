<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE & ~E_WARNING);
session_start();

use app\engine\Autoload;
use app\engine\Request;
use app\engine\Render;

// include_once './engine/Render.php';
include './engine/Autoload.php';
include './config/config.php';
//include './engine/Request.php';

spl_autoload_register([new Autoload(),'loadClass']);

$request = new Request();

$controllerName=$request->getControllerName()?: 'shop' ;
$actionName=$request->getActionName()?: 'index';

$controllerClass= CONTROLLER_NS . ucfirst($controllerName) . 'Controller';
// echo $controllerClass . '<br>';
// app\controlers\ShopController

if (class_exists($controllerClass)){
    $controller=new $controllerClass(new Render());
    $controller->runAction($actionName, $request->getParams());
} else
    echo "Контроллер" .$controllerClass." не найден!";

//render('main',[]);

