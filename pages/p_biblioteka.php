<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site ('Библиотека', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
// get_sidebar ();
page_title ('Издательство нашего храма');?>

<main class="mt-5 pt-5">
	<div class="container">
		<section class="wow fadeIn">
			<div class="row">
				<div class="col-10">
					<div class="row text-left">
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
														if(strlen($row["block_description"])>"120") $str = "...<br><a href=........Ссылка......=".$news['id'].">подробнее</a></p>"; else $str = "";
														$descr_cut = mb_substr(strip_tags($row["block_description"]), 0, 120, 'utf-8');
														// Если новость длинная, то выводим троеточие...
														
														      
																		if ($hidden == 0) {
																			$color = "display: none";}
																		else {
																		 continue(1);
																		}
																	} echo "						
						<div class='col-lg-6 col-md-12 mb-5'>
							<div class='no_error' style='".$color." ".$border."'><strong>".$no_error."</strong><br>".$edit."<br>".$delete."</div>
							<div class='prew-img-block view owerlay rounded z-depth-1-half mb-4'>
								<h4 class='text-center'>
									".$row["block_name"]."
								</h4>
								<a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
									<img class='img-fluid' src=/".$row["block_image"]." alt=''>
								</a>
								<p class='text-center p-2'>".$descr_cut.$str."</p>
							</div>
						</div>";}?>
					</div> <!-- row text-left -->
				</div> <!-- col-10 -->
									<?php
								if ($_SESSION['id'] == 1)
								echo	'
				<div class="col-2">
					<div class="sidebar">
						<h3>Панель администратора</h3>
						<hr>
						<ul>
							<li><a href="/pages/admins/p_admin_add_new_publishing_block.php">Добавить новый блок издания</a></li><br>
							<li><a href="/pages/admins/p_admin_add_new_publishing_post.php">Добавить новое издание в существующий блок издания</a></li>
						</ul>
					</div>
				</div>';?>
			</div> <!-- row строка контент-сайдбар -->
		</section>
	</div><!-- container-fluid -->
</main>


<?php



 

get_footer ();
?>
