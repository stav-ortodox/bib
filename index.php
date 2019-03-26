<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site ('Главная', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
 // get_menu ();
// get_sm_menu ();
    new_menu ();
    

?>
<main>
      <div class="col-sm-0 col-lg-2">
       <?php get_sidebar (); ?>
      </div>
  <section class="container">
    <div>
      <div class="page_title"><h2>Что нового?</h2></div>
    </div>
    
    <div class="row">
     
        <div class="content">
          <div class="row">

            <?php template_pp();?>

          </div>    
        </div>
      
    </div>
  </section>
</main>





<?php get_footer ();
?>














