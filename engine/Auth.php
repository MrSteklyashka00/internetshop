<?php
function login($name,$password){
    if ($name==='admin' && $password==='1234'){
        $_SESSION ['user']=$name;
    } else
    if ($name ==='Илья' && $password ==='1234'){
        $_SESSION['user']=$name;
}else return false;

 return true;
}

function isAuth(){
    return isset($_SESSION['user']);
}

function getUserName(){
    if($_SESSION['user'])
    return $_SESSION['user'];
return '';
}