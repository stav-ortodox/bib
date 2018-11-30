<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

if(isset($_SESSION['login'])) {

} else {
	echo "Нужно иметь права администратора, чтобы перейти на эту страницу";
	exit();
} 

get_header_doc ('', 'Реестр компов');


$select_query = sprintf("SELECT * FROM reestr_comps");

echo "<button type='button' class='button1 btn btn-outline-primary' id='printPageButton'><a href='p_reestr_form.php'>Вызвать форму</a></button>";

title_table('Реестр компьютеров и оргтехники храма св. Великомученика и Целителя Пантелеимона г. Ставрополя');


$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))

{ // выводим данные
echo "
<tr>\n
<td>".$row[""]."</td>"."\n"."
<td>"."".$row["name"]."</td>"."\n"."
<td>"."".$row["name_type"]."</td>"."\n"."
<td>"."".preg_replace("/[\r\n]+/", "</p><p>", $row['characterics'])."</td>"."\n"."
<td>"."".$row["place"]."</td>"."\n"."	
<td>"."".$row["of_face"]."</td>"."\n"."
<td>"."".$row["sost"]."</td>"."\n"."

<td>"."".'<img src=/'.$row["image"].' alt="" width=150 height=150>
<div class="edit_delete" id="printPageButton">
<a href= /pages/p_edit.php?id='.$row["id"].'.>'."редактировать</a>".'
<a href= /pages/p_delete.php?id='.$row["id"].'.>'."<img src='http://lifesguide.ru/wp-content/uploads/2014/04/delete-big.jpg' width=40 height=40></a>
</div>
"."</td>"."\n"."

</tr>"."\n";
}

echo "</table>
</div>
";

place_to_sign();


?>
<!-- нумерация строк таблиц-->
<script>
$('.table tr').each(function(i) {
i && $(this).find('td:first').text(i);});
</script>





	