<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

get_header_doc ('', 'Реестр компов');
admin ();
get_menu ();

echo "<button type='button' class='button1 btn aqua-gradient' id='printPageButton'><a href='form_reestr_comps.php'>Вызвать форму</a></button>";

table_reestr_comp('Реестр компьютеров и оргтехники храма св. Великомученика и Целителя Пантелеимона г. Ставрополя');

$select_query = sprintf("SELECT * FROM `reestr_comps` ORDER BY `house`");
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

place_to_sign('p_reestr_comps.php');


?>
<!-- нумерация строк таблиц-->
<script>
$('.table tr').each(function(i) {
i && $(this).find('td:first').text(i);});
</script>
