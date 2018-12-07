<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';


if(isset($_SESSION['login'])) {

} else {
	echo "Нужно иметь права администратора, чтобы перейти на эту страницу";
	exit();
} 

get_header_doc ('', 'Реестр дел РГИА');


$select_query = sprintf("SELECT * FROM reestr_rgia");

echo "<button type='button' class='btn aqua-gradient' id='printPageButton'><a href='form_reestr_RGIA.php'>Вызвать форму</a></button>";

table_reestr_RGIA ('Реестр дел из РГИА');


$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))

{ // выводим данные
echo "
<tr>\n
<td>".$row[""]."</td>"."\n"."
<td>".$row["fond"]."</td>"."\n"."
<td>".$row["opis"]."</td>"."\n"."
<td>".$row["delo"]."</td>"."\n"."
<td>".$row["nach"]."</td>"."\n"."
<td>".$row["okonch"]."</td>"."\n"."
<td>".preg_replace("/[\r\n]+/", "</p><p>", $row['naimen'])."</td>"."\n"."
<td>".$row["listov"]."</td>"."\n"."	
<td>".$row["prim"]."</td>"."\n"."
<td>".$row["tom"]."</td>"."\n"."
<td>".$row["zakaz"]."</td>"."\n"."
<td>".$row["poluch"]."</td>"."\n"."
<td>".$row["zakaz_cop"]."</td>"."\n"."
<td>".$row["poluch_cop"]."</td>"."\n"."
<td>".$row["gotovnost"]."</td>"."\n"."
<td><a href= p_edit_reestr_RGIA.php?id=".$row["id"]."><i class='fa fa-edit fa-2x green-text' aria-hidden='true' title='Редактировать'></i></a>"."\n"."
<a href= delete_reestr_RGIA.php?id=".$row["id"]."><i class='fa fa-times-circle-o fa-2x red-text' aria-hidden='true' title='Удалить'></i></a></td>"."\n"."
</tr>\n";
}

echo "</table>
</div>
";?>



<?php place_to_sign('p_reestr_RGIA.php');?>

</body>
<!-- нумерация строк таблиц-->
<script>
$('.table tr').each(function(i) {
i && $(this).find('td:first').text(i);});
</script>