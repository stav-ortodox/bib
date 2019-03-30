<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';



get_header_site ('Добавление нового издания', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
// get_sidebar ();
page_title ('Добавление нового издания');
get_open_form ("/pages/admins/s_admin_add_new_publishing_post.php", "POST", "Введите данные", '');?>
		

<label for="id_pb">Выберите блок издания:</label>
<?php 
$sql = "SELECT block_name, id FROM publishing_blocks";

$result_select = mysqli_query($link, $sql);

/*Выпадающий список*/

?><select name = 'id_pb' autofocus><?

while($object = mysqli_fetch_object($result_select)){
$name_pb = $object->block_name;
$id_pb = $object->id;?>
<option value = '<?=$id_pb?>'> <?=$name_pb?> </option>
<? } ?>
</select>



<br>

		<label for="pub_name">Имя новой единицы издания:</label>
		<input type="text" name="pub_name" >
		

		<label for="pub_description">Описание новой единицы издания:</label>
		<input type="text" name="pub_description" >

		<label for="pub_hidden">Тип хранения данных:</label>
		<p><input type="radio" name="pub_hidden" value="0" checked>Доступный</p>
		<p><input type="radio" name="pub_hidden" value="1">Скрытый</p>

		<label for="pub_image">Обложка единицы издания:</label>
		<input type="file" name="pub_image" id="pub_image">

		<label for="pub_file">Файл единицы издания:</label>
		<input type="file" name="pub_file" id="pub_file">


<?php get_close_form (); 
get_footer ();



?>