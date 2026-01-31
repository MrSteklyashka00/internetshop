<?php

namespace app\controllers;
use app\models\User;

class ShopController extends Controller
{
    public function actionIndex()
    {
        //echo 'sdfsfassdfasdsfasdf';
        echo $this->render('main', []);
    }
    public function actionGetUsers(){
        $user= new User('Иванов','Иван','Иванович','1999-05-24','ivan@mail.ru','1234',0);
        $user->save();
        $users=User::getAll();
        var_dump($users);
    }
}