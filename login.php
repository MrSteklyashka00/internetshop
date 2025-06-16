<?php
session_start();
include_once './engine/Auth.php';
include_once './header.php';
include_once './logo_header.php';

if (isAuth()) {
    header('location: /');
}
else{
    if(isset($_POST['name'])) 
   if (login($_POST['name'],$_POST['password']))
     header('location: /');
}
?>


<div class="login_form_container">
    <form action="/login.php" method="post"id="abaY">
        <input type="text" name="name" placeholder="Логин"class="login_input"><br>
        <input type="password" name="password" placeholder="Пароль"class="login_input"><br>
        <input type="submit" value="Войти"id=loin_APK class="login_input">
    </form>
</div>




