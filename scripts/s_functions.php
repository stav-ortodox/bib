<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 


function get_header_site ($title_br, $header_subtitle) {
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
	<link rel="stylesheet" href="/css/media_xl.css">

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

	<div class="header_site ">

		<div class="logo_block">
			<img id="logo_1" src="/images/original-233x285.png" alt="">
			<img id="logo_2" src="/images/logo.png" alt="">
			<img id="logo_3" src="/images/iconPanteleimon.jpg" alt="">
		</div>

		<div class="header_title">
		<h4>Больничный храм святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь</h4>
		</div>
	

		<div class="header_subtitle">
			<img id="pigeon" src="/images/58388f74ceff21589cf06070.png" alt="">
			<h4>$header_subtitle</h4>
		</div>
	</div>
EOD;
}

// *************************************************************************

function get_menu () {
	$s1 = "Главная";
	$s2 = "Библиотека";
	$s3 = "Новости";
	$s4 = "О храме";
	$s5 = "Администрация";
	$s6 = "Профиль";

echo <<<EOD
		<div class="my_menu">
			<ul>
				<li><button type="button" class="btn btn-outline-primary" onclick=location.href="/index.php">$s1</button></li>
				<li><button type="button" class="btn btn-outline-primary" onclick=location.href="/pages/p_biblioteka.php">$s2</button></li>
				<li><button type="button" class="btn btn-outline-primary" onclick=location.href="/pages/p_news.php">$s3</button></li>
				<li><button type="button" class="btn btn-outline-primary" onclick=location.href="/pages/p_o_hrame.php">$s4</button></li>
EOD;

  if (isset($_SESSION['id'])) {
    echo "<li><button type='button' class='btn btn-outline-primary' onclick=location.href='/pages/p_profile.php'>".$s6.": ".$_SESSION['login']."</button></li>";
   }

  if ($_SESSION['id'] == 1) {
   	echo "<li><button type='button' class='btn btn-outline-primary' onclick=location.href='/pages/p_admins.php'>".$s5."</button></li>";
  }

		if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    
		echo 
					"<div class='login_signup'>
							<a href='/pages/p_login.php'><p>Войти</p></a>
							<a href='/pages/p_registration.php'><p>Зарегистрироваться</p></a>
							</div>
						</div>";		
    
 } else {

		echo
					"<div class='login_signup'>
							Здравствуйте, <b>".$_SESSION['login']."</b>
							<a href='/scripts/s_logout.php'><p>Выйти</p></a>
						</div>";			
    }

echo <<<EOD
    </ul>
  </div>
EOD;
}

// *************************************************************************

function get_sidebar () {
echo <<<EOD

EOD;
}

// *************************************************************************

function page_title ($page_title) {
	echo
	<<<EOD
	<div class="container">
		<div class="page_title">
				<h1>$page_title</h1>
		</div>
	</div>
EOD;
}

// *************************************************************************

function get_footer () {
echo <<<EOD
	<footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">
	<div class="pt-4">
		<a href="#" class="btn btn-outline-white">
			Bootstrap <i class="fa fa-download"></i>
		</a>
		<a href="#" class="btn btn-outline-white">
			Обучение вёрстке <i class="fa fa-graduation-cap"></i>
		</a>
	</div>

	<hr class="my-4">

	<div class="pb-4">
		<a href="#"><i class="fa fa-instagram mr-3"></i></a>
		<a href="#"><i class="fa fa-vk mr-3"></i></a>
		<a href="#"><i class="fa fa-facebook mr-3"></i></a>
	</div>
	<div class="footer-copyright py-3">
		Больничный храм святого Великомученика и Целителя Пантелеимона 
г. Ставрополь
	</div>
</footer>

</body>
</html>
EOD;
}

// *************************************************************************



?>