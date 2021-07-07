<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';


get_header_doc ('Расписание богослужений', 'Расписание богослужений');
admin ();
get_menu ();

echo "<button type='button' class='button1 btn aqua-gradient' id='printPageButton'><a href='form.php'>Вызвать форму</a></button>";?>

<link rel="stylesheet" href="style.css">


<?php
$select_query = 
sprintf("
	SELECT * FROM raspisanie ORDER BY id");


$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result))


{
echo "
<div class='container'>

		<hr>
		<div class='flex-box'> 
			<div class='date-icon-box'>
				<div class='icon' id='icon1'>
					<img class='img-fluid' src='uploads/icons/3.jpg' alt=''>
				</div>

				<div class='date-box'> 
					<h3>".$row["week"]."<br>".$row["s_date"]."</h3>
				</div>

				<div class='icon' id='icon2'>
					<img class='img-fluid' src='uploads/icons/3.jpg' alt=''>
				</div>
			</div>

			<div class='flex-box-column'>

				<div class='small-box'> 
					<div class='time-box'><h3>".$row["s_time"]."</h3></div>
					<div class='info-box'>
						<div class='timetable'><h3><u>".$row["u_text"]."</u></h3>
							<h3>".$row['s_text']."</h3>
						</div>
						<div class='priest-table'>
							<h3 id='sl-sv'>служащий священник:</h3>
							<h3 id='sos-sv'>сослужащий(-е) священник(-и):</h3>
							<h3 id='pom-sv'>помогающий священник:</h3>
							<h3 id='otd-sv'>отдыхающий священник:</h3>
						</div>
					</div>
				</div>

	</div>
	</div>
	<hr>
	</div>
	";}
?>








<?php 
$a=10; 
$b='10';

if ($a === $b) {
	echo "да";
}
else {
	echo "нет";
}

echo "Результат: " . 2 + 2;

?>


















<?php get_footer() ?>