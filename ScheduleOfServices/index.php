<?php require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';   ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="../css/style.css">

	<!-- <link rel="stylesheet" href="https://unpkg.com/gutenberg-css@0.4" media="print"> -->
<body>
<html>


<?php
echo "<button type='button' class='button1 btn aqua-gradient' id='printPageButton'><a href='form.php'>Вызвать форму</a></button>";
echo "<div class='content'>
<table class='table-r'>";

// $query = 
// sprintf("SELECT id_day, COUNT(id_day) FROM raspisanie GROUP BY id_day");
// $res = mysqli_query($link, $query);


$select_query = 
sprintf("
SELECT * FROM raspisanie, calendar WHERE raspisanie.id_day = calendar.id");
$result = mysqli_query($link, $select_query);

while ($row = mysqli_fetch_array($result)) {
	var_dump($rowspan);


				if ($rowspan == null) {
					echo ''.$rowspan.'
						<tr>
							<td rowspan="'.$rowspan.'" class="td-min-width">'.$row[12].'<br>'.$row[10].' '.$row[11].'</td>
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
					';
					 // $rowspan=$row['id_day'];
			}
					 
				
				else {
					echo 'ничего';
				}
			}

			

echo "
</table>
</div>
";
?>

		












</body>
</html>