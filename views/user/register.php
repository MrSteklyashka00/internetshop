<h1> Регистрация нового пользователя</h1>
<div class="login_form_container">
<?php
if($error){
    ?>
    <h2 class="register_from_error"><?=$error?></h2>
    <?php }
    ?>
    <form action="/user/newuser" method="post">
        <label for="lastname" class="form_label">Фамилия:</label>
        <input type="text" name="lastname" id="lastname" class="login_input" placeholder='Фамилия' value="<?=$p['lastname']  ?>">
   
      
      <label for="name" class="form_label">Имя:</label>
      <input type="text" name="name" id="name" class="login_input" placeholder='Имя' value="<?=$p['name']  ?>">


      <label for="patronymic" class="form_label">Отчество:</label>
      <input type="text" name="patronymic" id="patronymic" class="login_input" placeholder='Отчество' value="<?=$p['patronymic']  ?>">
       
      <label for="birthdate" class="form_label">Дата рождения:</label>
      <input type="Date" name="birthdate" id="birthdate" class="login_input" value="<?=$p['birthdate']  ?>">




      <label for="email" class="form_label">Почта:</label>
      <input type="email" name="email" id="email" class="login_input" placeholder='почта' value="<?=$p['email']  ?>">

 
    <label for="password" class="form_label">Пароль</label>
    <input type="password" name="password" id="password" class="login_input" plaсeholder='пароль' value="<?=$p['password']  ?>">

    <label for="password2" class="form_label"> Повторите пароль</label>
    <input type="password" name="password2" id="password2" class="login_input" plaсeholder='пароль' value="<?=$p['password2']  ?>">

    <input type="submit" value="Зарегистрироваться"class="login_input">

      </form>

</div>
