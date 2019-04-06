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

<main>
	<div class="col-sm-0 col-lg-2">
		<?php get_sidebar (); ?>
	</div> <!-- /cайдбар -->
	<section class="container">
		<div class="row">
			<div class="content m-auto w-90">
				
					<?php 
					if (!empty($_SESSION['errors'])) {?>
						<div class="error">
							<p>НЕ УДАЛОСЬ СФОРМИРОВАТЬ СТАТЬЮ!</p><hr>
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
						<?} elseif (!empty($_SESSION['success'])) {?>
							<div class="success">
								<p>ГОТОВО!</p><hr>
								<ul><?
							foreach ($_SESSION['success'] as $row) {?>
									<li>
										<?=$row;
										unset($_SESSION['success']);?>
									</li>
									<br>
								<?}?>
						</ul>
					</div>
				<?}?>
					
				<div class="row">
					<div class="new_news mt-4">
						<p class="card text-center grey"><a href="#" class="">НОВАЯ СТАТЬЯ</a></p>
							<div class="card mb-3 grey">

								<script>
									function removeDone(el) {
										var el1 = document.getElementById("form-preloader");
										el1.classList.remove("done"); // удалить класс «class-name»
										var el2 = document.getElementById("text-preloader");
										el2.classList.remove("done1");
									}
								</script>

								<div class="preloader done" id="form-preloader">
									<div class="loader"></div>
								</div>
								<div class="text-preloader done1 animated pulse infinite" id="text-preloader">
									<h5>Подождите, фотографии загружаются и обрабатываются...</h5>
								</div>
								
								 
								<!-- начало формы -->
								<form class="news_form m-auto" action="action_new_news.php?processed=1" method="post" multipart="" enctype="multipart/form-data">

								
									<!-- инпут заголовка -->
									<div class="md-form">
										<input id="form1" name="title" class="text-center form-control" type="text" placeholder="Введите заголовок" value="<?=$_SESSION['title']?>">
									</div>

									<!-- инпут главного изображения -->
									<label class="text-center pointer view" for="exampleFormControlFile1">
										<div class="d-flex justify-content-center">
											<img class="img-fluid w-25 h-25" src="/images/341acbc6-a2da-467d-81b3-8ec7269ed109.jfif" alt="">
										</div>
									<div class="mask flex-center rgba-stylish-strong">
									   <p class="white-text">Выберите главное изображение</p>
									</div>
									</label>
								    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
									<hr>

									<!-- текст новости -->
									<div class="form-group">
								    <label class="text-center" for="exampleFormControlTextarea1">Добавьте текст новости</label>
								    <textarea class="form-control m-0" id="exampleFormControlTextarea1" name="text" rows="3"><?=$_SESSION['text']?></textarea>
									</div>

									<!-- категория -->
									<label class="mr-sm-2 text-center" for="inlineFormCustomSelect">Выберите категорию для статьи</label>
									<div class="d-flex flex-row justify-content-center">
										<div>
											<select class="custom-select" id="inlineFormCustomSelect" name="taxonomy">
												<?php  
												$query = ("SELECT DISTINCT taxonomy FROM news");
												$result = mysqli_query($link, $query);
												$row = mysqli_fetch_assoc($result);
												foreach ($result as $row) { 
													$taxonomy = $row['taxonomy']?>
													<option><?=$taxonomy?></option>
													<?}?>
													<option selected><?=$_SESSION['taxonomy']?></option>
												</select>
											</div>
											<div>
											<input class="form-control" id="val" placeholder="Введите свой вариант">
											<button class="btn btn-success m-0 p-0 pr-1 pl-1" id="but" type="button" onclick="insertValue();">Добавить!</button>
											</div>
											<script>
												function insertValue() {
													var select = document.getElementById("inlineFormCustomSelect"),
													txtVal = document.getElementById("val").value,
													newOption = document.createElement("OPTION"),
													newOptionVal = document.createTextNode(txtVal);
													newOption.appendChild(newOptionVal);
													select.insertBefore(newOption,select.firstChild);
													newOption.selected = true;
													var elem = document.getElementById("val");
													elem.parentNode.removeChild(elem);
													var elem1 = document.getElementById("but");
													elem1.parentNode.removeChild(elem1);
												}
											</script>
										</div>

									<!-- автор -->
						      <label class="mr-sm-2 text-center mt-3" for="inlineFormCustomSelect1">Выберите автора</label>
						      <div class="d-flex flex-row justify-content-center">
						      <div>
						      <select class="custom-select" id="inlineFormCustomSelect1" name="author">
						        <?php  
						      	 $query = ("SELECT DISTINCT author FROM news");
						      	 $result = mysqli_query($link, $query);
						      	 $row = mysqli_fetch_assoc($result);
						      	 foreach ($result as $row) { 
						      	   $author = $row['author']?>
						      	   <option><?=$author?></option>
						      	 <?}?>
						      	 	 <option selected><?=$_SESSION['author']?></option>
						      </select>
						      	</div>
						      	<div>
						      	<input class="form-control" id="author" placeholder="Введите свой вариант">
						      	<button class="btn btn-success m-0 p-0 pr-1 pl-1" id="butauthor" type="button" onclick="insertValueauthor();">Добавить!</button>
						      	</div>
						      	<script>
						      		function insertValueauthor() {
						      			var selectauthor = document.getElementById("inlineFormCustomSelect1"),
						      			txtauthor = document.getElementById("author").value,
						      			newOptionauthor = document.createElement("OPTION"),
						      			newOptionValauthor = document.createTextNode(txtauthor);
						      			newOptionauthor.appendChild(newOptionValauthor);
						      			selectauthor.insertBefore(newOptionauthor,selectauthor.firstChild);
						      			newOptionauthor.selected = true;
						      			var elemauthor = document.getElementById("author");
						      			elemauthor.parentNode.removeChild(elemauthor);
						      			var elem1author = document.getElementById("butauthor");
						      			elem1author.parentNode.removeChild(elem1author);
						      		}
						      	</script>
						      </div>

					      	<!-- инпут остальных изображений -->
					      	<label class="text-center mt-5 pointer view" for="exampleFormControlFile2">
					      		<div class="d-flex justify-content-center">
					      			<img class="img-fluid w-25 h-25 mr-1" src="/images/341acbc6-a2da-467d-81b3-8ec7269ed109.jfif" alt="">
					      			<img class="img-fluid w-25 h-25 mr-1" src="/images/341acbc6-a2da-467d-81b3-8ec7269ed109.jfif" alt="">
					      			<img class="img-fluid w-25 h-25 mr-1" src="/images/341acbc6-a2da-467d-81b3-8ec7269ed109.jfif" alt="">
					      			<img class="img-fluid w-25 h-25 mr-1" src="/images/341acbc6-a2da-467d-81b3-8ec7269ed109.jfif" alt="">
					      		</div>
					      	<div class="mask flex-center rgba-stylish-strong">
					      	   <p class="white-text">Выберите изображения для слайдера <br> Максимально разрешенное кол-во - 10 шт.</p>
					      	</div>
					      	</label>
					          <input type="file" class="form-control-file" id="exampleFormControlFile2" name="slide_image[]" multiple>
					      	<hr>

						      <!-- чек и сабмит -->
						      <div class="d-flex m-5">
						      	<div class="d-flex flex-column mr-auto">
						      		<div class="form-group row">
						      			<label for="example-datetime-local-input" class="col-xs-2 col-form-label">Дата и время публикации:</label>
						      			<div class="col-xs-10 ml-2">
						      				<input class="form-control" type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s'); ?>" id="example-datetime-local-input" name="date">
						      			</div>
						      		</div>
						      		<div class="form-check has-success mr-auto">
						      			<label class="form-check-label">
						      				<input type="checkbox" name="hidden" value="1" class="form-check-input" checked>
						      				Опубликовать 
						      			</label>
						      		</div>
						      	</div>
						      	<button type="submit" id="ok" onclick="return removeDone(this)" class="btn btn-primary">Готово</button>
						      </div>

						      <div class="d-flex align-items-center">
								  <!-- <strong>Загружаются фотографии...</strong>
								  <div class="spinner-border ml-auto" role="status" aria-hidden="true" ></div> -->
									</div> 
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




<!-- var gulp 				= require('gulp');
//var browserSync = require('browser-sync');
var sass        = require('gulp-sass');

// Static Server + watching scss/html files

gulp.task('sass', function(){ // Создаем таск "sass"
    return gulp.src('scss/style.scss') // Берем источник
        .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(gulp.dest('demo/css')) // Выгружаем результата в папку app/css
}); -->



<!-- .preloader {
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background: black;
	z-index: 3;
	transition: 1s all;
	opacity: 1;
	visibility: visible;

	.loader {
		width: 75px;
		height: 75px;
		bottom: 10px solid white;
		border-radius: 50%
		border-top-color: red;
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		animation: 1s spin infinite linear;
	}

	&.done {
		opacity: 0;
		visibility: hidden;
	}
	
}

@keyframes spin {
	from {
		transform: translate(-50%, -50%) rotate(0deg);
	}
	to {
		transform: translate(-50%, -50%) rotate(360deg);
	}
} -->


<!-- .preloader {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: black;
  z-index: 3;
  -webkit-transition: 1s all;
  transition: 1s all;
  opacity: 1;
  visibility: visible; }
  .preloader .loader {
    width: 75px;
    height: 75px;
    bottom: 10px solid white;
    border-radius: 50%;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-animation: 1s spin infinite linear;
    animation: 1s spin infinite linear; }
  .preloader.done {
    opacity: 0;
    visibility: hidden; }

@-webkit-keyframes spin {
  from {
    -webkit-transform: translate(-50%, -50%) rotate(0deg);
    transform: translate(-50%, -50%) rotate(0deg); }
  to {
    -webkit-transform: translate(-50%, -50%) rotate(360deg);
    transform: translate(-50%, -50%) rotate(360deg); } }

@keyframes spin {
  from {
    -webkit-transform: translate(-50%, -50%) rotate(0deg);
    transform: translate(-50%, -50%) rotate(0deg); }
  to {
    -webkit-transform: translate(-50%, -50%) rotate(360deg);
    transform: translate(-50%, -50%) rotate(360deg); } } -->