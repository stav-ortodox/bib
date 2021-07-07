<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
get_header_doc('Форма для инвентаря алтарей', 'Форма для инвентаря алтарей');
admin ();

?>
<link rel="stylesheet" href="style.css">

<div class="user_form">
	<form action="action.php" method="POST" enctype="multipart/form-data">
		<h4>Введение данных</h4>



    <label for="position">Место нахождения:</label>
    <select class="form-control mb-4" name='position'>
        <option selected>Верхний алтарь храма св. Вел. и Цел. Пантeлеимона</option>
        <option>Нижний алтарь храма в честь иконы Божией Матери "Феодоровская"</option>
    </select>

		<label for="name">Наименование:</label>
		<input class="form-control mb-4" type="text" name="name">

    <label for="count">Количество:</label>
    <input class="form-control mb-4" type="number" name="count">

		<label for="desk">Описание:</label>
		<textarea class="form-control mb-4" type="text" name="desk" rows="5" cols="45"></textarea>

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