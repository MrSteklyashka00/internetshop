<?php

use app\engine\Autoload;

include_once './engine/Render.php';
include './engine/Autoload.php';
include './config/config.php';

spl_autoload_register([new Autoload(),'loadClass']);


render('main',[]);

