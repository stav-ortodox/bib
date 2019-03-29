<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
get_header_site ('Библиотека', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
// get_sm_menu ();
get_sm_sidebar ();
page_title ('Админка');
?>

<main class="grey">
	<div class="col-sm-0 col-lg-2">
		<?php get_sidebar (); ?>
	</div> <!-- /cайдбар -->
	<section class="container">
		<?php echo bread (); ?>
		<div class="row">

			<div class="content">
				<div class="row">

					<?php 
					$query = ("SELECT * FROM publishing_blocks");
					$result = mysqli_query($link, $query);?>
					<div class="f-d-col admin_blocks mt-4">
						<p class="card text-center"><a href="#" class="">Блоки изданий</a></p><?

						foreach ($result as $row) {?>
							<div class="card mb-3">
								<h3 class="text-center"><?=$row['block_name']?></h4>
								<hr class="m-0">
								<div class="d-flex justify-content-center"><img class="img-fluid w-50 h-100" src="<?=$row['block_image']?>" alt="">
								</div>
								<hr class="m-0">
								<p class="text-center m-0"><?=$row['block_description']?></p>
								<hr>
								<p class="text-center m-0"><?=$row['block_path']?></p>
								<hr>
								<?php 
								if ($row['block_hidden'] == 0) {
									echo '<p class="text-center text-success m-0">Блок открыт</p>';
								} else {
									echo '<p class="text-center text-danger m-0">Блок скрыт</p>';
								}?>
								<!-- кнопка  -->
								<hr>

								<!-- Small split button group -->
							<div class="d-flex">
								<div class="btn-group d-">
								  <button type="button" class="btn btn-danger btn-sm">Операции</button>
								  <button type="button" class="btn btn-danger btn-sm dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
								    <span class="sr-only">Toggle Dropdown</span>
								  </button>
								  <div class="dropdown-menu">
								    <a class="dropdown-item" href="#">Редактировать</a>
								    <a class="dropdown-item" href="#">Удалить</a>
								    <div class="dropdown-divider"></div>
								    <a class="dropdown-item" href="#">Открыть</a>
								  </div>
								</div>


								<div class="btn-group dropright ml-auto">
								  <button type="button" class="btn btn-primary">Выбрать номер</button>
								  <button type="button" class="btn btn-primary dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
								    <span class="sr-only">Toggle Dropdown</span>
								  </button>
								  <div class="dropdown-menu">

										<?php 
										$id = $row['id'];
										$query = ("SELECT * FROM publishing_post where block_id = '$id'");
										$result = mysqli_query($link, $query);
										foreach ($result as $row) {?>
											<a class="dropdown-item" href="<?=PATH?>pages/admins/p_edit_publisher_post.php?id=<?=$row['id']?>"><?=$row['pub_name']?></a>
										<?}?>
								    
								  </div>
								</div>
							</div>
						</div>
							<?}?>
					</div>

					<!-- <?php 
					$query = ("SELECT * FROM publishing_post");
					$result = mysqli_query($link, $query);?>
					<div class="f-d-col admin_blocks mt-4">
						<p class="card text-center"><a href="#" class="">Блоки единиц изданий</a></p><?

						foreach ($result as $row) {?>
							<div class="card mb-3">
								<p class="text-center m-0"><?=$row['block_name']?></p>
								<p class="text-center m-0"><?=$row['pub_name']?></p>
								<hr class="m-0">
								<div class="d-flex justify-content-center"><img class="img-fluid w-50 h-100" src="<?=$row['pub_image']?>" alt="">
								</div>
								<hr class="m-0">
								<p class="text-center m-0"><?=$row['pub_description']?></p>
								<hr>
								<p class="text-center m-0"><?=$row['pub_file']?></p>
								<hr>
								<?php 
								if ($row['block_hidden'] == 0) {
									echo '<p class="text-center text-success m-0">Блок открыт</p>';
								} else {
									echo '<p class="text-center text-danger m-0">Блок скрыт</p>';
								}
								?>
								
							</div>
							<?}?>
					</div> -->


				</div>
			</div>

		</div>
	</section>
</main>



<?php
get_footer ();
?>