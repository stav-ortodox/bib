<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Библиотека', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
// get_sm_menu ();
get_sm_sidebar ();
page_title ('Издания нашего храма');?>

<main>
	<div class="col-sm-0 col-lg-2">
				<?php get_sidebar (); ?>
			</div> <!-- /cайдбар -->
	<section class="container">
		<?php echo bread (); ?>
		<div class="row">

				<div class="content">
					<div class="row">
						<?php taplate_pb ();?>
					</div>
				</div>
		</div>
	</section>
</main>



<?php
get_footer ();
?>
