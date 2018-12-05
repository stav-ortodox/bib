<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Страница издания', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
get_sm_menu ();
get_sm_sidebar ();


$select_query = sprintf("SELECT publishing_post.*, publishing_blocks.id FROM	publishing_post, publishing_blocks WHERE publishing_post.block_id = publishing_blocks.id");

$id_page = $_REQUEST['id'];

$query_id_page = sprintf("SELECT block_name FROM	publishing_blocks WHERE id = $id_page");
$result = mysqli_query($link, $query_id_page) or die ("Ошибка " . mysqli_error($link));
while($object = mysqli_fetch_object($result))
	$name_page = $object->block_name;

page_title ('Страница издания: '.$name_page.'');
echo $row['block_description']. "Здесь описание блока издания, который сокращён в превью";?>

<main>
	<section class="container-fluid">
		<div class="row">

			<div class="col-sm-0 col-lg-2">
				<?php get_sidebar (); ?>
			</div> <!-- /cайдбар -->

			<div class="col-sm-12 col-lg-10">
				<div class="content">
					<div class="row">

				<?php $result = mysqli_query($link, $select_query);
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
									<div class='col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center'>
									<div class='card pub-block'>
									<div class='no_error' style='".$color." ".$border."'><strong>".$no_error."</strong><br>".$edit."<br>".$delete."</div>
									<div class='view overlay'>

									<img class='card-img-top m-0 p-0' src=/".$row["pub_image"]." alt=''>
									<img class='card-img-top m-0 p-0' src=/".$row["pub_file"]." alt=''>

									<a href='/pages/biblioteka/p_opened_post.php?id=".$row["0"]."'>
									<div class='mask rgba-white-slight'></div>
									</a>
									</div>
									<div class='card-body'>
									<table class='pub-block-wrap' style='height: 150px;'>
								  <tbody>
								    <tr>
								      <td class='align-top'><h4 class='card-title'>".$row["pub_name"]."<hr></h4></td>
								    </tr> 
								    <tr>
								      <td class='align-bottom'><a href='/pages/biblioteka/p_opened_post.php?id=".$row["0"]."'><p class='card-text align-text-bottom'>".$row["pub_description"]."</p></a>
								      </td>
								    </tr>
								  </tbody>
									</table>
									</div>
									</div>
									</div>";}}?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>



<?php
get_footer ();
?>