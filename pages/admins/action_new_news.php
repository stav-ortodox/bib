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
// переменные глав. изображения


$image = $_FILES['image'];
$dir = $_SERVER['DOCUMENT_ROOT'].'/images/news/'.$taxonomy;
@$upload_dir = mkdir($dir, true);
if (file_exists($dir)) {
	$dir1 = $_SERVER['DOCUMENT_ROOT'].'/images/news/'.$taxonomy.'/'.$title;
	@$upload_dir = mkdir($dir1, true);
}

if (file_exists($dir1)) {
	$errors[] = 'Возможно, статья с таким именем в категории '.'"'.$taxonomy.'"'. ' уже существует! <br> Попробуйте задать другое имя или поменять категорию.';
} else {
	$success[] = 'Поздравляем! Cтатья '.'"'.$title.'"'. 'в категории '.'"'.$taxonomy.'"'. ' успешно сформирована.';
}

$_SESSION['errors'] = $errors;
$_SESSION['success'] = $success;
$_SESSION['title'] = $title;
$_SESSION['text'] = $text;
$_SESSION['taxonomy'] = $taxonomy;
$_SESSION['author'] = $author;
$_SESSION['date'] = $date;
$_SESSION['hidden'] = $hidden;

if (isset($_SESSION['errors'])) {
	header('Location: '.PATH.'pages/admins/new_news.php');
}



// переменные изображений слайдера

// if (file_exists($path)) {
// 	$path .= '/'.$title;
// } 
// $upload_dir = mkdir($dir, true);


// if (isset($image)) {
// 	
// 	$image_name = $_FILES['image']['name'];
// 	$image_size = $_FILES['image']['size'];
// 	$image_tmp = $_FILES['image']['tmp_name'];
// 	$image_type = $_FILES['image']['type'];
// 	$image_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
// 	$expensions = array("jpeg", "JPEG", "JPG", "jpg", "png");

// 			if ($file_size > 2097152) {
// 				$errors[] = 'Файл должен быть не более 2мб';
// 			}
// 			if (!in_array($image_ext, $expensions)) {
// 				$errors[] = 'Недопустимый формат изображения';
// 			}
// 			if (empty($errors) == true) {
// 				$name_img = $title.'-'.date('YmdHis').'.jpg';  
// 				$mov = move_uploaded_file($image_tmp, $path);
					
// 			} else {
// 				arr($errors);
// 				exit();
// 			}
// }


arr($errors);
// arr($expensions);
// exit();
// redirect ();
 ?>