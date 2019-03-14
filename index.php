<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Главная', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
get_sm_menu ();
?>

<div class="main-title-page"><h1>Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь</h1></div>

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
            
          <?php 
            $query = "SELECT * FROM publishing_post WHERE pub_hidden = '0' ORDER BY `id` DESC LIMIT 6";
            $res = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($res)) { ?>
    
              <div class="col-sm-4 pub-block">
                <div class='card pub-post'>
                  <div class='view overlay'>
                    <img class='img-fluid' src="<?=$row['pub_image']?>" alt=''>
                    <a href='/pages/biblioteka/p_publishing_page.php?id=<?=$row['id']?>'>
                      <div class='mask rgba-white-slight'></div>
                    </a>
                  </div>
                  <div class='card-body'>
                    <h4 class='card-title'><?=$row['pub_name']?></h4>
                    <p class='card-text'><?=$row['pub_description']?></p>
                    <a href='/pages/biblioteka/p_opened_post.php?id=<?=$row['id']?>' class='btn btn-primary'>Просмотр</a>
                  </div>
                </div>
              </div>
           <? } ?>
          
  
          </div>    
        </div>
      </div>
    </div>
  </section>
</main>





<?php get_footer ();
?>














