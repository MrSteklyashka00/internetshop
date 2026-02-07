<h1> Регистрация нового пользователя</h1>
<div class="login_form_container">
<?php
if($error){
    ?>
    <h2 class="register_from_error"><?=$error?></h2>
    <?php }
    ?>
    <form action="user/newuser" method="post">
        <label for="lastname" class="form_label">Фамилия:</label>
        <input type="text" name="lastname" id="lastname" class="login_input" placeholder='Фамилия'>
    </form>
      <form action="user/newuser" method="post">
      <label for="name" class="form_label">Имя:</label>
      <input type="text" name="name" id="name" class="login_input" placeholder='Имя'>
</form>
<form action="user/newuser" method="post">
      <label for="patronymic" class="form_label">Отчество:</label>
      <input type="text" name="patronymic" id="patronymic" class="login_input" placeholder='Отчество'>
</form>
<form action="user/newuser" method="post">
      <label for="email" class="form_label">почта:</label>
      <input type="email" name="email" id="email" class="login_input" placeholder='почта'>
</form>
 <form action="user/newuser" method="post">
    <label for="password" class="form_label">пароль</label>
    <input type="password" name="password" id="password" class="login_input" plaseholder='пароль'>


</div>
