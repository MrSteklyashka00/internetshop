<?php
namespace app\controllers;

use app\engine\Session;
use app\models\User;

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
            echo $this->render('user/register');

    }
    public function actionNewUSer($p){
        if(!session::isAuth()){
            $error=null;
            if(
                $p['lastname']=='' ||
                $p['name']== '' ||
                $p['birthdate']== ''||
                $p['email']== '' ||
                $p['password']=='' ||
                $p['password2']=='' 
            ){
              $error ='Заполнены не все обязательные поля!';
              echo $this->render('user/register', ['p'=>$p,'error'=>$error]);

            } else if ($p['password']!=$p['password2']){
                $error ='Пароли не совпадают!';
              echo $this->render('user/register', ['p'=>$p,'error'=>$error]);
            } else {
                $user = new User(
                    $p ['lastname'],
                    $p['name'],
                    $p['patronymic'],
                    $p['birthdate'],
                    $p['email'],
                    $p['password'],
                    $p['password'],
                    15
                );
                $user->save();
                if(Session::login($p['email'],$p['password']))
                    header('location: /');
                else{
                    $error ='Ошибка регистрации, попробуйте позднее!';
              echo $this->render('user/register', ['p'=>$p,'error'=>$error]);

                }
            }
        }
    }
}