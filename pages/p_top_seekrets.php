<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site('Страница входа', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
?>

<div class="user_form">
	<form action="" method="post">
		<h2>Вход в скрытые данные</h2>
		<label for="age">Введите пароль: </label>
		<input class="input" type="password" name="age">
		<input class="input" type="submit">
	</form>
</div>

<?php 
$r = $_POST['age'];

if ($r == NULL) { //eckb ничего не введено
	echo '<div class="no_error">Мы ждём перемен!</div>';
	echo '</div>';
}

elseif ($r == MY_PASS) { // если введено число
	echo '<div class="no_error">Всё норм это верный пароль!</div>';
	echo '<a href="p_reestr_comp.php">Теперь можно пройти дальше</a>';
	echo '</div>';
}

elseif ($r !== MY_PASS) { // если введено не число
	echo '<div class="error">Надо ввести пароль, а не это:' . " $r".'!</div>';
	echo '</div>';
}

get_footer();
?>