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
";
?>