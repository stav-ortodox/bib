<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Главная', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
// get_menu ();
// get_sidebar ();
?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    

  <script type="text/javascript">
    jQuery(document).ready(function($) {
    $('.icon-menu').click(function(event) {
    $('.sidebar').toggleClass('active')
    });
    });
  </script>
<!-- меню -->
<!-- Navbar -->


<div class="wrap justify-content-center">
  <div class="btn-group " role="group" aria-label="Basic example">
    <button type="button" class="btn btn-cyan">Главная</button>
    <button type="button" class="btn btn-cyan">Библиотека</button>
    <button type="button" class="btn btn-cyan">Новости</button>
    <button type="button" class="btn btn-cyan">О храме</button>
    <button type="button" class="btn btn-cyan">Профиль</button>
    <button type="button" class="btn btn-cyan" onclick=location.href="http://localhost:3000/test/">Администратор</button>
  </div>
</div>


  <header class="container clearfix">
    <div class="icon-menu">
      <span class="divide"></span>
      <span class="divide"></span>
      <span class="divide"></span>
    </div>
  </header>


<div class="main-title-page"><h1>Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь</h1></div>


<!-- <main> -->
	<section class="container-fluid clearfix mt-5">
    <div class="sidebar">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsum explicabo, adipisci ratione ea ipsa officia voluptatum animi, distinctio iusto saepe illo quaerat, mollitia accusamus rerum iure molestiae odit veniam vel sequi dolor quas iste similique! Ex commodi quam magni neque adipisci! Aliquid adipisci rem reiciendis ullam minima enim maiores nostrum doloribus praesentium esse nisi dicta aspernatur quisquam sint, reprehenderit expedita minus recusandae quam possimus, accusantium eveniet itaque iste beatae totam voluptate. Blanditiis dicta fugiat earum molestiae, odit qui porro laboriosam, dolores quisquam reprehenderit, reiciendis ratione accusamus similique nemo quae illum repudiandae iure atque autem laborum! Cum nobis, quam optio.
    </div> 
              
    <div class="content">
      <div class="row col-12">

        <!-- Card deck -->
        <div class="card-deck">

          <!-- Card -->
          <div class="card mb-4">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Card title</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <button type="button" class="btn btn-light-blue btn-md">Read more</button>

            </div>

          </div>
          <!-- Card -->

          <!-- Card -->
          <div class="card mb-4">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Card title</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <button type="button" class="btn btn-light-blue btn-md">Read more</button>

            </div>

          </div>
          <!-- Card -->

          <!-- Card -->
          <div class="card mb-4">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Card title</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <button type="button" class="btn btn-light-blue btn-md" onclick=location.href="/test/">Read more</button>

            </div>
          </div>
          <!-- Card -->
        </div>
        <!-- Card deck -->
        

        









       
      </div>
    </div> 
  </section>
<!-- </main> -->












<?php get_footer ();
?>














