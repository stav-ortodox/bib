<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site ('Страница издания', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
get_sm_menu ();
get_sm_sidebar ();

page_title ('Страница издания: '.$name_page.'');

?>

<main>
	<section class="container-fluid">
		<div class="row">

			<div class="col-sm-0 col-lg-2">
				<?php get_sidebar (); ?>
			</div> <!-- /cайдбар -->

			<div class="col-sm-12 col-lg-10">
				<div class="page-header">
				  <h1><small><?php echo $block_description; ?></small></h1>
				</div>
				<div class="content">
					<div class="row">
						<!-- вызов функции выводы шаблона единицы издания -->
						<?php template_pp () ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>



<?php
get_footer ();
?>