<?php
session_start();
include_once './engine/Auth.php';

if (isAuth()) {
    header('location: /');
}
else{
    if(isset($_POST['name'])) 
    login($_POST['name'],$_POST['password']);
}
?>

<div class="login_form_container">
    <form action="/login.php" method="post">
        <input type="text" name="name" placeholder="Логин" ><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <input type="submit" value="Войти">
    </form>
</div>




