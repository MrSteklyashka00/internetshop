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
        // $user= new User('-','admin','','1999-05-24','admin','1234',-1);
        // $user->save();
        $users=User::getAll();
        var_dump($users);
    }
}