<h1>Добавление товара</h1>
<div class="login_form_container">
<?php
$sel = ' selected';
if(isset($p['category']))
  if(($p['category'])) $sel='';
if($error){
    ?>
    <h2 class="register_from_error"><?=$error?></h2>
    <?php }
    ?>
    <form action="/shop/newproduct" method="post" enctype="multipart/form-data">
      
   
      
      <label for="name" class="form_label">Название товара:</label>
      <input type="text" name="name" id="name" class="login_input" placeholder='Телевизор' value="<?=$p['name']  ?>">


      <label for="description" class="form_label">Описание:</label>
      <textarea name="description" id="description"  class="login_input"><?=$p['description']  ?></textarea>
      
<label for="price" class="form_label"> Цена:</label>
      <input type="number" name="price" id="price" class="login_input" placeholder='Цена' value="<?=$p['price']  ?>"  step="0.01">

      <label for="category" class="form_label"> Категория:</label>
      <select name="category" id="category" class="login_input">
        <option value="0"<?= $sel ?>>без категории </option>
        <?php
        foreach($cats as $cat){
          $sel=($cat['id']==$p['category'])?' selected':'';
        ?>
          <option value="<?= $cat['idd'] ?>"<?= $sel ?>><?= $cat['name'] ?></option>
        <?php } ?>

      </select>
       
      <label for="image" class="form_label">Загрузка изображения :</label>
      <input type="file" name="image" id="image" accept="image/*" require>

    <input type="submit" value="Сохранить"class="login_input">

      </form>

</div>