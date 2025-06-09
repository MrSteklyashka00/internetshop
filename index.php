<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="modal" id="modal">
        <div class="close_modal_button" id="close_modal_button">&times;</div>
        <div class="image_text_container">
            <div class="modal_image"id="modal_image"></div>
            <div class="modal_text"id="modal_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti iste numquam fugit, impedit ducimus natus officiis est voluptate nihil? Maiores rem optio culpa reiciendis repellat eligendi voluptatum perferendis labore maxime temporibus enim qui porro ab illo vitae velit quis magni odio nulla, corporis exercitationem. Dolore, minus sunt? Vel, suscipit rerum quas eos corrupti, nemo et minus expedita eligendi aliquid maiores voluptates. Minima corrupti hic provident beatae blanditiis rem sunt nobis. Inventore sequi vitae non praesentium deserunt, neque et dignissimos ipsum placeat magnam delectus ullam quas recusandae eligendi animi ducimus asperiores corrupti rem illum. Quam officia ex beatae dolores. Cumque illum velit numquam quas maxime, eveniet accusantium veritatis tenetur hic, nobis voluptate libero nemo, nulla pariatur soluta praesentium ipsum explicabo illo vitae debitis minus dolor tempore porro perferendis! Eveniet iure, totam velit illo deserunt tenetur asperiores dicta eligendi hic exercitationem dolor magni libero voluptatum porro fugit quidem quaerat officiis. Vero ipsum, tempore suscipit inventore ea minus sed facilis, possimus placeat sequi quos iure consectetur ullam numquam. Accusantium in dignissimos rem quia, minus eaque quibusdam, animi consequatur sed nihil voluptate voluptas numquam. Dolores voluptatum quaerat consequuntur facilis in? Facere laudantium, libero ipsa repudiandae ratione, quam neque ipsum unde reprehenderit natus laboriosam itaque delectus! Voluptates, accusantium corporis, qui doloremque provident alias accusamus molestias tenetur ipsam iusto labore, et a vitae ipsum? Minus iusto cumque praesentium cupiditate repellendus aperiam suscipit culpa soluta molestiae velit omnis, ut consequuntur quia expedita deleniti saepe deserunt? Aliquid sequi repudiandae magni illo dicta nemo, natus assumenda alias ad eaque mollitia enim quos consequuntur veniam ratione cupiditate quas magnam ipsa libero placeat optio odit temporibus. Blanditiis assumenda iusto ipsum? Ratione consequuntur sunt ex cum neque quos ad ipsum laboriosam perferendis? Saepe ex hic autem accusantium deleniti veniam natus iure tempore, minus nihil ad officia ducimus quos consequatur corporis debitis dolorum aperiam optio magni aliquam et expedita iusto in repudiandae. Animi qui ipsum omnis illum eligendi nisi veritatis eaque, itaque explicabo excepturi quas aliquam quam odit minima amet reprehenderit tempora? A sequi reprehenderit illum itaque id nostrum molestiae neque magnam, et quaerat adipisci quas unde minima incidunt nisi doloremque consectetur accusamus veritatis laudantium, veniam nulla. Eaque magni officiis quisquam ducimus ratione fugit fugiat quis minima eum, voluptatum quaerat dolores deleniti velit dolorem harum? A ab aspernatur eius corporis. Officiis obcaecati est perspiciatis reprehenderit sunt, sit in consequuntur eligendi, voluptas laudantium nisi soluta illum nam facere ducimus eaque saepe nobis, quas omnis iste fugit exercitationem! Atque porro perferendis obcaecati, aliquam ut beatae consectetur eaque officiis dolore vero sed modi. Debitis vitae dolorem consequuntur, beatae fugiat dicta hic excepturi error aliquid? Asperiores eius reiciendis voluptatibus ullam! Mollitia, ab. Et quam non omnis nam fugiat fuga pariatur veritatis porro, incidunt, tenetur a? Dicta magni at possimus minus autem ut doloremque repudiandae accusamus, quaerat optio eligendi iste eum! Non in, fugiat earum illum maxime minus laborum porro! Dolore quas hic iusto ad, repellat expedita aliquid delectus sequi, tempore soluta, in at. Quas tempora sequi, nisi ab odit repellat distinctio quo quos vero, ea at eius?</div>
           
        </div>
        <div class="modal_price_buy">
            <div class="modal_price" id="modal_price"><b>ценa:</b>10000 p.</div>
            <div class="modal_buy" id="modal_buy_25">купить</div>
        </div>
    </div>
    <header class="header">
         <div class="logo">
            
         </div>
         <div class="header_name">мой интернет магазин</div>
        <div class="unuse_block"></div>
    </header>
    <div class="menu">
        Меню
        <div class="menu_content">
            <ul class="menu_list">
                <li class="menu_items"><a href="https://google.com">Google</a></li>
                <li class="menu_items">пункт2</li>
                <li class="menu_items">пункт3</li>
            </ul>
        </div>
    </div>

<?php
echo "Hello world";
?>


    <main class="main_content" id="main">
        <div class="product_card"id="card">
            <div class="product_image"></div>
            <div class="product_name" id="product_name">телевизор</div>
            <div class="product_desc">Lorem ipsum, dolor sit amet consectetur
            adipisicing elit. Soluta rerum blanditiis autem
            sed inventore dolores doloribus impedit, omnis deleniti
            ullam illum nobis excepturi maiores repudiandae. Aut soluta eveniet nihil enim.</div>
            <div class="product_price"><b>Цена</b>: 1000$</div>
            <div class="product_buy" onclick="">OПЛАТИТЬ</div>

        </div>
    </main>
    <div class="main_container">
        
        <h1 style="text-align: center;">заголовок</h1>
<h2>подзаголовок</h2>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
     A quibusdam quaerat quasi libero similique aliquid ducimus
      iure quam, consequatur asperiores, dignissimos eligendi possimus modi
       veniam eius quas debitis nam laboriosam doloribus autem nemo cum beatae
facilis. In recusandae veniam cumque doloremque perspiciatis totam ab est 
nisi eaque delectus! Voluptatem, harum!</p> 
<p class="Steklyashka_paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
     temporibus neque doloremque! Blanditiis, laboriosam architecto beatae
      error facere provident quisquam? Voluptas cum perspiciatis magnam porro
       quisquam ea, delectus omnis iusto?</p>  
<ul>
<li>1пункт</li>
<li>2</li>
<li>3</li>
<li>4</li>
</ul> 
<ol>
    <li>wgsd</li>
    <li>sdgfgfd</li>
    <li>sdgf</li>
</ol>
<img src="./img/Король_и_Шут_(логотип).jpg" alt="Здесь должна быть картинка">

    </div>
    
    <div class="block_container">
        <div class="block block2">ы</div>
        <div class="block block1">2</div>
        <div class="block block3">Lorem ipsum dolor sit amet consectetur adipisicing elit.Consequuntur, voluptate!</div>
        <div class="block block4">какая то кнопка</div>
    </div>

    <div class="card_wrapper">
        <div class="photo_wrapper"><img src="./img/Король_и_Шут_(логотип).jpg"class="card_img"></div>
        <div class="card_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, ducimus?</div>
        <div class="card_button">кнопка</div>
        <div class="card_close">X</div>
        <div class="card_a">подробнее...</div>
    </div>


    <div class="card_wrapper2">
        <div class="card_close2">X</div>
        <div class="card_flex_container">
            <div class="photo_wrapper2"><img src="./img/Король_и_Шут_(логотип).jpg"class="card_img"></div>
            <div class="card_text_button">
                <div class="card_text2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, ducimus?</div>
                <div class="card_button2">кнопка</div>
            </div>
        </div>
        <div class="card_a2">подробнее...</div>
    </div>


    <div class="adaptive_block"></div>

     <div class="flex_container">
        <div class="flex_block">1</div>
        <div class="flex_block">2</div>
        <div class="flex_block little">3</div>
        <div class="flex_block">4</div>
    </div> 

<script>
    // alert('ку');
    // alert(1+5);
</script>
    
<script src="./js/script.js"></script>
</body>
</html>









