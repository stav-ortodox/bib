<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Главная', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();
get_sm_menu ();
?>



<div class="main-title-page"><h1>Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь</h1></div>





<main>
  <section class="container-fluid">
    <div class="row">
      <div class="col-sm-2">

        <div class="sidebar">
          <a href='/pages/p_login.php'><p>Войти</p></a>
          <a href='/pages/p_registration.php'><p>Зарегистрироваться</p></a>
          <a href='/scripts/s_logout.php'><p>Выйти</p></a> 
          <img src="images/341acbc6-a2da-467d-81b3-8ec7269ed109.jfif" class="img-fluid z-depth-2" alt="">    
          <b>Lorem ipsum dolor sit amet...</b><br><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto suscipit voluptate quos dolore amet magni vitae p_registrationatur voluptatibus. Provident ullam tenetur similique eveniet asperiores autem, velit fugit fuga voluptates sequi. <br> 
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium reiciendis minus quaerat veniam alias rem consequatur repellat dolore odio accusamus, nisi officiis, maxime enim, hic expedita. Dolorum quos nemo veritatis praesentium, impedit voluptatem possimus aut velit magni, dolorem vel architecto expedita! Aperiam nesciunt eum culpa illo ipsa nostrum consequatur amet voluptatum alias tenetur fugiat ad et commodi eius non ullam harum delectus officiis perspiciatis corrupti dignissimos nihil, dolorum ipsam sed! Modi dolores dolorum voluptate, sunt unde eum suscipit a ipsam quia porro et rem minima magni assumenda magnam fugit. Natus ipsa alias, numquam a voluptas laboriosam earum inventore totam autem.
        </div>
        
      </div>

      <div class="col-sm-10">
        <div class="content">
        <div class="row">


            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pub-block">
              <div class='card'>
                <div class='view overlay'>
                  <img class='card-img-top' src=/".$row["block_image"]." alt=''>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."'>
                    <div class='mask rgba-white-slight'></div>
                  </a>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row["block_name"]."</h4>
                  <p class='card-text'>".$descr_cut.$str."</p>
                  <a href='/pages/biblioteka/p_publishing_page.php?id=".$row["id"]."' class='btn btn-primary'>Просмотр</a>
                </div>
              </div>
            </div>

          </div>    
        </div>
      </div>
    </div>
  </section>
</main>





<?php get_footer ();
?>














