<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site ('Главная', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
get_menu ();

page_title ('Наши издания');
?>


<main class="mt-5 pt-5">
	<div class='container-fluid'>
		<section class="wow fadeIn">
			<div class="row"> <!-- строка контент-сайдбар -->
				<div class='col-10'>
					<div class='row text-left'>
						<div class='col-lg-4 col-md-12 mb-5'>
		   				<div class="prew-img-block view owerlay rounded z-depth-1-half mb-4"> <!-- строка с блоком издания -->
		   					<h4 class='mb-3 text-center'>
		   						".$row["block_name"]."
		   					</h4>
		   					<img src="http://suvenirzavod.ru/upload/iblock/24c/24c4400392f0583a704f1d3dfb6b2bbc.jpg" alt="" class="img-fluid">
		   					<a href="#">

		   					</a>
		   					<p class="text-center p-2">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.
		   						О вершину инициал рукопись домах! Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.
		   					Там над продолжил по всей злых переписали безопасную пояс, сих сбить рыбными свою коварных всеми алфавит, повстречался большой имеет, он залетают.</p>
		   				</div> <!-- view owerlay rounded z-depth-1-half mb-3 -->
		   			</div> <!-- col-lg-6 col-md-12 -->
					</div> <!-- row text-left -->
				</div> <!-- col-10 -->

				<div class="col-2">
					<div class="sidebar">
						<h3>Панель администратора</h3>
						<hr>
						<ul>
							<li><a href="/pages/admins/p_admin_add_new_publishing_block.php">Добавить новый блок издания</a></li><br>
							<li><a href="/pages/admins/p_admin_add_new_publishing_post.php">Добавить новую единицу издания</a></li>
						</ul>
					</div> <!-- sidebar -->
				</div>  <!-- col-2 -->
			</div> <!-- строка контент-сайдбар -->
		</section>
	</div><!-- container-fluid -->
</main>





<footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">
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
