<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
get_header_site ('Библиотека', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
// get_sm_menu ();
get_sm_sidebar ();
page_title ('Админка');
?>

<main class="grey">
	<div class="col-sm-0 col-lg-2">
		<?php get_sidebar (); ?>
	</div> <!-- /cайдбар -->
	<section class="container">
		<div class="row">
			<div class="content">
				<div class="row">
					<div class="new_news mt-4">
						<p class="card text-center"><a href="#" class="">Новая новость</a></p>
							<div class="card mb-3">
								<form class="news_form" action="" method="post" multiple>

									<!-- инпут заголовка -->
									<div class="md-form m-0">
										<input id="form1" class="text-center form-control" type="text" placeholder="Введите заголовок">
									</div>

									<!-- инпут главного изображения -->
									<div class="form-group">
								    <label class="text-center" for="exampleFormControlFile1">Выберите главное изображение</label>
								    <input type="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
									<hr>

									<!-- текст новости -->
									<div class="form-group">
								    <label class="text-center" for="exampleFormControlTextarea1">Добавьте текст новости</label>
								    <textarea class="form-control m-0" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>

									<!-- категория -->
						      <label class="mr-sm-2 text-center" for="inlineFormCustomSelect">Выберите категорию для статьи</label>
						      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
						        <option selected>Выбор категории...</option>
						        <option value="1">Богослужение</option>
						        <option value="1">Настоятель</option>
						        <option value="2">Больничное служение</option>
						        <option value="3">Социальное служение</option>
						        <option value="4">Миссионерство</option>
						      </select>
	
									<!-- автор -->
						      <label class="mr-sm-2 text-center mt-3" for="inlineFormCustomSelect1">Выберите автора</label>
						      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect1">
						        <option selected>Выбор автора...</option>
						        <option value="1">м/прот. Павел Самойленко</option>
						        <option value="1">иерей Иоанн Шестаков</option>
						        <option value="2">иерей Иоанн Половин</option>
						        <option value="3">иерей Игнатий Переходченко</option>
						      </select>
									    




									<div class="d-flex justify-content-center"><img class="img-fluid w-50 h-100" src="<?=$row['block_image']?>" alt="">
									</div>
									<hr class="m-0">
									<p class="text-center m-0"></p>
									<hr>
									<p class="text-center m-0"></p>
									<hr>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>



<?php
get_footer ();
?>