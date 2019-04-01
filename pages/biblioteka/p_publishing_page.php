<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site ('Страница издания', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
get_sm_menu ();	
get_sm_sidebar ();
views_update('publishing_blocks', $_GET["id"]);
page_title ('Страница издания: '.$row['path'].'');?>

<main>
	<div class="col-sm-0 col-lg-2">
		<?php get_sidebar (); ?>
	</div> <!-- /cайдбар -->
	<section class="container">
		<?php echo bread() ?>
		<div class="row">

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
	</section>
</main>



<?php
get_footer ();
?>