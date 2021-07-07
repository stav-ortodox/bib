<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


get_header_site ('Контакты', 'Контакты', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
// get_sm_menu (); 
new_menu ();?>

<main>

	<div class="col-sm-0 col-lg-2">
		<?php get_sidebar (); ?>
	</div>
	<section class="container">

		
		<div class="row">
			<div class="page_title rasporka"><h2>Контакты</h2></div>
			<div class="content w-100 m-auto">

				<h5 class="mb-5">III Ставропольское благочиние <br>
							Русская Православная Церковь, Ставропольская митрополия, Ставропольская епархия <br><br>
							Адрес:<br>
							Россия, Ставропольский край, г. Ставрополь, ул. Тухачевского, 17/7<br><br>
							Границы благочиния:<br>
							Приходы, расположенные на территории Промышленного района г. Ставрополя<br><br>
							Благочинный округа - Протоиерей Павел Михайлович Самойленко<br><br>
							Контактный телефон: +7 (8652) 73-98-80</h5>
				
					<div class="card w-100 m-auto">
						
					 	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A418f1c8197cd27aed6cc341da87442327fe9417620ddc71d71d980a3ea53d9ad&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
					
				</div> 

				<div class="page_title rasporka mt-5"><h2>Духовенство</h2></div>
				<div class="clergy mt-5 card">
				    <img style="width: 198px;" class="img-thumbnail" src="/images/clergy/i-100x150.png" alt="">
				    <h5 class="ml-3">
				        Настоятель храма св. Великомученика и Целителя Пантелеимона г. Ставрополя<br>
				        Митрофорный протоиерей Павел Михайлович Самойленко <br><br>
				        Секретарь Митрополита Ставропольского и Невинномысского по
				        г.Ставрополю, <br>
				        Благочинный III Ставропольского округа, 
				        <br>настоятель храмов:
				        Святого Великомученика и Целителя Пантелеимона и преподобного
				        Даниила Столпника г. Ставрополя, <br>
				        кандидат богословских наук,
				        Первый проректор и преподаватель Ставропольской Православной Духовной Семинарии, <br>
				        Председатель Ставленнической Комиссии Ставропольской и Невинномысской епархии, <br>
				        Войсковой священник ТВКО, Член краевого Комитета "Победа"
				    </h5>
				</div>
				<div class="clergy card">
				    <img style="width: 198px;" class="img-thumbnail" src="/images/clergy/i-100x150%20(1).png" alt="">
				    <h5 class="ml-3">
				        Второй священник<br>
				        Иерей Иоанн Александрович Шестаков<br><br>
				        выпускник СтДС 2006 г.<br>
				        клирик храма св. Великомученика и Целителя Пантелеимона г. Ставрополя <br>
				        с 7 июля 2015 г.<br>
				    </h5>
				</div>
				<div class="clergy card">
				    <img style="width: 198px;" class="img-thumbnail" src="/images/clergy/i-100x15044.png" alt="">
				    <h5 class="ml-3">
				        Третий священник<br>
				        Иерей Иоанн Николаевич Половин<br><br>
				        выпускник СтДС 2013 г.<br>
				        клирик храма св. Великомученика и Целителя Пантелеимона г. Ставрополя <br>
				        с 24 сентября 2012 г.
				    </h5>
				</div>
				<div class="clergy card">
				    <img style="width: 198px;" class="img-thumbnail" src="/images/clergy/i-100x150%20(2).png" alt="">
				    <h5 class="ml-3">
				        Четвёртый священник<br>
				        Иерей Игнатий (Станислав) Андреевич Переходченко<br><br>
				        выпускник СтДС 2016 г.<br>
				        клирик храма св. Великомученика и Целителя Пантелеимона г. Ставрополя <br>
				        с 1 мая 2018 г.
				    </h5>
				</div>
				<div class="clergy card">
				    <img style="width: 195px;" class="img-thumbnail" src="/images/clergy/i-200x300.png" alt="">
				    <h5 class="ml-3">
				        Диакон Павел Викторович Новосельцев<br><br>
				        студент СтДС<br>
				        клирик храма св. Великомученика и Целителя Пантелеимона г. Ставрополя <br>
				        с 19 февраля 2019 г.
				    </h5>
				</div>
				

				<a name="top"></a><?
						if (!empty($_SESSION['errors'])) {?>
							<div class="error">
								<p>НЕ УДАЛОСЬ ОТПРАВИТЬ ПИСЬМО!</p><hr>
								<ol><?
								foreach ($_SESSION['errors'] as $row) {?>
									<li>
										<?=$row;
										unset($_SESSION['errors']);
										unset($_SESSION['success']);?>
									</li>
									<br>
									<?}?> 
								</ol>
							</div>
							<?}
				    if (!empty($_SESSION['success'])) {?>
				      <div class="success">
				        <p>УСПЕХ!</p><hr>
				        <ul></ul>
				        <?foreach ($_SESSION['success'] as $row) {?>
									<li>
										<?=$row;
										unset($_SESSION['errors']);
										unset($_SESSION['success']);?>
									</li>
									<br>
									<?}?> 
								</ul>
				      </div>
				      <?}
				     

				       if (isset($_SESSION['login'])) { 
				          $name = $_SESSION['login']; 
				          $email = $_SESSION['email'];
				          $user_id = $_SESSION['id'];
				          $userreg = 1;
				                      
				      } else {
				          $name = "";
				          $email = "";
				          $user_id = null;
				          $userreg = 0;
				      } ?>


				<!--Form with header-->
				<div class="card mt-5">

				  <form action="<?=PATH?>scripts/s_contacts.php" method="POST">

				    <div class="card-body">
				      <!--Header-->
				      <div class="">
				      	
				        <h3><i class="fas fa-envelope p-2"></i> Напишите нам:</h3>
				        <p class="p-2">Свяжитесь с нами по интересующим Вас вопросам.</p>
				        <hr>
				      </div>

				      <!--Body-->
				      <div class="md-form">
				        <i class="fas fa-user prefix grey-text"></i>
				        <input type="text" id="form-name" name="form-name" class="form-control" value="<?= $name ?>" placeholder="Вы не вошли или не зарегистрированны!">
				        
				      </div>

				      <div class="md-form">
				        <i class="fas fa-envelope prefix grey-text"></i>
				        <input type="email" id="form-email" name="form-email" class="form-control" value="<?= $email ?>" placeholder="Вы не вошли или не зарегистрированны!">
				        
				      </div>

				      <div class="md-form">
				        <i class="fas fa-tag prefix grey-text"></i>
				        <input type="text" id="subject" name="subject" class="form-control" placeholder="Тема сообщения">
				        
				      </div>

				      <div class="md-form">
				        <i class="fas fa-pencil-alt prefix grey-text"></i>
				        <textarea type="text" id="form-text" name="form-text" class="form-control md-textarea" rows="3" placeholder="Ваше сообщение"></textarea>
				        
				      </div>

				      <div class="text-center mt-4">
				        <button class="btn btn-light-blue" name="form-submit">Отправить</button>
				      </div>
				      <input type="hidden" name="userreg" value="<?= $userreg ?>">
				      <input type="hidden" name="user_id" value="<?= $user_id ?>">

				    </div>

				  </form>

				</div>
				<!--Form with header-->

   
			</div>
		</div>
	</section>
</main>

<?php get_footer ();
?>
