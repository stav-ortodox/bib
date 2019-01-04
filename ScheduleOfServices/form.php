<?php 
// session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

get_header_doc('Форма для расписания', 'Форма для расписания');
?>




<link rel="stylesheet" href="style.css">	

<div class="new_form">
	<form action="action.php" method="POST" enctype="multipart/form-data">

		<label for="s_date">Дата:</label>
		<input class="my-form-control mb-4 w-25" type="date" name="s_date"><br>

		<!-- <label for="week">День недели:</label>
		<select class="my-form-control mb-4 w-25" type="text" name="week">
			<option value="Понедельник">Понедельник</option>
			<option value="Вторник">Вторник</option>
			<option value="Среда">Среда</option>
			<option value="Четверг">Четверг</option>
			<option value="Пятница">Пятница</option>
			<option value="Суббота">Суббота</option>
			<option value="Воскресение">Воскресение</option>
		</select><br> -->

		<label for="s_time">Время:</label>
		<input class="my-form-control mb-4 w-25" type="text" name="s_time" value="7:30"><br>

		<label for="u_text">Подчеркнутый текст:</label>
		<input class="my-form-control mb-4" type="text" name="u_text" placeholder="если не нужен оставить пустым"><br>

		<label for="text">Текст:</label>
		<input class="my-form-control mb-4" type="text" name="text" placeholder="пример: Божественная Литургия. Исповедь. Молебен на начало Нового года."><br>

		<label for="color-text">Чёрным</label>
		<input class="radio mb-0" type="radio" name="color-text" value="black" checked><br>

		<label>Красным</label>
		<input class="radio mb-4" type="radio" name="color-text" value="red"><br>

		<label for="priest">Для заполнения:</label>
		<div class="priest mb-1">
		<input class="radio mr-1" type="checkbox" name="priest1" checked>
		<input class="radio w-50" type="text" value="служащий священник:" readonly><br>
		</div>

		<div class="priest mb-1">
		<input class="radio mr-1" type="checkbox" name="priest2" checked>
		<input class="radio w-50" type="text" value="сослужащий(-е) священник(-и):" readonly><br>
		</div>

		<div class="priest mb-1">
		<input class="radio mr-1" type="checkbox" name="priest3" checked>
		<input class="radio w-50" type="text" value="помогающий священник:" readonly><br>
		</div>

		<div class="priest mb-1">
		<input class="radio mr-1" type="checkbox" name="priest4" checked>
		<input class="radio w-50" type="text" value="отдыхающий священник:" readonly><br>
		</div>

		<div class="sobitie">
			<h5>Добавить событие на этот день</h5>
			<input class="btn btn-success w-10" type="submit" value="+" name="plus">
		</div>
		
		<input class="btn btn-info btn-block w-25 mb-5" type="submit" value="Готово!" name="gotovo">
	</form>
</div>
	


</body>
</html>
