<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
$id = $_GET['id'];

$query = ("SELECT pub_name, pub_file FROM publishing_post WHERE id=$id");
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$post_name = $row['pub_name'];
$post_file = $row['pub_file'];



get_header_site ($post_name, 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
// get_sidebar ();
page_title ($post_name);?>
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
			<div class="content m-auto">
				
				<iframe src="<?=PATH.$post_file?>" 
					style="width: 850px; height: 850px;" frameborder="0">Ваш браузер не поддерживает фреймы</iframe>
					
				</div>
			</div>
		</div>
	</section>
</main>


<?get_footer ();
?>