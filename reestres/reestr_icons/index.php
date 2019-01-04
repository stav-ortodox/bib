<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

get_header_doc ('', 'Реестр икон');
admin ();
get_menu ();

echo "<button type='button' class='button1 btn aqua-gradient' id='printPageButton'><a href='form.php'>Вызвать форму</a></button>";

table_reestr_comp('Реестр икон храма св. Великомученика и Целителя Пантелеимона г. Ставрополя');?>


<div class='table'>
	<table>
		<tr>
			<th class='font-RGIA'>№</th>
			<th class='font-RGIA'>Название иконы</th>
			<th class='font-RGIA'>Описание</th>
			<th class='font-RGIA'>Изготовлена на</th>
			<th class='font-RGIA'>Заказана</th>
			<th class='font-RGIA'>Изготовлена</th>
			<th class='font-RGIA'>Доставлена</th>
			<th class='font-RGIA'>Изображение</th>
		</tr>

<?php
$select_query = 
sprintf("
	SELECT * FROM reestr_icons ORDER BY id");


$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))

{ // выводим данные
echo "
<tr>\n
<td>".$row[""]."</td>"."\n"."
<td>".$row["name"]."</td>"."\n"."
<td>".$row["desk"]."</td>"."\n"."
<td>".$row['type']."</td>"."\n"."
<td>".$row["zakaz"]."</td>"."\n"."	
<td>".$row["izgotov"]."</td>"."\n"."
<td>".$row["dostav"]."</td>"."\n"."
<td>
	<div class='box'>
		<img class='img-thumbnail' src=".$row["image"]." alt=''>
	</div> 
	<div id='printPageButton'>
	<a href= form_edit.php?id=".$row["id"]."><i class='fa fa-edit fa-2x green-text' aria-hidden='true' title='Редактировать'></i></a>"."\n"."
	<a href= form_delete.php?id=".$row["id"]."><i class='fa fa-times-circle-o fa-2x red-text' aria-hidden='true' title='Удалить'></i></a>
	</div>
</td>"."\n"."
</tr>\n";
}

echo "</table>
</div>
";?>













<?php place_to_sign('index.php');?>

</body>
<!-- нумерация строк таблиц-->
<script>
$('.table tr').each(function(i) {
i && $(this).find('td:first').text(i);});
</script>