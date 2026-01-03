<?php
namespace app\controllers;

use app\engine\Render;
use app\engine\Session;

Class Controller{
    protected $action;
    protected $defaultAction = 'index';
    protected $render;

    public function __construct( $render)
    {
        $this->render = $render;
    }

    protected function renderTeamplate($template, $params=[]){
        return $this->render->renderTemplate($template, $params);
    }

     protected function render($template, $params=[]){
         echo $this->renderTeamplate(
            'layout',
    [
        'header'=> $this->renderTeamplate('logo_header',['userName'=>Session::getUserName()]),
        'content'=> $this->renderTeamplate($template, $params),
        'footer'=> $this->renderTeamplate('footer',[])
    ]
);
     }

public function runAction($action, $params=[]){
   $this->action=$action ?:$this->defaultAction;
   $method = 'action'.ucfirst($this->action);

// var_dump($action);
// die;

   if(method_exists($this, $method))
    $this->$method($params);
    else
        echo "Метод ". $method . " не найден";
}

}
