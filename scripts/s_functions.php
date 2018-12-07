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
	<link rel='stylesheet' href='/css/bootstrap-grid.min.css'>

	<!-- My js -->
	

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

	<script type="text/javascript">
		jQuery(document).ready(function($) {
		$('.icon-menu').click(function(event) {
		$('.sidebar').toggleClass('active')
		});
		});
	</script>

	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-30914018-3', 'auto');
      ga('send', 'pageview');
  </script>
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
		<div class="wrap justify-content-center mb-5">
		  <div class="btn-group" role="group" aria-label="Basic example">
		    <button type="button" class="btn btn-cyan" onclick=location.href="/index.php">$s1</button>
		    <button type="button" class="btn btn-cyan" onclick=location.href="/pages/p_biblioteka.php">$s2</button>
		    <button type="button" class="btn btn-cyan" onclick=location.href="/pages/p_news.php">$s3</button>
		    <button type="button" class="btn btn-cyan" onclick=location.href="/pages/p_o_hrame.php">$s4</button>	  
EOD;

  if (isset($_SESSION['id'])) {
    echo "<button type='button' class='btn btn-cyan' onclick=location.href='/pages/p_profile.php'>".$s6.": ".$_SESSION['login']."</button>";
   }

  if ($_SESSION['id'] == 1) {
   	echo "<button type='button' class='btn btn-cyan' onclick=location.href='/pages/p_admins.php'>".$s5."</button>";
  }

echo <<<EOD
    	</div>
		</div>
EOD;
}

// *************************************************************************

function get_sm_menu (){
	$s1 = "Главная";
	$s2 = "Библиотека";
	$s3 = "Новости";
	$s4 = "О храме";
	$s5 = "Администрация";
	$s6 = "Профиль";
echo '	
<script>$("#your-custom-id").mdbDropSearch();</script>
<div class="dropdown_z mb-5">
	<div class="dropdown">
		<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1-1" data-toggle="dropdown">Меню</button>

		<div class="dropdown-menu dropdown-primary" id="your-custom-id">
			<input class="form-control" type="text" placeholder="Поиск" aria-label="Search">
			<a class="dropdown-item mdb-dropdownLink-1" href="/index.php">'.$s1.'</a>
			<a class="dropdown-item mdb-dropdownLink-1" href="/pages/p_biblioteka.php">'.$s2.'</a>
			<a class="dropdown-item mdb-dropdownLink-1" href="/pages/p_news.php">'.$s3.'</a>
			<a class="dropdown-item mdb-dropdownLink-1" href="/pages/p_o_hrame.php">'.$s4.'</a>
			<a class="dropdown-item mdb-dropdownLink-1" href="/pages/p_profile.php">'.$s6.'</a>
			<a class="dropdown-item mdb-dropdownLink-1" href="/pages/p_admins.php">'.$s5.'</a>
		</div>
	</div>
</div>
';
}
// *************************************************************************

function get_sidebar () {
echo <<<EOD
<div class="sidebar">

EOD;
			 
			if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
				echo 
				"<div class='login_signup'>
				<a href='/pages/p_login.php'><p>Войти</p></a>
				<a href='/pages/p_registration.php'><p>Зарегистрироваться</p></a>
				</div>";		
			} else {
				echo
				"<div class='login_signup'>
				Здравствуйте, <b>".$_SESSION['login']."</b>
				<a href='/scripts/s_logout.php'><p>Выйти</p></a>
				</div>";			
			}
			
echo 
<<<EOD
<img src="/images/341acbc6-a2da-467d-81b3-8ec7269ed109.jfif" class="img-fluid z-depth-2 mb-3" alt=""> 
EOD;
			if ($_SESSION['id'] == 1) {
   	echo "
   	<div class='admin-panel'>
   	<hr>
		<h4 class='text-center'>Панель администратора</h4>
			<small>(Вам доступна эта панель, потому что Вы являетесь администратором сайта)</small>
		<ul>
		<li><a href='/pages/admins/p_admin_add_new_publishing_block.php'><p>Добавить новый блок издания</p></a></li>
		<li><a href='/pages/admins/p_admin_add_new_publishing_post.php'><p>Добавить новую единицу издания</p></a></li>
		</ul>
		<hr>
		</div>";
}
echo <<<EOD
</div>
EOD;
}

// *************************************************************************

function get_sm_sidebar () {
echo <<<EOD
<div class="sm-sidebar">
EOD;
			 
			if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
				echo 
				"<div class='sm-login_signup'>
				<a href='/pages/p_login.php'><p>Войти</p></a>
				<a href='/pages/p_registration.php'><p>Зарегистрироваться</p></a>
				</div>";		
			} else {
				echo
				"<div class='sm-login_signup'>
				Здравствуйте, <b>".$_SESSION['login']."</b>
				<a href='/scripts/s_logout.php'><p>Выйти</p></a>
				</div>";			
			}
			
		if ($_SESSION['id'] == 1) {
	   	echo "
	   	<div class='sm-admin-panel'>
			Панель администратора <br>
			<small>(Вам доступна эта панель, потому что Вы являетесь администратором сайта)</small>
			<ul>
			<li><a href='/pages/admins/p_admin_add_new_publishing_block.php'><p>Добавить новый блок издания</p></a></li>
			<li><a href='/pages/admins/p_admin_add_new_publishing_post.php'><p>Добавить новую единицу издания</p></a></li>
			</ul>
			<hr>
			</div>";
}
echo <<<EOD
</div>
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
		Copyright © 2018 Больничный храм святого Великомученика и Целителя Пантелеимона 
г. Ставрополь
	</div>
</footer>
</body>
</html>
<script>
  var sticky = new Sticky('[data-sticky]');
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
EOD;
}

// *************************************************************************



?>