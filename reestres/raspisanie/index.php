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



<div class="container">

	<div class="flex-box"> <!-- один день -->

		<div class="date-box">
			<h3>Вторник <br> 1 января</h3>
		</div>

		<div class="small-box"> <!-- одно событие -->
			<div class="time-box"><h3>00:00</h3></div>
			<div class="info-box">
				<div class="timetable"><h3><u>Гражданский Новый год.</u></h3>
					<h3>Божественная Литургия.
						Исповедь.
					Молебен на начало Нового года.</h3>
				</div>
				<div class="priest-table">
					<h3>служащий священник:</h3>
					<h3>сослужащий(-е) священник(-и):</h3>
					<h3>помогающий священник:</h3>
					<h3>отдыхающий священник:</h3>
				</div>
			</div>
		</div>

		<div class="small-box"> <!-- одно событие -->
			<div class="time-box"><h3>08:00</h3></div>
			<div class="info-box">
				<div class="timetable"><h3>
					Божественная Литургия.
					Исповедь.
					Молебен с чтением Акафиста
					мч. Вонифатию и
					водоосвящением. Заупокойная
					панихида.
				</h3>
				<div class="priest-table">
					<h3>служащий священник:</h3>
					<h3>сослужащий(-е) священник(-и):</h3>
					<h3>помогающий священник:</h3>
					<h3>отдыхающий священник:</h3>
				</div>
			</div>

		</div>
	</div>

</div>

</div>

















<?php get_footer() ?>