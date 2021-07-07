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
//SELECT * FROM raspisanie, calendar WHERE raspisanie.id_day = calendar.id");
// $res = mysqli_query($link, $query);


// $date=@date('Y.m.d', strtotime($date))

$select_query = 
sprintf("
SELECT * FROM raspisanie");
$result = mysqli_query($link, $select_query);

while ($row = mysqli_fetch_array($result)) {


				if ($rowspan == null) {
					$date = $row['s_date'];
					//список месяцев с названиями для замены
					// $date=date('l j-m-', strtotime($date));

					$monthsList = array(1 => 
						"января", 
						"февраля",
					  "марта",
					  "апреля",
					  "мая",
					  "июня",
					  "июля",
					  "августа",
					  "сентября",
					  "октября",
					  "ноября",
					  "декабря"
					);

					// $weeksList = array(1 => "Понедельник",
					//   "Вторник",
					//   "Среда",
					//   "Четверг",
					//   "Пятница",
					//   "Суббота",
					//   "Воскресение"
					// );

					$weeksList = array(
					  "Monday" => "Понедельник",
					  "Tuesday" => "Вторник",
					  "Wednesday" => "Среда",
					  "Thursday" => "Четверг",
					  "Friday" => "Пятница",
					  "Saturday" => "Суббота",
					  "Sunday" => "Воскресение"
					);
					

					$date = date($weeksList[date( 'l' )] . ' j '. $monthsList[date( 'n' )], strtotime($date));
					 

					echo '<pre>';
					print_r($row);
					echo ''.$rowspan.'
						<tr>
							<td rowspan="'.$rowspan.'" class="td-min-width">'.$date.' '.$row[15].'</td>
							<td style="color: red;"><h3>'.$row[4].'</h3></td>
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
					 
			}
					 
				
				else {
					echo 'ничего';
				}
			}

			

echo "
</table>
</div>
";
mysqli_free_result($result);
?>

		












</body>
</html>