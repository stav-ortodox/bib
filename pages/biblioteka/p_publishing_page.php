<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Страница издания', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
// get_sidebar ();



$select_query = sprintf("SELECT publishing_post.*, publishing_blocks.id FROM	publishing_post, publishing_blocks WHERE publishing_post.block_id = publishing_blocks.id");


$id_page = $_REQUEST['id'];

$query_id_page = sprintf("SELECT block_name FROM	publishing_blocks WHERE id = $id_page");
$result = mysqli_query($link, $query_id_page) or die ("Ошибка " . mysqli_error($link));
while($object = mysqli_fetch_object($result))
	$name_page = $object->block_name;



page_title ('Страница издания: '.$name_page.'');

echo "
<div class='container-fluid'>
<div class='row'> 
<div class='col-10'> ";

$result = mysqli_query($link, $select_query);
while ($row = mysqli_fetch_array($result)) {
 // выводим данные

			if ($_SESSION['id'] == 1) {  #Для админа

				$hidden = $row['pub_hidden'];
				$edit = "<a href= /pages/admins/p_edit_publisher_post.php?id=".$row["0"].">Редактировать</a>";
				$delete = "<a href= /pages/admins/s_delete_publisher_post.php?id=".$row["0"].">Удалить единицу</a>";

				if ($hidden == 0) {
					$no_error = 'файл открыт';
					$color = "color: green";
				}

				if ($hidden == 1) {
					$no_error = 'файл скрыт';
					$color = "color: red";
				}
			}

			if ($_SESSION['id'] == null or $_SESSION['id'] > 1) {

				$hidden = $row['pub_hidden'];


				if ($hidden == 0) {
					$color = "display: none";
				}

				else {
					continue(1);
				}
			}


			if ($_GET['id'] == $row["block_id"]) {
				


				echo"
				<section class='wow fadeIn'>
					<div class='row'>
						<div class='col-lg-6 col-md-12'>
							<div class='no_error' style='".$color."'>".$no_error."<br>".$edit."<br>".$delete."</div>
							<div class='prew-block'>


								<a href='/pages/biblioteka/p_opened_post.php?id=".$row["0"]."'>
									<h4>".$row["pub_name"]."</h4>
									<hr>
									<img src=/".$row["pub_image"]." alt=''>
									<img src=/".$row["pub_file"]." alt=''>
									<h5>".$row["pub_description"]."</h5>
								</a>	
							</div> 
						</div>
					</div>";
			}
		}

		echo "
		</div>
		";



		if ($_SESSION['id'] == 1)
			echo	'
		<div class="col-2"> 
		<div class="sidebar">
		<h3>Панель администратора</h3>
		<hr>
		<ul>
		<li><a href="/pages/admins/p_admin_add_new_publishing_block.php">Добавить новый блок издания</a></li><br>
		<li><a href="/pages/admins/p_admin_add_new_publishing_post.php">Добавить новую единицу издания</a></li>
		</ul>
		</div>
		</div>';		

		?>


	</div> <!-- строка контент-сайдбар -->
</div><!-- container-fluid -->

<?php

get_footer ();
?>