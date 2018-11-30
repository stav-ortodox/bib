<?php require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Регистрация', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
get_open_form ('/scripts/s_save_user.php', 'POST', 'Регистрация', '');?>

    
            <label for="login">Ваш логин:</label>
            <input type="text" name="login" required="">
            
            <label for="password">Ваш пароль:</label>
            <input type="password" name="password" required="">

            <label for="password2">Ваш пароль ещё раз:</label>
            <input type="password" name="password2" required="">
            
            <label for="email">Ваш Email:</label>
            <input type="text" name="email" required=""> 
            

           
        
<?php  
get_close_form ();
get_footer(); ?>