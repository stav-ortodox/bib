<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';



get_header_doc ('', 'Реестр икон');
admin ();
new_menu ();

echo "<button type='button' class='button1 btn aqua-gradient' id='printPageButton'><a href='form.php'>Вызвать форму</a></button>";?>
<link rel="stylesheet" href="style.css">



<?php 
table_reestr_comp('Реестр икон храма св. Великомученика и Целителя Пантелеимона г. Ставрополя');?>


<div class="image"><img class="card img-thumbnail"src="images/20161119-0009.jpg" alt="">

<div class="copyright text-center">
	<span>Издательский центр храма св. Великомученика и Целителя Пантелеимона</span> <br>
	<small>Ставрополь 2019 г.</small>
</div>
</div>
<div class='table'>
	<table>
		<tr>
			<th class='font-icons'>№</th>
			<th class='font-icons'>Изображение</th>
			<th class='font-icons'>Название иконы</th>
		</tr>

<?php
$select_query = sprintf("SELECT * FROM `reestr_icons` ORDER BY id");

$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))

{ // выводим данные
echo "
<tr>\n

<td>".$row[""]."</td>"."\n"."
<td id='icon'>
	<div class='box-icon'>
		<img class='img-thumbnail' src=".$row["image"]." alt=''>
	</div> 
	<div id='printPageButton'>
	<a href= form_edit.php?id=".$row["id"]."><i class='fa fa-edit fa-2x green-text' aria-hidden='true' title='Редактировать'></i></a>"."\n"."
	<a href= form_delete.php?id=".$row["id"]."><i class='fa fa-times-circle-o fa-2x red-text' aria-hidden='true' title='Удалить'></i></a>
	</div>
</td>"."\n"."
<td><b id='name'>".preg_replace("/[\r\n]+/", "</p><p>", $row["name"])."</b>"."\n"."<br><br><br>
".preg_replace("/[\r\n]+/", "</p><p>", $row["desk"])."</td>"."\n"."

</tr>\n";
}

echo "</table>
</div>
";?>



<?$date_today = date("d.m.y"); 
$today = date("H:i"); 
$filename = 'index.php';
if (file_exists($filename)) 

	echo 
	"
		<div class='place_to_sign page-break'> 
			<br>Документ редактирован и распечатан $date_today в $today 
			<br> клириком храма св. Вел. и Цел. Пантелеимона г. Ставрополя
			<br></p>
			<p>иереем ____________ Игнатием Переходченко</p>
			<br>
			
			<p><b>Утверждаю:</b>
			<br>Благочинный III Ставропольского округа
			<br>Настоятель храма св. Вел. и Цел. Пантелеимона г. Ставрополя</p>
			<br>
			<p><b>митрофорный протоиерей _______________________Павел Самойленко</b></p>
		</div>";?>

</body>
<!-- нумерация строк таблиц-->
<script>
$('.table tr').each(function(i) {
i && $(this).find('td:first').text(i);});
</script>