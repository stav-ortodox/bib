<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site ('Главная', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_sm_menu (); 
new_menu ();?>

<main>
      <div class="col-sm-0 col-lg-2">
       <?php get_sidebar (); ?>
      </div>
  <section class="container">
    <!-- блок что нового? -->
    <div>
      <div class="page_title"><h2>Последние публикации</h2></div>
    </div>
    <div class="row">
        <div class="content">
          <div class="row">
            <?php template_pp();?>
          </div>    
        </div>
    </div>
      
    <div>
      <div class="page_title"><h2>Жизнь прихода (последнее)</h2></div>
    </div>
    <div class="row">
        <div class="content">
          <div class="row">
            <?php news();?>
          </div>    
        </div>
    </div>
  </section>
</main>





<?php get_footer ();
?>














