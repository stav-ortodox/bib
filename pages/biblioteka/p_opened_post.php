<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_biblioteka_functions.php';

get_header_site ('$post_name', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
// get_sidebar ();
page_title ('$post_name');

echo "<div class='text-center'><h1>Здесь нужно сделать автоматический просмотр файла pdf</h1></div>";
echo $post_name;?>
<main>
	<div class="col-sm-0 col-lg-2">
		<?php get_sidebar (); ?>
	</div> <!-- /cайдбар -->
	<section class="container content">
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


<?get_footer ();
?>