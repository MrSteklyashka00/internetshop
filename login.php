<?php
session_start();
include_once './engine/Auth.php';
include_once './engine/Render.php';

if (isAuth()) {
    header('location: /');
}
else{
    if(isset($_POST['name'])) 
   if (login($_POST['name'],$_POST['password']))
     header('location: /');
}

render('login_form',[]);






