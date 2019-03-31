<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/translit.php';

// переменные статьи
$title = $_POST['title'];
$text = $_POST['text'];
$taxonomy = $_POST['taxonomy'];
$author = $_POST["author"];
$date = $_POST["date"];
$hidden = $_POST["hidden"];
$ok = $_POST["ok"];
$errors = array();
$success = array();
$_SESSION['success'] = $success;
$_SESSION['title'] = $title;
$_SESSION['text'] = $text;
$_SESSION['taxonomy'] = $taxonomy;
$_SESSION['author'] = $author;
$_SESSION['date'] = $date;
$_SESSION['hidden'] = $hidden;
$image = $_FILES['image'];
$slide_image = $_FILES['slide_image'];


// переводим в транслит название категории и статьи
$tr_title = str2url($title);
$tr_taxonomy = str2url($taxonomy);
$_SESSION['tr_taxonomy'] = $tr_taxonomy;
$_SESSION['tr_title'] = $tr_title;
$dir = $_SERVER['DOCUMENT_ROOT'].'/images/news/'.$tr_taxonomy;
$dir1 = $_SERVER['DOCUMENT_ROOT'].'/images/news/'.$tr_taxonomy.'/'.$tr_title;

// Проверка на повтор статьи - если повтор, сразу редирект с указанием на ошибку
if (file_exists($dir1)) {
	$errors[] = 'Возможно, статья с таким именем в категории '.'"'.$taxonomy.'"'. ' уже существует! <br> Попробуйте задать другое имя или поменять категорию.';
	$_SESSION['errors'] = $errors;
	header('Location: '.PATH.'pages/admins/new_news.php');
	} 
if (!file_exists($dir)) {
	$upload_dir = mkdir($dir, true);
	}
if (!file_exists($dir1)) {
	$upload_dir = mkdir($dir1, true);
	$success[] = 'Поздравляем! Cтатья '.'"'.$title.'"'. ' в категории '.'"'.$taxonomy.'"'. ' успешно сформирована.';
	$_SESSION['success'] = $success;
	}

// загрузка главного изображения
$image_tmp = $_FILES['image']['tmp_name'];
if (is_uploaded_file($image_tmp)) {
	$image_name = $_FILES['image']['name'];
	$image_size = $_FILES['image']['size'];
	$image_type = $_FILES['image']['type'];
	$image_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
	$expensions = array("jpeg", "JPEG", "JPG", "jpg", "png");

			if ($file_size > 2097152) {
				$errors[] = 'Файл должен быть не более 2мб';
			}
			if (!in_array($image_ext, $expensions)) {
				$errors[] = 'Недопустимый формат изображения';
			}
			if (empty($errors) == true) {
				$name_img = date('Y-m-d_H-i-s').'.jpg'; 
				$name_img = mysqli_real_escape_string($link, $name_img);
				$mov = move_uploaded_file($image_tmp, $dir1.'/'.$name_img);
				$path_image = $tr_taxonomy.'/'.$tr_title.'/'.$name_img;
				
				$insert_sql = "INSERT INTO news (`title`, `n_text`, `image`, `author`, `taxonomy`, `hidden`) 
					VALUES ('$title', '$text', '$path_image', '$author', '$taxonomy', '$hidden')";
					mysqli_query($link, $insert_sql)or die(mysqli_error($link));
					$id_news = mysqli_insert_id($link);
			} 
		}

// загрузка изображений слайдера
foreach ($slide_image as $key => $value) {
	foreach ($value as $k => $v) {
		$slide_image[$k][$key] = $v;
		}
		unset($slide_image[$key]);
	}
foreach ($slide_image as $k => $v) {
	if (is_uploaded_file($slide_image[$k]['tmp_name'])) {
		$image_name = $slide_image[$k]['name'];
		$image_size = $slide_image[$k]['size'];
		$image_type = $slide_image[$k]['type'];
		$image_ext = strtolower(end(explode('.', $image_name)));
		$expensions = array("jpeg", "JPEG", "JPG", "jpg", "png");
		if ($file_size > 2097152) {
			$errors[] = 'Файл должен быть не более 2мб';
		}
		if (!in_array($image_ext, $expensions)) {
			$errors[] = 'Недопустимый формат изображения';
		}
		if (empty($errors) == true) {
			$name_img = 'slide-'.md5($image_name).'.jpg';  
			$mov = move_uploaded_file($slide_image[$k]['tmp_name'], $dir1.'/'.$name_img);
			$path_image = $tr_taxonomy.'/'.$tr_title.'/'.$name_img;
			$insert_sql = "INSERT INTO path_image (`id_news`, `path_image`) 
				VALUES ('$id_news', '$path_image')";
				mysqli_query($link, $insert_sql)or die(mysqli_error($link));
		} else {
		}
	}
}
	

$_SESSION['success'] = $success;
$_SESSION['errors'] = $errors;
	
	header('Location: '.PATH.'pages/admins/new_news.php');
	
	// arr($expensions);
	// exit();
	// redirect ();
 ?>