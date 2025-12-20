<?php
namespace app\controllers;

class UserController extends Controller{
    public function actionAuthorize()
    {
        echo $this->render('login_form', []);
    }
}