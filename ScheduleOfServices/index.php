<?php require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';   ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="https://unpkg.com/gutenberg-css@0.4" media="print"> -->
<body>
<html>


<?php



 


echo "<div class='content'>";

$query = 
sprintf("SELECT id_day, COUNT(id_day) FROM raspisanie GROUP BY id_day");
$res = mysqli_query($link, $query);


$select_query = 
sprintf("
SELECT * FROM raspisanie, calendar WHERE raspisanie.id_day = calendar.id");
$result = mysqli_query($link, $select_query);

while ($id_day = mysqli_fetch_array($res)) {
	$array['id_day'][] = $id_day[1];
}

while ($row = mysqli_fetch_array($result)) {
	$array['row'][] = $row;

  // print_r($array);

	if ($row[1] == $row[1]); {
		$i++;
	
		echo ''.$i.'
					<table class="table-r">
						<tr>
							<td rowspan="'.$row['id_day'].'" class="td-min-width">'.$row[10].'<br>'.$row[11].' '.$row[12].'</td>
							<td style="color: red;"><h3>'.$row[2].'</h3></td>
							<td>
								<br>
								<p><h3 class="bold"><u>'.$row[3].'</u><br>
									'.$row[4].'</h3></p><hr>
								<h3><p style="color: #54749C;">служащий священник:</p></h3>
								<h3><p style="color: #7030A0;">сослужащий(-е) священник(-и):</p></h3>
								<h3><p style="color: #943634;">помогающий священник:</p></h3> 
								<h3><p style="color: #35A907;">отдыхающий священник:</p></h3><br>
							</td>
						</tr>
					</table>
				';
}
}

echo "
</div>
";
?>

		












</body>
</html>