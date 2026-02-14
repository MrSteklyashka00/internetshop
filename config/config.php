<?php
define("ROOT",dirname(__DIR__));
define("DS", DIRECTORY_SEPARATOR);
define("CONTROLLER_NS",'app\\controllers\\');
define('VIEW_DIR','./views/');

define('CAN_BUY',1); //00000.. 001
define('CAN_EDIT_BUSKET',2); //000000..0010
define('CAN_PAY',4);//000000...00100