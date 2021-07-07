<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Регистрация', 'Регистрация', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
get_open_form ('/scripts/s_save_user.php', 'POST', 'Регистрация', '');
						if (!empty($_SESSION['errors'])) {?>
						  <div class="error">
						    <p>НЕ УДАЛОСЬ ЗАРЕГИСТРИРОВАТЬСЯ!</p><hr>
						    <ol><?
						    foreach ($_SESSION['errors'] as $row) {?>
						      <li>
						        <?=$row;
						        unset($_SESSION['errors']);
						        unset($_SESSION['success']);?>
						      </li>
						      <br>
						      <?}?> 
						    </ol>
						  </div>
						  <?}?>
    
            <label for="login">Ваш логин:</label>
            <input type="text" name="login">
            
            <label for="password">Ваш пароль:</label>
            <input type="password" name="password">

            <label for="password2">Ваш пароль ещё раз:</label>
            <input type="password" name="password2">
            
            <label for="email">Ваш Email:</label>
            <input type="text" name="email"> 
            

           
        
<?php  
get_close_form ();
get_footer(); ?>