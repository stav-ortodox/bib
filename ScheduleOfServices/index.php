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

$select_query = 
sprintf("
	SELECT * FROM raspisanie, calendar");
$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))
 

{ // выводим данные
echo '
			<table class="table-r">
				<tr>
					<td rowspan="1" class="td-min-width">'.$row[10].'<br>'.$row[11].' '.$row[9].'</td>
					<td style="color: red;"><h3>'.$row[1].'</h3></td>
					<td>
						<br>
						<p><h3 class="bold"><u>'.$row[2].'</u><br>
							'.$row[3].'</h3></p><hr>
						<h3><p style="color: #54749C;">служащий священник:</p></h3>
						<h3><p style="color: #7030A0;">сослужащий(-е) священник(-и):</p></h3>
						<h3><p style="color: #943634;">помогающий священник:</p></h3> 
						<h3><p style="color: #35A907;">отдыхающий священник:</p></h3><br>
					</td>
				</tr>
			</table>
		';
}

echo "
</div>
";
?>

		












</body>
</html>