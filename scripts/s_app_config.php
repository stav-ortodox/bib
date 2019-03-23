﻿<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/templates.php';

 function get_header_doc ($header_subtitle, $title_br) {

	echo <<<EOD
	<!DOCTYPE html>
		<html lang='ru'>
		<head>
		<meta charset='UTF-8'>
		<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="Hover Effect Ideas: Inspiration for subtle hover effects" />
		<meta name="keywords" content="hover effect, inspiration, grid, thumbnail, transition, subtle, web design" />
		<meta name="author" content="Stav_Orthodox" />

	<!-- Font Awesome -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- Bootstrap core CSS -->
 <link href="/css/bootstrap.min.css" rel="stylesheet">

 <!-- Material Design Bootstrap -->
 <link href="/css/mdb.min.css" rel="stylesheet">
 
 <!-- Your custom styles (optional) -->
 <link href="/css/style.css" rel="stylesheet">

	<!-- My css -->
	<link rel='stylesheet' href='/css/test.css'>
	<link rel='stylesheet' href='/css/bootstrap-grid.min.css'>
	<link rel='stylesheet' href='/css/bootstrap.css'>
	
	<!-- Fonts -->
	<link href="http://allfont.ru/allfont.css?fonts=ds-russia-demo" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
	<link href="http://allfont.ru/allfont.css?fonts=zanesennyj" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter51093191 = new Ya.Metrika2({
                    id:51093191,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51093191" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<title>$title_br</title>
</head>
<body>
<div class="logo_block">
	<img id="logo_1" src="/images/original-233x285.png" alt="">
	<img id="logo_2" src="/images/logo.png" alt="">
	<img id="logo_3" src="/images/iconPanteleimon.jpg" alt="">
</div>
<div class="header_title">
<h4>Больничный храм святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь</h4>
<img id="pigeon" src="/images/58388f74ceff21589cf06070.png" alt="">
</div>
<div class="header_subtitle_doc">
<h4>$header_subtitle</h4>
</div>
EOD;
}

// **************************************************************

function get_open_form ($action, $method, $form_title, $enctype) {
$enctype = 'multipart/form-data';
	echo <<<EOD
	<div class="user_form"> 
	    <form action="$action" method="$method" enctype="$enctype">
	        <h4>$form_title</h4>
EOD;
}

// **************************************************************

function get_close_form () {
	echo <<<EOD
	<input class="submit" type="submit" value="Готово!">
	<input class='submit' type='button' onclick='history.back();' value="Отмена">
	</form>
	</div>
EOD;
}

// **************************************************************

function table_reestr_comp ($title_table) {
	echo "<div class='title_table'>
	<h1>$title_table</h1>
</div>

";
}

// **************************************************************

function table_reestr_RGIA ($title_table) {
	echo "<div class='title_table'>
	<h1>$title_table</h1>
</div>

<section>
<div class='container-fluid'>
<table>
<thead>
		<tr class='header'>
			<th class='font-RGIA'><div>№</div></th>
			<th class='font-RGIA'><div>Фонд</div></th>
			<th class='font-RGIA'><div>Опись</div></th>
			<th class='font-RGIA'><div>Дело</div></th>
			<th class='font-RGIA'><div>Начато</div></th>
			<th class='font-RGIA'><div>Окончено</div></th>
			<th class='font-RGIA'><div>Наименование</div></th>
			<th class='font-RGIA'><div>Кол-во листов</div></th>
			<th class='font-RGIA'><div>Примечание</div></th>
			<th class='font-RGIA'><div>Том</div></th>
			<th class='font-RGIA'><div>Заказано</div></th>
			<th class='font-RGIA'><div>Получено в ч/з РГИА</div></th>
			<th class='font-RGIA'><div>Заказана копия</div></th>
			<th class='font-RGIA'><div>Получена копия</div></th>
		</tr>
		</thead>
		<tbody>";
}

// **************************************************************

function place_to_sign($filename) { #место для подписи
$date_today = date("d.m.y"); 
$today = date("H:i"); 
// $filename = '../pages/p_reestr_comp.php';
if (file_exists($filename)) 

	echo 
	"
		<div class='place_to_sign page-break'>
			<p>Документ создан: 28.12.18 в 12:51 
			<br> и распечатан $date_today в $today 
			<br> клириком храма св. Вел. и Цел. Пантелеимона г. Ставрополя
			<br></p>
			<p>иереем ____________ Игнатием Переходченко</p>
			<br>
			
			<p><b>Утверждаю:</b>
			<br>Благочинный III Ставропольского округа
			<br>Настоятель храма св. Вел. и Цел. Пантелеимона г. Ставрополя</p>
			<br>
			<p><b>митрофорный протоиерей _______________________Павел Самойленко</b></p>
		</div>";
}


// **************************************************************
// акафист
function akafist() { 
$date_today = date("d.m.y"); 
$today = date("H:i"); 
$filename = 'index.php';
if (file_exists($filename)) 

	echo 
	"
		<div class='place_to_sign page-break'>
			<p>Акафист сформировал и распечатал $date_today в $today 
			<br>в Издательском центре храма св. Вел. и Цел. Пантелеимона г. Ставрополя
			<br>для богослужебного использования
			</p>
			<p>священник ____________ Игнатий Переходченко</p>
			текст акафиста взят с сайта akafistnik.ru
			<br>
			<br><br>
			<p><b>Утверждаю:</b>
			<br>Благочинный III Ставропольского округа
			<br>Настоятель храма св. Вел. и Цел. Пантелеимона г. Ставрополя</p>
			<br>
			<p><b>митрофорный протоиерей _______________________Павел Самойленко</b></p>
		</div>";
}



?>