<?php

namespace app\engine;

class Request{
    protected $requestString;
    protected $controllerName;
    protected $actionName;
    protected $method;
    protected $params=[];



    public function __construct()
    {
      $this->parseRequest();
    }

    protected function parseRequest(){
        $this->rewquestString=$_SERVER['REQUEST_URI'];
        $this->method=$_SERVER['REQUEST_METHOD'];
        $url=explode('/',$this->requestString);
        $this->params=$_REQUEST;
    }
}