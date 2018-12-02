<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php'; ?>
<?php	
get_header_site ('Библиотека', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<main class="mt-5 pt-5">
		<div class="container-fluid clearfix mt-5">
			<!-- <section class="wow fadeIn"> -->
				<div class="row">
					<div class="col-10">
						<div class="row">

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
							</div>
						

					
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
							</div>
						

						
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
							</div>

						</div> <!-- row text-left -->
					</div> <!-- col-10 -->

					<div class="col-2">
						<div class="sidebar">
							<h3>Панель администратора</h3>
							<hr>
							<ul>
								<li><a href="/pages/admins/p_admin_add_new_publishing_block.php">Добавить новый блок издания</a></li><br>
								<li><a href="/pages/admins/p_admin_add_new_publishing_post.php">Добавить новое издание в существующий блок издания</a></li>
							</ul>
						</div>
					</div>
				</div> <!-- row строка контент-сайдбар -->
			<!-- </section> -->
		</div><!-- container-fluid -->
	</main>



</body>
</html>