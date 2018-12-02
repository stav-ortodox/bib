<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Библиотека', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
?>


<?php
get_menu ();
get_sm_menu ();
page_title ('Издательство нашего храма');?>


<section class="container-fluid clearfix mt-5">
	<div class="sidebar">
		<?php 
		if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
			echo 
			"<a href='/pages/p_login.php'><p>Войти</p></a>
			<a href='/pages/p_registration.php'><p>Зарегистрироваться</p></a>";		
		} else {
			echo
			"Здравствуйте, <b>".$_SESSION['login']."</b>
			<a href='/scripts/s_logout.php'><p>Выйти</p></a>";			
		}
		?>

		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto suscipit voluptate quos dolore amet magni vitae p_registrationatur voluptatibus. Provident ullam tenetur similique eveniet asperiores autem, velit fugit fuga voluptates sequi.	
	</div>

	<div class="content">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<?php $select_query = sprintf("SELECT * FROM publishing_blocks");
					$result = mysqli_query($link, $select_query);
					while ($row = mysqli_fetch_array($result)) {
									 // выводим данные
						if ($_SESSION['id'] == 1) {  #Для админа
							$hidden = $row['block_hidden'];
							$edit = "<a href= /pages/biblioteka/p_edit_publisher_block.php?id=".$row["id"].">Редактировать</a>";
							$delete = "<a href= /pages/biblioteka/s_delete_publisher_block.php?id=".$row["id"].">Удалить блок</a>";
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
							$hidden = $row['block_hidden'];
							if(strlen($row["block_description"])>"120") $str = "...<br><a href=........Ссылка......=''>подробнее</a>"; else $str = "";
							$descr_cut = mb_substr(strip_tags($row["block_description"]), 0, 120, 'utf-8');
						// Если новость длинная, то выводим троеточие...

							if ($hidden == 0) {
								$color = "display: none";}
								else {
									continue(1);
								}
							} 
					echo "
					<div class='card mb-4 col-xl-4 col-sm-6 col-md-8 p-5 m-5'>
					<div class='view overlay'>
						<img class='card-img-top' src=/".$row["block_image"]." alt=''>
						<a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
						<div class='mask rgba-white-slight'></div>
						</a>
					</div>
					<div class='card-body'>
					<h4 class='card-title'>".$row["block_name"]."</h4>
					<p class='card-text'>".$descr_cut.$str."</p>
					<a href='#' class='btn btn-primary'>Button</a>
					</div>
					</div>";}?>
				</div>
			</div>
		</div>
	</div>
</section>





<?php
get_footer ();
?>
