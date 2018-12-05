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
page_title ('Издания нашего храма');
?>

<main>
	<section class="container-fluid">
		<div class="row">

			<div class="col-sm-2">
				<?php get_sidebar (); ?>
			</div> <!-- /cайдбар -->

			<div class="col-sm-10">
				<div class="content">
					<div class="row">

				<?php $select_query = sprintf("SELECT * FROM publishing_blocks");
				$result = mysqli_query($link, $select_query);
				while ($row = mysqli_fetch_array($result)) {
								 // выводим данные
					if(strlen($row["block_description"])>"120") $str = "...<a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'> подробнее <i class='fa fa-level-down' aria-hidden='true'></i></i></a>"; else $str = "";
						$descr_cut = mb_substr(strip_tags($row["block_description"]), 0, 120, 'utf-8');

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
						
					// Если новость длинная, то выводим троеточие...

						if ($hidden == 0) {
							$color = "display: none";}
							else {
								continue(1);
							}
						} 
						echo "
						<div class='col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center'>
						<div class='card pub-block'>
						<div class='no_error' style='".$color." ".$border."'><strong>".$no_error."</strong><br>".$edit."<br>".$delete."</div>
						<div class='view overlay'>
						<img class='card-img-top m-0 p-0' src=/".$row["block_image"]." alt=''>
						<a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
						<div class='mask rgba-white-slight'></div>
						</a>
						</div>
						<div class='card-body'>
						<h4 class='card-title'>".$row["block_name"]."</h4>
						<p class='card-text'>".$descr_cut.$str."</p>
						</div>
						</div>
						</div>";}?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>



<?php
get_footer ();
?>
