<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';



get_header_site ('Библиотека', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
get_sm_menu ();
get_sm_sidebar ();
page_title ('Издания нашего храма');
?>

<main>
	<section class="container-fluid">
		<div class="row">

			<div class="col-sm-0 col-lg-2">
				<?php get_sidebar (); ?>
			</div> <!-- /cайдбар -->

			<div class="col-sm-12 col-lg-10">
				<div class="content">
					<div class="row">

				<?php 
				// функция выводит блоки издания
					taplate_pb ();
				?>
				
					</div>
				</div>
			</div>
		</div>
	</section>
</main>



<?php
get_footer ();
?>
