<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

get_header_doc ('', 'Реестр компов');
admin ();
get_menu ();

echo "<button type='button' class='button1 btn aqua-gradient' id='printPageButton'><a href='form_reestr_comps.php'>Вызвать форму</a></button>";

table_reestr_comp('Реестр компьютеров и оргтехники храма св. Великомученика и Целителя Пантелеимона г. Ставрополя');?>



	<div class="container reestr-comps-parrent">
		<img class="img-thumbnail img-fluid z-depth-3" src="uploads/lables/DSC_0218.JPG" alt="храм святого Великомученика и Целителя Пантелеимона г. Ставрополя">
		<div class="copyright text-center">
	<span>Издательский центр храма св. Великомученика и Целителя Пантелеимона</span> <br>
	<small>Ставрополь 2018 г.</small>
		</div>
	</div>




<!-- ************************************************************************************************* -->

<div class="house_html container reestr-comps-parrent">
	<h1><?php table_reestr_comp('Административный корпус') ?></h1>
	<div class="house_html_img">
		<img class="img-thumbnail img-fluid z-depth-3" src="uploads/lables/IMG_20181227_092932.jpg" alt="">
	</div>
</div>

<!-- ************************************************************************************************* -->
<div class='table'>
	<table>
		<tr>
			<th class='font-RGIA'>№</th>
			<th class='font-RGIA'>Наименование</th>
			<th class='font-RGIA'>марка/модель</th>
			<th class='font-RGIA'>Технические характеристики</th>
			<th class='font-RGIA'>Место нахождения</th>
			<th class='font-RGIA'>Ответственное лицо</th>
			<th class='font-RGIA'>Состояние</th>
			<th class='font-RGIA'>Фотография</th>
		</tr>


<?php
$select_query = 
sprintf("
	SELECT * FROM reestr_comps, house, place 
	WHERE reestr_comps.house = 'Административный корпус' and reestr_comps.house = house.house and reestr_comps.place = place.place
	ORDER BY house.house_id, place.place_id, reestr_comps.name");


$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))

{ // выводим данные
echo "
<tr>\n
<td>".$row[""]."</td>"."\n"."
<td>".$row["name"]."</td>"."\n"."
<td>".$row["name_type"]."</td>"."\n"."
<td>".preg_replace("/[\r\n]+/", "</p><p>", $row['characterics'])."</td>"."\n"."
<td>".$row["place"]."</td>"."\n"."	
<td>".$row["of_face"]."</td>"."\n"."
<td>".$row["sost"]."</td>"."\n"."
<td>
	<div class='box'>
		<img class='img-thumbnail' src=".$row["image"]." alt=''>
	</div> 
	<div id='printPageButton'>
	<a href= p_edit_reestr_comps.php?id=".$row["id"]."><i class='fa fa-edit fa-2x green-text' aria-hidden='true' title='Редактировать'></i></a>"."\n"."
	<a href= delete_reestr_comps.php?id=".$row["id"]."><i class='fa fa-times-circle-o fa-2x red-text' aria-hidden='true' title='Удалить'></i></a>
	</div>
</td>"."\n"."
</tr>\n";
}

echo "</table>
</div>
";
?>

<!-- ************************************************************************************************* -->

<div class="house_html container reestr-comps-parrent">
	<h1><?php table_reestr_comp('Приходской дом') ?></h1>
	<div class="house_html_img">
		<img class="img-thumbnail img-fluid z-depth-3" src="uploads/lables/IMG_20181227_093114.jpg" alt="">
	</div>
</div>

<!-- ************************************************************************************************* -->
<div class='table'>
	<table>
		<tr>
			<th class='font-RGIA'>№</th>
			<th class='font-RGIA'>Наименование</th>
			<th class='font-RGIA'>марка/модель</th>
			<th class='font-RGIA'>Технические характеристики</th>
			<th class='font-RGIA'>Место нахождения</th>
			<th class='font-RGIA'>Ответственное лицо</th>
			<th class='font-RGIA'>Состояние</th>
			<th class='font-RGIA'>Фотография</th>
		</tr>


<?php
$select_query = 
sprintf("
	SELECT * FROM reestr_comps, house, place 
	WHERE reestr_comps.house = 'Приходской дом' and reestr_comps.house = house.house and reestr_comps.place = place.place
	ORDER BY house.house_id, place.place_id, reestr_comps.name");


$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))

{ // выводим данные
echo "
<tr>\n
<td>".$row[""]."</td>"."\n"."
<td>".$row["name"]."</td>"."\n"."
<td>".$row["name_type"]."</td>"."\n"."
<td>".preg_replace("/[\r\n]+/", "</p><p>", $row['characterics'])."</td>"."\n"."
<td>".$row["place"]."</td>"."\n"."	
<td>".$row["of_face"]."</td>"."\n"."
<td>".$row["sost"]."</td>"."\n"."
<td>
	<div class='box'>
		<img class='img-thumbnail' src=".$row["image"]." alt=''>
	</div> 
	<div id='printPageButton'>
	<a href= p_edit_reestr_comps.php?id=".$row["id"]."><i class='fa fa-edit fa-2x green-text' aria-hidden='true' title='Редактировать'></i></a>"."\n"."
	<a href= delete_reestr_comps.php?id=".$row["id"]."><i class='fa fa-times-circle-o fa-2x red-text' aria-hidden='true' title='Удалить'></i></a>
	</div>
</td>"."\n"."
</tr>\n";
}

echo "</table>
</div>
";?>



<!-- ************************************************************************************************* -->

<div class="house_html container reestr-comps-parrent">
	<h1><?php table_reestr_comp('Храм, Гостиница, Трапезная') ?></h1>
	<div class="house_html_img">
		<img class="img-thumbnail img-fluid z-depth-3" src="uploads/lables/IMG_20181227_093018.jpg" alt="">
	</div>
</div>

<!-- ************************************************************************************************* -->
<div class='table'>
	<table>
		<tr>
			<th class='font-RGIA'>№</th>
			<th class='font-RGIA'>Наименование</th>
			<th class='font-RGIA'>марка/модель</th>
			<th class='font-RGIA'>Технические характеристики</th>
			<th class='font-RGIA'>Место нахождения</th>
			<th class='font-RGIA'>Ответственное лицо</th>
			<th class='font-RGIA'>Состояние</th>
			<th class='font-RGIA'>Фотография</th>
		</tr>


<?php
$select_query = 
sprintf("
	SELECT * FROM reestr_comps, house, place 
	WHERE reestr_comps.house = 'Гостевой дом' and reestr_comps.house = house.house and reestr_comps.place = place.place
	ORDER BY house.house_id, place.place_id, reestr_comps.name");


$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))

{ // выводим данные
echo "
<tr>\n
<td>".$row[""]."</td>"."\n"."
<td>".$row["name"]."</td>"."\n"."
<td>".$row["name_type"]."</td>"."\n"."
<td>".$row['characterics']."</td>"."\n"."
<td>".$row["place"]."</td>"."\n"."	
<td>".$row["of_face"]."</td>"."\n"."
<td>".$row["sost"]."</td>"."\n"."
<td>
	<div class='box'>
		<img class='img-thumbnail' src=".$row["image"]." alt=''>
	</div> 
	<div id='printPageButton'>
	<a href= p_edit_reestr_comps.php?id=".$row["id"]."><i class='fa fa-edit fa-2x green-text' aria-hidden='true' title='Редактировать'></i></a>"."\n"."
	<a href= delete_reestr_comps.php?id=".$row["id"]."><i class='fa fa-times-circle-o fa-2x red-text' aria-hidden='true' title='Удалить'></i></a>
	</div>
</td>"."\n"."
</tr>\n";
}

echo "</table>
</div>
";?>

<!-- ************************************************************************************************* -->
<div class='table'>
	<table>
		<tr>
			<th class='font-RGIA'>№</th>
			<th class='font-RGIA'>Наименование</th>
			<th class='font-RGIA'>марка/модель</th>
			<th class='font-RGIA'>Технические характеристики</th>
			<th class='font-RGIA'>Место нахождения</th>
			<th class='font-RGIA'>Ответственное лицо</th>
			<th class='font-RGIA'>Состояние</th>
			<th class='font-RGIA'>Фотография</th>
		</tr>


<?php
$select_query = 
sprintf("
	SELECT * FROM reestr_comps, house, place 
	WHERE reestr_comps.house = 'Храм' and reestr_comps.house = house.house and reestr_comps.place = place.place
	ORDER BY house.house_id, place.place_id, reestr_comps.name");


$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))

{ // выводим данные
echo "
<tr>\n
<td>".$row[""]."</td>"."\n"."
<td>".$row["name"]."</td>"."\n"."
<td>".$row["name_type"]."</td>"."\n"."
<td>".preg_replace("/[\r\n]+/", "</p><p>", $row['characterics'])."</td>"."\n"."
<td>".$row["place"]."</td>"."\n"."	
<td>".$row["of_face"]."</td>"."\n"."
<td>".$row["sost"]."</td>"."\n"."
<td>
	<div class='box'>
		<img class='img-thumbnail' src=".$row["image"]." alt=''>
	</div> 
	<div id='printPageButton'>
	<a href= p_edit_reestr_comps.php?id=".$row["id"]."><i class='fa fa-edit fa-2x green-text' aria-hidden='true' title='Редактировать'></i></a>"."\n"."
	<a href= delete_reestr_comps.php?id=".$row["id"]."><i class='fa fa-times-circle-o fa-2x red-text' aria-hidden='true' title='Удалить'></i></a>
	</div>
</td>"."\n"."
</tr>\n";
}
echo "</table>
</div>
";




// $select_query = 
// sprintf("SELECT COUNT(1) FROM reestr_comps");
// $result = mysqli_query($link, $select_query);
// $row = mysqli_fetch_array($result);
// $count = $row[0];	
// ?>
<!-- <div><p>Всего количество техники: <?php #echo $count?></p></div> -->
<?php


// $select_query = 
// sprintf("SELECT name, COUNT(name) FROM reestr_comps GROUP BY name");
// $result = mysqli_query($link, $select_query);
// while ($row = mysqli_fetch_array($result))

// { // выводим данные
// echo "<pre>
// 	".$row[0] . ' ' . $row[1]." шт.
// </pre>";
// }

?>

<?php
place_to_sign('p_reestr_comps.php');
?>

<!-- нумерация строк таблиц-->
<script>
$('.table tr').each(function(i) {
i && $(this).find('td:first').text(i);});
</script>
