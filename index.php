<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site ('Главная', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();


?>

					

<link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
           
        





          <div class="container-fluid fixed-top bg-primary py-3">
              <div class="row collapse show no-gutters d-flex h-100 position-relative">
                  <div class="col-3 px-0 w-sidebar navbar-collapse collapse d-none d-md-flex">
                      <!-- spacer col -->
                  </div>
                  <div class="col px-3 px-md-0">
                      <!-- toggler -->
                      <a data-toggle="collapse" href="#" data-target=".collapse" role="button" class="text-white p-1">
                          <i class="fa fa-bars fa-lg"></i>
                      </a>
                  </div>
              </div>
          </div>
          <div class="container-fluid px-0">
              <div class="row collapse show no-gutters d-flex h-100 position-relative">
                  <div class="col-3 p-0 h-100 w-sidebar navbar-collapse collapse d-none d-md-flex sidebar">
                      <!-- fixed sidebar -->
                      <div class="navbar-dark bg-dark text-white position-fixed h-100 align-self-start w-sidebar">
                          <h6 class="px-3 pt-3">Fixed Menu <a data-toggle="collapse" class="px-1 d-inline d-md-none text-white" href="#" data-target=".collapse"><i class="fa fa-bars"></i></a></h6>
                          <ul class="nav flex-column flex-nowrap text-truncate">
                              <li class="nav-item">
                                  <a class="nav-link active" href="#">Active</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  


                  <div class="spacer"></div>

                  <!-- header -->
                  <div class="ui container pad-top-30 pad-bottom-30">
                  	<div class="center aligned segment">
                  		<div class="ui horizontal divider">Monthly Specials</div>
                  	</div>	
                  </div>

                  <div class="spacer"></div>

                  <!-- cards -->
                  <div class="ui container">
                  	<div class="ui four column grid">
                  		<div class="row">
                  			<div class="column">				
                  				<div class="ui card">					
                  					<div class="image">
                  						<a class="ui red right ribbon label">-50%</a>
                  						<img src="https://mrpg.scene7.com/is/image/MRP/01_1104170929_SI_11?wid=360&hei=540&qlt=80" />
                  					</div>
                  					<div class="content">						
                  						<a class="header">Denim Dress</a>
                  						<div class="description">
                  							Nec vestibulum eget augue sit vel varius, lacus sem.
                  						</div>
                  					</div>
                  					<div class="extra content">
                  						<a class="ui teal tag label">R500</a>							
                  					</div>
                  				</div>
                  			</div>
                  			<div class="column">
                  				<div class="ui card">
                  					<div class="image">
                  						<a class="ui red right ribbon label">-50%</a>
                  						<img src="https://mrpg.scene7.com/is/image/MRP/01_1100211387_SI_11?wid=360&hei=540&qlt=80" />
                  					</div>
                  					<div class="content">
                  						<a class="header">Patterned Tunic</a>
                  						<div class="description">
                  							Nec vestibulum eget augue sit vel varius, lacus sem.
                  						</div>
                  					</div>
                  					<div class="extra content">
                  						<a class="ui teal tag label">R460</a>	
                  					</div>
                  				</div>
                  			</div>
                  			<div class="column">
                  				<div class="ui card">
                  					<div class="image">
                  						<a class="ui red right ribbon label">-50%</a>
                  						<img src="https://mrpg.scene7.com/is/image/MRP/01_1110210428_SI_11?wid=360&hei=540&qlt=80" />
                  					</div>
                  					<div class="content">
                  						<a class="header">Yellow Floral Dress</a>
                  						<div class="description">
                  							Nec vestibulum eget augue sit vel varius, lacus sem.
                  						</div>
                  					</div>
                  					<div class="extra content">
                  						<a class="ui teal tag label">R780</a>	
                  					</div>
                  				</div>
                  			</div>
                  			<div class="column">
                  				<div class="ui card">
                  					<div class="image">
                  						<a class="ui red right ribbon label">-50%</a>
                  						<img src="https://mrpg.scene7.com/is/image/MRP/01_1150210826_SI_11?wid=360&hei=540&qlt=80" />
                  					</div>
                  					<div class="content">
                  						<a class="header">Maroon Bodycon Dress</a>
                  						<div class="description">
                  							Nec vestibulum eget augue sit vel varius, lacus sem.
                  						</div>
                  					</div>
                  					<div class="extra content">
                  						<a class="ui teal tag label">R300</a>	
                  					</div>
                  				</div>
                  			</div>
                  		</div>	
                  	</div>
                  </div>

                  <div class="spacer"></div>



                      
                  </div>
              </div>
          








<!-- <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">
	<div class="pt-4">
		<a href="#" class="btn btn-outline-white">
			Bootstrap <i class="fa fa-download"></i>
		</a>
		<a href="#" class="btn btn-outline-white">
			Обучение вёрстке <i class="fa fa-graduation-cap"></i>
		</a>
	</div>

	<hr class="my-4">

	<div class="pb-4">
		<a href="#"><i class="fa fa-instagram mr-3"></i></a>
		<a href="#"><i class="fa fa-vk mr-3"></i></a>
		<a href="#"><i class="fa fa-facebook mr-3"></i></a>
	</div>
	<div class="footer-copyright py-3">
		Священник нашего времени
	</div>
</footer>
 -->
</body>
</html>

















<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
