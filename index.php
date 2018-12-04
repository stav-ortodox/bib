<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Главная', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();

get_sm_menu ();

?>
  


<div class="main-title-page"><h1>Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь</h1></div>


<!-- <main> -->
	<section class="container-fluid clearfix mt-5">
    <?php get_sidebar (); ?>
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



  <main>
    <section class="container">
      <div class="row" data-sticky-container="">
        <div class="medium-3 columns show-for-medium">
          <img src="http://placehold.it/250x250" class="float-left" alt="Sticky" data-sticky="" data-margin-top="20" style="position: fixed; width: 153px; left: 15px; top: 20px;">
        </div>
        <div class="small-12 medium-9 large-7 columns">
          <h1>Sticky-js</h1>
          <!-- <a href="https://github.com/rgalus/sticky-js" title="Sticky-js">https://github.com/rgalus/sticky-js</a> -->
          <h2>Sticky-js is a library for sticky elements written in vanilla javascript. With this library you can easily set sticky elements on your website. It's also responsive.</h2>
          <div class="gh-buttons">
            <span></span>
            <span></span>
          </div>
          <h3>Features</h3>
          <ul>
            <li>Written in vanilla javascript, no dependencies needed</li>
            <li>Lightweight (minified: ~6.08kb, gzipped: ~1.67kb)</li>
            <li>It can be sticky to the entire page or to selected parent container</li>
            <li>No additional CSS needed</li>
          </ul>
          <h3>Install</h3>
          <pre>npm install sticky-js</pre>
          <br>
          <pre>bower install sticky.js</pre>
          <h3>Usage</h3>
          <p><strong>Simply include</strong></p>
          <pre>&lt;script src="sticky.min.js"&gt;&lt;/script&gt;</pre>
          <p><strong>Then have element</strong></p>
          <pre>&lt;div class="selector"&gt;Sticky element&lt;/div&gt;</pre>
          <p><strong>Initialize with javascript</strong></p>
          <pre>var sticky = new Sticky('.selector');</pre>
          <p><strong>CommonJS</strong></p>
          <pre>var Sticky = require('sticky-js');<br><br>var sticky = new Sticky('.selector');</pre>
          <p><strong>Sticky to the nearest parent container with [data-sticky-container]</strong></p>
          <pre>&lt;div data-sticky-container&gt;<br>    &lt;div class="selector"&gt;Sticky element&lt;/div&gt;<br>&lt;/div&gt;</pre>
          <br>
          <p>List of options available <a href="https://github.com/rgalus/sticky-js#available-options" title="Sticky-js - Available options">here</a>.</p>
          <p><a href="https://github.com/rgalus/sticky-js#examples" title="Sticky-js - examples">Examples</a></p>
          <br>
          <p><a href="https://github.com/rgalus/sticky-js/blob/master/LICENSE" title="Sticky-js - License">MIT License</a></p>
        </div>
        <div class="large-2 columns show-for-large" style="padding-top: 10rem;">
          <img src="http://placehold.it/160x600" class="float-right" alt="Sticky" data-sticky="" data-margin-top="20" style="position: fixed; width: 0px; left: 0px; top: 20px;">
        </div>
      </div>
    </section>

    <section class="container">
      <div class="row column medium-text-center">
        <h3>Browser compatibility</h3>
        <p>Library is using ECMAScript 5 features. Full support available on <a href="http://caniuse.com/#search=ECMAScript%205" title="Can i use ECMAScript 5?">caniuse</a>.</p>
        <br>
        <ul class="no-bullet">
          <li>IE 9+</li>
          <li>Chrome 23+</li>
          <li>Firefox 21+</li>
          <li>Safari 6+</li>
          <li>Opera 15+</li>
        </ul>
        <p>If you need this library working with older browsers you should use ECMAScript 5 polyfill.</p>
      </div>
    </section>
  </main>

  <footer class="text-center">
    <p>Sticky-js</p>
    <p>Copyright © 2016 <a href="https://github.com/rgalus" title="Rafał Gałus">Rafał Gałus</a></p>
    <p><a href="https://github.com/rgalus/sticky-js" title="Sticky-js"><i class="fa fa-github fa-2x"></i></a></p>
  </footer>














<?php get_footer ();
?>














