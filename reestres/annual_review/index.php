<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
get_header_doc ('', 'Богослужебный журнал');
admin ();
get_menu ();

echo "<button type='button' class='button1 btn aqua-gradient' id='printPageButton'><a href='form.php'>Вызвать форму</a></button>";?>
<link rel="stylesheet" href="style.css">



<?php 
table_reestr_comp('Богослужебный журнал за 2018 год храма св. Великомученика и Целителя Пантелеимона г. Ставрополя');?>


<div class="image"><img class="card img-thumbnail" style="width: 500px; margin-bottom: 150px;" src="images/f198cc24-985a-458a-864b-ed98ae39a853.jpg" alt="">

<div class="copyright text-center">
	<span>Издательский центр храма св. Великомученика и Целителя Пантелеимона</span> <br>
	<small>Ставрополь 2019 г.</small>
</div>
</div>


<div class="image">
    <img style="width: 400px; margin-bottom: 30px;page-break-after: avoid;" class="card img-thumbnail page-break" src="images/99d800ce-f8c3-42b8-8749-5e53277e3a12.jpg" alt="">
    <img style="width: 400px; margin-bottom: 255px;page-break-after: avoid;" class="card img-thumbnail page-break" src="images/6bdceef4-0bcb-4d3d-83df-07ae36175979.jpg" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid; page-break-after: avoid;" class="card img-thumbnail" src="images/68768f41-4619-4d14-bfae-53d29ff6037d.jpg" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/d28b6c12-9d54-453b-b141-2eda8ac94516.jpg" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/f4ba998b-f9f8-46b1-9009-beb6b0fb5699.jpg" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/93918158-af73-492a-933c-a62d8fc1806e.jpg" alt="">
    <img style="width: 400px; margin-bottom: 30px; margin-top: 23px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/57dbdd84-6403-4f1f-bf8f-f27b5224beb9.jpg" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/78c51276-adc4-45cc-a9f2-dfe12b4def8b.jpg" alt="">
    <img style="width: 300px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/7cd095d7-aac3-4d46-99c4-4dd0e7fcc687.jpg" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/0347b1aa-30c1-41f7-ba3b-34c90eba2462.jpg" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/DSC_0353.JPG" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/DSC_0375.JPG" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/DSC_0385.JPG" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/DSC_0414.JPG" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/DSC_0484.JPG" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/eb764253-e584-483f-9fc5-b0f8d899d944.jpg" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/IMG_6101.JPG" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/foto1.JPG" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/foto3.JPG" alt="">
    <img style="width: 500px; margin-bottom: 30px; page-break-after: avoid;" class="card img-thumbnail page-break" src="images/foto4.JPG" alt="">
</div>

<?php
table_reestr_comp('Причт храма св. Великомученика и Целителя Пантелеимона г. Ставрополя в 2018 году');?>
<br><br>
<div class="image">
    <img style="width: 750px; margin-bottom: 30px;" class="card img-thumbnail page-break" src="images/vse.JPG" alt="">
    <img style="width: 750px; margin-bottom: 30px;" class="card img-thumbnail page-break" src="images/vse2.JPG" alt="">
</div>
<div class="clergy mt-5 card">
    <img style="width: 198px;" class="img-thumbnail" src="images/i-100x150.png" alt="">
    <h5>
        Настоятель храма св. Великомученика и Целителя Пантелеимона г. Ставрополя<br>
        Митрофорный протоиерей Павел Михайлович Самойленко <br><br>
        кандидат богословских наук,<br>
        первый проректор СтДС,<br>
        председатель Епархиального комитета по взаимодействию с казачеством, <br>
        благочинный III Ставропольского округа <br>
    </h5>
</div>
<div class="clergy card">
    <img style="width: 198px;" class="img-thumbnail" src="images/i-100x150%20(1).png" alt="">
    <h5>
        Второй священник<br>
        Иерей Иоанн Александрович Шестаков<br><br>
        выпускник СтДС 2006 г.<br>
        клирик храма св. Великомученика и Целителя Пантелеимона г. Ставрополя <br>
        с 7 июля 2015 г.<br>
    </h5>
</div>
<div class="clergy card">
    <img style="width: 198px;" class="img-thumbnail" src="images/i-100x15044.png" alt="">
    <h5>
        Третий священник<br>
        Иерей Иоанн Николаевич Половин<br><br>
        выпускник СтДС 2013 г.<br>
        клирик храма св. Великомученика и Целителя Пантелеимона г. Ставрополя <br>
        с 24 сентября 2012 г.
    </h5>
</div>
<div class="clergy card">
    <img style="width: 198px;" class="img-thumbnail" src="images/i-100x150%20(2).png" alt="">
    <h5>
        Четвёртый священник<br>
        Иерей Игнатий Андреевич Переходченко<br><br>
        выпускник СтДС 2016 г.<br>
        клирик храма св. Великомученика и Целителя Пантелеимона г. Ставрополя <br>
        с 1 мая 2018 г.
    </h5>
</div>
<div class="clergy card">
    <img style="width: 198px;" class="img-thumbnail" src="images/i-200x300.png" alt="">
    <h5>
        Диакон Симеон Вячеславович Чикин<br><br>
        выпускник СтДС 2016 г.<br>
        клирик храма св. Великомученика и Целителя Пантелеимона г. Ставрополя <br>
        с 28 мая 2014 г. по 30 декабря 2018 г.
    </h5>
</div>


<?$date_today = date("d.m.y"); 
$today = date("H:i"); 
$filename = 'index.php';
if (file_exists($filename)) 

	echo 
	"
		<div class='place_to_sign page-break'> 
			<br>Документ редактирован и распечатан $date_today в $today 
			<br> клириком храма св. Вел. и Цел. Пантелеимона г. Ставрополя
			<br></p>
			<p>иереем ____________ Игнатием Переходченко</p>
			<br>
			
			<p><b>Утверждаю:</b>
			<br>Благочинный III Ставропольского округа
			<br>Настоятель храма св. Вел. и Цел. Пантелеимона г. Ставрополя</p>
			<br>
			<p><b>митрофорный протоиерей _______________________Павел Самойленко</b></p>
		</div>";?>

</body>
<!-- нумерация строк таблиц-->
<script>
$('.table tr').each(function(i) {
i && $(this).find('td:first').text(i);});
</script>