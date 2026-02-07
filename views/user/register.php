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

</div>
