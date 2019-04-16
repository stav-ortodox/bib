<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site ('Категории', 'Категории', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();?>
<main>
  <div class="col-sm-0 col-lg-2">
    <?php get_sidebar (); ?>
  </div>
  <section class="container">

    <!-- Категория -->
    <div>
      <div class="page_title"><h2>Категория: <?=$taxonomy?></h2></div>
    </div>
    <div class="row">
      <div class="container content m-auto">
        <?php echo bread() ?>
        <div class="row pt-4">
          <?news();?>
        </div>    
      </div>
    </div>
  </section>
</main>

<?get_footer ();
?>