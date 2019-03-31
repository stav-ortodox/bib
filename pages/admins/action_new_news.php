<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

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
$dir = $_SERVER['DOCUMENT_ROOT'].'/images/news/'.$taxonomy;
$dir1 = $_SERVER['DOCUMENT_ROOT'].'/images/news/'.$taxonomy.'/'.$title;

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

// проверка главного изображения
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
				$name_img = $title.'-'.date('YmdHis').'.jpg';  
				$mov = move_uploaded_file($image_tmp, $dir1.$name_img);
			} else {
				arr($errors);
				exit();
			}
		}

	header('Location: '.PATH.'pages/admins/new_news.php');
	arr($errors);
	// arr($expensions);
	// exit();
	// redirect ();
 ?>