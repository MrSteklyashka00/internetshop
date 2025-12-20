<?php
session_start();
include_once './engine/Auth.php';
$userName=getUserName();
?>
 <header class="header">
         <div class="logo">
            
         </div>
         <div class="header_name">мой интернет магазин</div>
        <div class="unuse_block">
            <div class="user_name_login">
                <?= $userName?>
                <?php
                if($userName)
                echo '| <a href="/logout.php">Выйти</a>';
            else
              echo ' <a href="/user/authorize">Войти</a>';
                ?>
            </div>
        </div>
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