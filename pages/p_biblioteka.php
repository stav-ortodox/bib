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
		<?
		if (!empty($_SESSION['errors'])) {?>
			<div class="error">
				<p>НЕ УДАЛОСЬ СФОРМИРОВАТЬ СТАТЬЮ!</p><hr>
				<ol><?
				foreach ($_SESSION['errors'] as $row) {?>
					<li>
						<?=$row;
						unset($_SESSION['errors']);
						unset($_SESSION['success']);?>
					</li>
					<br>
					<?}?> 
				</ol>
			</div>
			<?}
    if (!empty($_SESSION['success'])) {?>
      <div class="success">
        <p>Издание успешно отредактированно</p><hr>
      </div>
      <?}
      unset($_SESSION['success'])?>
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
