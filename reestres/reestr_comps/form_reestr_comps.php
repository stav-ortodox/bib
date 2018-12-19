<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 

get_header_doc('Форма для реестра', 'Форма для реестра');
admin ();
?>

<div class="user_form">
	<form action="s_reestr_comps.php" method="POST" enctype="multipart/form-data">
		<h4>Введение данных</h4>
		<label for="name">Наименование техники:</label>
		<input type="text" name="name" >
		
		<label for="name_type">марка/модель:</label>
		<input type="text" name="name_type" >
		
		<label for="characterics">Технические характеристики:</label>
		<textarea type="text" name="characterics" rows="10" cols="45" ></textarea>

		<label for="house">Место нахождения:</label>
		<input type="text" name="house" >


		<?php  $sql = "SELECT house FROM reestr_comps";

		$result_select = mysqli_query($link, $sql);

		/*Выпадающий список*/

		echo "<select name = 'select_block' autofocus>";

		while($object = mysqli_fetch_object($result_select)){
		$block_name_sel = $object->house;

			
		echo "<option value = '$block_name_sel'> $block_name_sel </option>
			";}
		echo "</select>"; ?> 

		
		<label for="place">Помещение нахождения:</label>
		<input type="text" name="place" >

		<label for="of_face">Ответственное лицо:</label>
		<input type="text" name="of_face" >

		<label for="sost">Cостояние:</label>
		<input type="text" name="sost" >
		
		<label for="image">Фотография:</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
		<input type="file" name="image" id="image">

		<input class="submit" type="submit" value="Готово!">
	</form>
</div>

<?php get_footer(); ?>



<script>
	document.querySelector("input").addEventListener("change", function () {
  if (this.files[0]) {
    var fr = new FileReader();

    fr.addEventListener("load", function () {
      document.querySelector("label").style.backgroundImage = "url(" + fr.result + ")";
    }, false);

    fr.readAsDataURL(this.files[0]);
  }
});
</script>