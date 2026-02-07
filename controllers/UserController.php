<?php
namespace app\controllers;

use app\engine\Session;

class UserController extends Controller{
    public function actionAuthorize()
    {
        echo $this->render('login_form', []);
    }
    public function actionLogin($pars)
    {
    if(!Session::isAuth()){
        if(Session::login($pars['name'],$pars['password'])){
            header('location: / ');
        } else
        header('location: / ');
     }
    }

    public function actionLogout(){
        $_SESSION = [];
    header('location: /');
    }

    public function actionTest(){
        echo "Heloo world!!!";
    }

    public function actionRegistr(){
        if(!Session::isAuth())
            echo $this->render('user/registr');
    }
}