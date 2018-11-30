<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_biblioteka_functions.php';


get_header_site ('Добавление нового блока издания', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
// get_sidebar ();
page_title ('Добавление нового блока издания');

get_open_form ("/pages/admins/s_admin_add_new_publishing_block.php", "POST", "Введите данные", '');?>

		<label for="block_name">Имя нового блока издания:</label>
		<input type="text" name="block_name" >

		<label for="block_description">Описание нового блока издания:</label>
		<input type="text" name="block_description" >

		<label for="block_hidden">Тип хранения данных:</label>
		<p><input type="radio" name="block_hidden" value="0" checked>Доступный</p>
		<p><input type="radio" name="block_hidden" value="1">Скрытый</p>

		<label for="block_image">Лицевое изображение:</label>
		<input type="file" name="block_image" id="block_image">

<?php 
get_close_form ();
get_footer ();
?>