<?php

namespace app\engine;

class Session{
    protected static $isAuth=false;

 public static function login($name,$password){
    if ($name==='admin' && $password==='1234'){
        $_SESSION ['user']=$name;
    } else
    if ($name ==='Илья' && $password ==='1234'){
        $_SESSION['user']=$name;
}else return false;
self::$isAuth=true;
 return true;
}

 public static function isAuth(){
    return isset($_SESSION['user']);
}

 public  static function getUserName(){
    if($_SESSION['user'])
    return $_SESSION['user'];
return '';
}
public static function logout(){
    $_SESSION = [];
    self::$isAuth=false;
header('location: /');
}
}

