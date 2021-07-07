<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 
 

get_header_doc('Форма для реестра икон', 'Форма для реестра икон');
admin ();


?>

<div class="user_form">
	<form action="action.php" method="POST" enctype="multipart/form-data">
		<h4>Введение данных</h4>

		<label for="name">Название иконы:</label>
		<textarea class="form-control mb-4" type="text" name="name" rows="10" cols="45"></textarea> 

		<label for="desk">Описание:</label>
		<textarea class="form-control mb-4" type="text" name="desk" rows="10" cols="45"></textarea> 

		<label for="type">Изготовлена на:</label>
		<input class="form-control mb-4" type="text" name="type">
		
		<label for="zakaz">Заказана:</label>
		<input class="form-control mb-4" type="text" name="zakaz">

		<label for="izgotov">Изготовлена:</label>
		<input class="form-control mb-4" type="text" name="izgotov">

		<label for="dostav">Доставлена:</label>
		<input class="form-control mb-4" type="text" name="dostav">
		
		<label for="image">Фотография:</label>
		<input class="form-control mb-4" type="file" name="image" id="image">

		<input class="btn btn-info btn-block my-4" type="submit" value="Готово!">
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