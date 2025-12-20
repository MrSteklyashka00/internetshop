<?php
namespace app\controllers;

class UserController extends Controller{
    public function actionAuthorize()
    {
        echo $this->render('login_form', []);
    }
    public function actionLogin($pars)
    if(!Session::isAuth()){
        if(Session::login($pars['name'],$pars['password'])){
            header('location: / ');
        } else
        header('location: / ');
    }
}