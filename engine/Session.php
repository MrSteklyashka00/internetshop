<?php

namespace app\engine;
use app\models\User;

class Session{
    protected static $isAuth=false;

 public static function login($name,$password)
 {
   $user = User::getWhere('email','=',$name);
   if($user)
    if(password_verify($password,$user[0]->password)){
        $_SESSION['user']=$user[0]->email;
        $_SESSION['user_name']=$user[0]->firstname;
        return true;
    }
    return false;
}

 public static function isAuth(){
    return isset($_SESSION['user']);
}

 public  static function getUserName(){
    if($_SESSION['user_name'])
    return $_SESSION['user_name'];
return '';
}
public static function logout(){
    $_SESSION = [];
    self::$isAuth=false;
header('location: /');
}

public static function getRole(){
    if(self::isAuth()){
        $user=USer::getWhere('email','=',$_SESSION['user']);
        if($User)
            return $user[0]->role;
    }
    return 0;
}

public static function getUserId(){
    if(self::isAuth()){
        $user=USer::getWhere('email','=',$_SESSION['user']);
        if($User)
            return $user[0]->id;
    }
    return 0;
}

public static function isAdmin(){
    if(self::getRole()<0)
        return true;
    return false;
}
}

