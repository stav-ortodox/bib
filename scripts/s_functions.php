<?php 
// require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 


function get_header_site ($title_br, $header_subtitle) { ?>
	
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

</head>

<body>

	<div class="header_site ">

		<div class="logo_block">
			<!-- <img id="logo_1" src="/images/19089116.png" alt=""> -->
			<img id="logo_2" src="/images/logo.png" alt="">
			<img id="logo_3" src="/images/iconPanteleimon.jpg" alt="">
		</div>

		<div class="header_title">
		<h4>Электронная библиотека храма святого Великомученика и Целителя Пантелеимона 
г. Ставрополь</h4>
		</div>
	

		<div class="header_subtitle">
			<!-- <img id="pigeon" src="/images/58388f74ceff21589cf06070.png" alt=""> -->
		</div>
	</div>

 <? }

// *************************************************************************
	
function get_menu () {
	$s1 = "Главная";
	$s2 = "Библиотека";
	$s3 = "Новости";
	$s4 = "О храме";
	$s5 = "Администрация";
	$s6 = "Профиль";
echo <<<EOD
		<div class="wrap justify-content-center mb-5" id="printPageButton">
		  <div class="btn-group" role="group" aria-label="Basic example">
		    <button type="button" class="btn btn-cyan" onclick=location.href="/index.php">$s1</button>
		    <button type="button" class="btn btn-cyan" onclick=location.href="/pages/p_biblioteka.php">$s2</button>
		    <button type="button" class="btn btn-cyan" onclick=location.href="/pages/p_news.php">$s3</button>
		    <button type="button" class="btn btn-cyan" onclick=location.href="/pages/p_o_hrame.php">$s4</button>	  
EOD;

  // if (isset($_SESSION['id'])) {
  //   echo "<button type='button' class='btn btn-cyan' onclick=location.href='/pages/p_profile.php'>".$s6.": ".$_SESSION['login']."</button>";
  //  }

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
		<ul>
		<h4 class='text-center'>Документы</h4>
			<li><a href='/reestres/reestr_RGIA/p_reestr_RGIA.php'>Реестр дел из РГИА</a></li>
			<li><a href='/reestres/reestr_comps/p_reestr_comps.php'>Реестр техники</a></li>
			<li><a href='/reestres/reestr_icons/index.php'>Реестр икон</a></li>
			<li><a href='/reestres/raspisanie/index.php'>Расписание богослужений</a></li>
			<li><a href='/RGIA_editions/index.php'>Издания документов РГИА</a></li>
			<li><a href='/reestres/inventory_altar/index.php'>Журнал инвентаризации алтарей</a></li>
			<li><a href='/reestres/annual_review/index.php'>Годовая Богослужебная статистика</a></li>
			<li><a href='http://bib/akafist/'>Редактор акафистов</a></li>
			
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
			<ul>
			<h4 class='text-center'>Документы</h4>
				<li><a href='/reestres/reestr_RGIA/p_reestr_RGIA.php'>Реестр дел из РГИА</a></li>
				<li><a href='/reestres/reestr_comps/p_reestr_comps.php'>Реестр техники</a></li>
				<li><a href='/reestres/reestr_icons/index.php'>Реестр икон</a></li>
				<li><a href='/reestres/raspisanie/index.php'>Расписание богослужений</a></li>
				<li><a href='/RGIA_editions/index.php'>Издания документов РГИА</a></li>
				<li><a href='/reestres/inventory_altar/index.php'>Журнал инвентаризации алтарей</a></li>
				<li><a href='/reestres/annual_review/index.php'>Годовая Богослужебная статистика</a></li>
				<li><a href='http://bib/akafist/'>Редактор акафистов</a></li>
				
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

function admin () {
	if ($_SESSION['id'] == 1) { #допуск админа
	} else {
		// get_header_doc('Ошибка', 'Ошибка');
		echo "<div class='text-center'>
    		<h1 class='text-danger'>Ошибка 404! Такой страницы не существует!</h1> <br><button class='btn aqua-gradient' type='button' onclick=location.href='/index.php';>ОK</button>
    			</div></a>";
		exit();
	} 
}

// *************************************************************************

function redirect () {
	echo "<script>window.location.href = history.go(-2);</script>";
}

// *************************************************************************

function numeric_test ($variable, $string_ru) {
	if (!is_numeric ($variable)) {
		get_header_doc('Ошибка', 'Ошибка');
    die ("<div class='text-center'>
    		<h1 class='text-danger'>В строкe '$string_ru' нужно вводить только числа!</h1> <br><button class='btn aqua-gradient' type='button' onclick='history.back();'>ОK</button>
    			</div>");
	}
	if ($variable == null) {$variable = '0';} else {$variable = $variable;};
}


// *************************************************************************
function print_button () {
echo '<style type="text/css" media="print">
button {display: none; }
</style>
<button class="btn aqua-gradient" onclick="window.print();">Печать</button>';
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
EOD;
}

// *************************************************************************
// функция вывода шаблонов блоков изданий
function taplate_pb () { 

	global $link;
	$query = sprintf("SELECT * FROM publishing_blocks");
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_assoc($result)) {

		// echo "<pre>";
		// 	 var_dump($row);
		// echo "</pre>";
			
			$id_pb = $row["id"];
			$name_pb = $row["block_name"];
			$descr_pb = $row["block_description"];
			$image_pb = $row["block_image"];
			$hidden = $row['block_hidden'];

		// выводим данные

		if (strlen($descr_pb)>170) {
			$str = "..."; 
		} 
		else {
			$str = "";
		}
		$descr_cut = mb_substr(strip_tags($descr_pb), 0, 120, 'utf-8');


		if ($_SESSION['id'] == 1) {  #Для админа
			
			$edit = "<a href= /pages/biblioteka/p_edit_publisher_block.php?id=".$id_pb.">Редактировать</a>";
			$delete = "<a href= /pages/biblioteka/s_delete_publisher_block.php?id=".$id_pb.">Удалить блок</a>";
			
			if ($hidden == 0) {
				$no_error = 'блок открыт';
				$color = "color: green;";
				$border = "border: solid 1px green;";
			}
			if ($hidden == 1) {
				$no_error = 'блок скрыт';
				$color = "color: red;";
				$border = "border: solid 1px #E47F50;";
			}
		}
		if ($_SESSION['id'] == null or $_SESSION['id'] > 1) {
			

			if ($hidden == 0) {
				$color = "display: none";}
				else {
					continue(1);
				}
			} 
	?>

	<div class='col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center'>
		<div class='card pub-block'>
			<div class='no_error' style='<?= $color . $border ?>'><strong><?=$no_error?></strong><br><?=$edit?><br><?=$delete?></div>
			<table class='pub-block-wrap card-title-block-color'>
				<tbody>
					<tr>
						<td class=''><h4 class='card-title-my'><?=$name_pb?></h4></td>
					</tr> 
				</tbody>
			</table>
			<div class='view overlay'>
				
					<img class='img-fluid m-0 p-0' src=/<?=$image_pb?> alt=''>
				<a href='/pages/biblioteka/p_publishing_page.php?id=<?=$id_pb?>'>
					<div class='mask rgba-white-slight'></div>
				</a>
			</div>
			<div class='card-body card-title-block-color'>
				<table class='pub-block-wrap'>
					<tbody>
						<tr>
							<td class='align-bottom'><a href='/pages/biblioteka/p_publishing_page.php?id=<?=$id_pb?>'><p class='card-text card-text-my align-text-bottom'><?=$descr_cut . $str?></p></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<? } }


/**************************************************************************************************************/
// функция вывода шаблона единицы издания (publishing post)
function template_pp () { 
	global $link;
	$id_pb = $_GET["id"];

	if (isset($id_pb)) {
		$query = sprintf("SELECT * FROM publishing_post where block_id = $id_pb ORDER BY `id` DESC");
						$result = mysqli_query($link, $query);
						while ($row = mysqli_fetch_assoc($result)) {
								$id_pp = $row["id"];
								$name_pp = $row["pub_name"];
								$descr_pp = $row["pub_description"];
								$image_pp = $row["pub_image"];
								$image_pf = $row["pub_file"];
								$hidden = $row['pub_hidden'];
								$block_name = $row['block_name'];

							// выводим данные

							if (strlen($descr_pp)>120) {
								$str = "..."; 
							} 
							else {
								$str = "";
							}
							$descr_cut = mb_substr(strip_tags($descr_pp), 0, 80, 'utf-8');


							if ($_SESSION['id'] == 1) {  #Для админа
								
								$edit = "<a href= /pages/biblioteka/p_edit_publisher_block.php?id=".$id_pb.">Редактировать</a>";
								$delete = "<a href= /pages/biblioteka/s_delete_publisher_block.php?id=".$id_pb.">Удалить блок</a>";
								
								if ($hidden == 0) {
									$no_error = 'блок открыт';
									$color = "color: green;";
									$border = "border: solid 1px green;";
								}
								if ($hidden == 1) {
									$no_error = 'блок скрыт';
									$color = "color: red;";
									$border = "border: solid 1px #E47F50;";
								}
							}
							if ($_SESSION['id'] == null or $_SESSION['id'] > 1) {
								

								if ($hidden == 0) {
									$color = "display: none";}
									else {
										continue(1);
									}
								}
								include 'templates.php';
							}
	} else {
		$query = "SELECT * FROM publishing_post WHERE pub_hidden = '0' ORDER BY `id` DESC LIMIT 6";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) {
            	$id_pp = $row["id"];
            	$name_pp = $row["pub_name"];
            	$descr_pp = $row["pub_description"];
            	$image_pp = $row["pub_image"];
            	$image_pf = $row["pub_file"];
            	$hidden = $row['pub_hidden'];
            	$block_name = $row['block_name'];

            		// выводим данные

            		if (strlen($descr_pp)>120) {
            			$str = "..."; 
            		} 
            		else {
            			$str = "";
            		}
            		$descr_cut = mb_substr(strip_tags($descr_pp), 0, 80, 'utf-8');


            		if ($_SESSION['id'] == 1) {  #Для админа
            			
            			$edit = "<a href= /pages/biblioteka/p_edit_publisher_block.php?id=".$id_pb.">Редактировать</a>";
            			$delete = "<a href= /pages/biblioteka/s_delete_publisher_block.php?id=".$id_pb.">Удалить блок</a>";
            			
            			if ($hidden == 0) {
            				$no_error = 'блок открыт';
            				$color = "color: green;";
            				$border = "border: solid 1px green;";
            			}
            			if ($hidden == 1) {
            				$no_error = 'блок скрыт';
            				$color = "color: red;";
            				$border = "border: solid 1px #E47F50;";
            			}
            		}
            		if ($_SESSION['id'] == null or $_SESSION['id'] > 1) {
            			

            			if ($hidden == 0) {
            				$color = "display: none";}
            				else {
            					continue(1);
            				}
            			}
            	include 'templates.php';
            }
					}
				}


?>