<?php  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
?>

<?php  
$login_page = 1;
get_header_site ('Страница авторизации', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
get_open_form ('/scripts/s_test_user.php', 'POST', 'Страница авторизации', '');


        if (!empty($_SESSION['errors'])) {?>
          <div class="error">
            <p>НЕ УДАЛОСЬ АВТОРИЗИРОВАТЬСЯ!</p><hr>
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
    <input type="text" name="login" required="">
    
    <label for="password">Ваш пароль:</label>
    <input type="password" name="password" required="">

    
<?php  
get_close_form ();
get_footer(); ?>