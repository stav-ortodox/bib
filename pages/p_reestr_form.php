
<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 
get_header_doc('Форма для реестра', 'Форма для реестра');
?>

<div class="user_form">
	<form action="../scripts/s_action.php" method="POST" enctype="multipart/form-data">
		<h4>Введение данных</h4>
		<label for="name">Наименование техники:</label>
		<input type="text" name="name" >
		
		<label for="name_type">марка/модель:</label>
		<input type="text" name="name_type" >
		
		<label for="characterics">Технические характеристики:</label>
		<textarea type="text" name="characterics" rows="10" cols="45" ></textarea> 
		
		<label for="place">Место нахождения:</label>
		<input type="text" name="place" >

		<label for="of_face">Ответственное лицо:</label>
		<input type="text" name="of_face" >

		<label for="sost">Cостояние:</label>
		<input type="text" name="sost" >
		
		<label for="image">Фотография:</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
		<input type="file" name="image" id="image">

		<!-- <div class="prew">
			<label for="pct">Загруженное фото:</label>
			<input type="file" id="pct">
		</div> -->

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