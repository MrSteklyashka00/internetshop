<h1>Добавление товара</h1>
<div class="login_form_container">
<?php
if($error){
    ?>
    <h2 class="register_from_error"><?=$error?></h2>
    <?php }
    ?>
    <form action="/shop/newproduct" method="post" enctype="multipart/form-data">
      
   
      
      <label for="name" class="form_label">Название товара:</label>
      <input type="text" name="name" id="name" class="login_input" placeholder='Категория' value="<?=$p['name']  ?>">


      <label for="description" class="form_label">Описание:</label>
      <textarea name="description" id="description"  class="login_input"><?=$p['description']  ?></textarea>
      
<label for="name" class="form_label"> Цена:</label>
      <input type="text" name="name" id="name" class="login_input" placeholder='Цена' value="<?=$p['name']  ?>">
       
      <label for="image" class="form_label">Загрузка изображения :</label>
      <input type="file" name="image" id="image" accept="image/*" require>

    <input type="submit" value="Сохранить"class="login_input">

      </form>

</div>