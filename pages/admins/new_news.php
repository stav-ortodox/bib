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
						<p class="card text-center grey"><a href="#" class="">Новая новость</a></p>
							<div class="card mb-3 grey">
								<form class="news_form m-auto" action="action_new_news.php" method="post" multipart="" enctype="multipart/form-data">

									<!-- инпут заголовка -->
									<div class="md-form">
										<input id="form1" name="title" class="text-center form-control" type="text" placeholder="Введите заголовок" value="<?=$_SESSION['title']?>" required>
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
								    <textarea class="form-control m-0" id="exampleFormControlTextarea1" name="text" rows="3" required><?=$_SESSION['text']?></textarea>
									</div>

									<!-- категория -->
									<label class="mr-sm-2 text-center" for="inlineFormCustomSelect">Выберите категорию для статьи</label>
									<div class="d-flex flex-row justify-content-center">
										<div>
											<select class="custom-select" id="inlineFormCustomSelect" name="taxonomy" required>
												<?php  
												$query = ("SELECT DISTINCT taxonomy FROM news");
												$result = mysqli_query($link, $query);
												$row = mysqli_fetch_assoc($result);
												foreach ($result as $row) { 
													$taxonomy = $row['taxonomy']?>
													<option><?=$taxonomy?></option>
													<?}?>
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
						      <select class="custom-select" id="inlineFormCustomSelect1" name="author" required>
						        <?php  
						      	 $query = ("SELECT DISTINCT author FROM news");
						      	 $result = mysqli_query($link, $query);
						      	 $row = mysqli_fetch_assoc($result);
						      	 foreach ($result as $row) { 
						      	   $author = $row['author']?>
						      	   <option selected><?=$author?></option>
						      	 <?}?>
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
					      	   <p class="white-text">Выберите ещё изображения для статьи</p>
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
						      	<button type="submit" name="ok" class="btn btn-primary">Готово</button>
						      </div> 
						      <div class="d-flex align-items-center">
								  <strong>Loading...</strong>
								  <div class="spinner-border ml-auto" role="status" aria-hidden="true" ></div>
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