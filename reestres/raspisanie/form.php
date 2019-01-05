<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

get_header_doc('Форма для расписания', 'Форма для расписания');
?>




<link rel="stylesheet" href="style.css">	

<div class="form">
	<form action="action.php" method="POST" enctype="multipart/form-data">

		<label for="s_date"><b>Дата:</b></label>
		<input class="form-control mb-4" type="text" name="s_date" id="s_date"><br>

		<label for="week"><b>День недели:</b></label>
		<select class="form-control mb-4" type="text" name="week" id="s_date">
			<option value="Понедельник">Понедельник</option>
			<option value="Вторник">Вторник</option>
			<option value="Среда">Среда</option>
			<option value="Четверг">Четверг</option>
			<option value="Пятница">Пятница</option>
			<option value="Суббота">Суббота</option>
			<option value="Воскресение">Воскресение</option>
		</select><br>

		<label for="s_time"><b>Время:</b></label>
		<input class="form-control mb-4" type="text" name="s_time" id="s_date" value="7:30"><br>

		<div class="border">
			<label for="u_text"><u><b>Подчеркнутый текст:</b></u></label>
			<input class="form-control" type="text" name="u_text" placeholder="если не нужен оставить пустым"><br>

			<label for="u_color-text">Чёрным</label>
			<input class="u_color-text mb-0" type="radio" name="u_color_text" value="black" checked><br>

			<label for="u_color-text">Красным</label>
			<input class="u_color-text" type="radio" name="u_color_text" value="red"><br>
		</div>

		<div class="border">
			<label for="s_text"><b>Обычный текст:</b></label>
			<input class="form-control" type="text" name="s_text" placeholder="пример: Божественная Литургия. Исповедь. Молебен на начало Нового года."><br>

			<label for="color_text">Чёрным</label>
			<input class="color-text mb-0" type="radio" name="color_text" value="black" checked><br>

			<label for="color_text">Красным</label>
			<input class="color-text" type="radio" name="color_text" value="red"><br>
		</div>

		<label for="priest"><b>Варианты служения:</b></label>
		<div class="priest mb-1">
			<input class="form-control mr-1" type="checkbox" name="priest1" checked>
			<input class="form-control" type="text" value="служащий священник:" readonly>
			
			<input class="form-control mr-1" type="checkbox" name="priest2" checked>
			<input class="form-control" type="text" value="сослужащий(-е) священник(-и):" readonly>
			
			<input class="form-control mr-1" type="checkbox" name="priest3" checked>
			<input class="form-control" type="text" value="помогающий священник:" readonly>
			
			<input class="form-control mr-1" type="checkbox" name="priest4" checked>
			<input class="form-control" type="text" value="отдыхающий священник:" readonly>
		</div>

		<div class="sobitie">
			<h5><b>Добавить событие на этот день</b></h5>
			<input class="btn btn-success" type="submit" value="+" name="plus">
		</div>
		
		<input class="btn btn-info btn-block mb-5" type="submit" value="Готово!" name="gotovo">
	</form>
</div>
	


</body>
</html>
