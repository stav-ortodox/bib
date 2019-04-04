<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
get_header_doc ('', 'Реестр компов');
 ?>

echo "
		<hr>
		<div class='flex-box'> 
			<div class='date-icon-box'>
				<div class='icon' id='icon1'>
					<img class='img-fluid' src='uploads/icons/0_db9df_5e0fcce5_XL.jpg' alt=''>
				</div>

				<div class='date-box'> 
					<h3>".$row[1]."<br>".$row["s_date"]."</h3>
				</div>

				<div class='icon' id='icon2'>
					<img class='img-fluid' src='uploads/icons/3.jpg' alt=''>
				</div>
			</div>

			<div class='flex-box-column'>

				<div class='small-box'> 
					<div class='time-box'><h3>".$row[1]."</h3></div>
					<div class='info-box'>
						<div class='timetable'><h3><u>".$row[1]."</u></h3>
							<h3>".$row[1]."</h3>
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
	