<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';


get_header_site ('Главная', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
get_sm_menu ();
?>


<main>
  <section class="container-fluid">
    <div class="container">
      <div class="page_title"><h2>Последние издания</h2></div>
    </div>
    <div class="row">
      <div class="col-sm-0 col-lg-2">
       <?php get_sidebar (); ?>
      </div>

      

      <div class="col-sm-12 col-lg-10">
        <div class="content">
          <div class="row">

            <?php template_pp();?>

          </div>    
        </div>
      </div>
    </div>
  </section>
</main>





<?php get_footer ();
?>














