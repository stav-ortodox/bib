<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 
$array = require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/arrays.php'; 

get_header_doc('Форма для реестра', 'Форма для реестра');
admin ();


?>

<div class="user_form">
	<form action="s_reestr_comps.php" method="POST" enctype="multipart/form-data">
		<h4>Введение данных</h4>
		<label for="name">Наименование техники:</label>
		<input class="form-control mb-4" type="text" name="name" >
		
		<label for="name_type">марка/модель:</label>
		<input class="form-control mb-4" type="text" name="name_type" >
		
		<label for="characterics">Технические характеристики:</label>
		<textarea class="form-control mb-4"type="text" name="characterics" rows="10" cols="45" ></textarea>

		
		<label for="house">Место нахождения:</label>
		<select class="form-control mb-4" name='house'>

		<?php 
		$houses = [
		'1'=>'Административный корпус',
		'2'=>'Приходской дом',
		'3'=>'Храм',
		'4'=>'Гостевой дом'
];
		foreach ($houses as $arr) {
			 
			 echo "<option>$arr</option>";
		 
	}
		?>
		
		</select>
		
		<label for="place">Помещение нахождения:</label>
		<select class="form-control mb-4" name='place'>
			<?php 
		foreach ($array as $arr => $value) {
			foreach ($value as $ar => $val) {
			echo "<option>$val</option>";
		}
	}
		?>
	
		</select>

		<label for="of_face">Ответственное лицо:</label>
		<input class="form-control mb-4" type="text" name="of_face" >

		<label for="sost">Cостояние:</label>
		<input class="form-control mb-4" type="text" name="sost" >
		
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