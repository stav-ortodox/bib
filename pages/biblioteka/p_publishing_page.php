<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Страница издания', 'Страница издания', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
// get_sm_menu ();	
get_sm_sidebar ();
views_update('publishing_blocks', $_GET["id"]);
page_title ('Страница издания: '.$row['path'].'');?>

<main>
	<div class="col-sm-0 col-lg-2">
		<?php get_sidebar (); ?>
	</div> <!-- /cайдбар -->
	<section class="container">
		<?
		if (!empty($_SESSION['errors'])) {?>
			<div class="error">
				<p>ЧТО_ТО ПОШЛО НЕ ТАК!</p><hr>
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
        <p>ИЗДАНИЕ УСПЕШНО ОТРЕДАКТИРОВАННО</p><hr>
      </div>
      <?}
      unset($_SESSION['success'])?>
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