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

// переменные глав. изображения
$image = $_FILES['image'];
$path = $_SERVER['DOCUMENT_ROOT'].'/'.'/images/news/'.$taxonomy;
// $dir = '/images/news/'.$taxonomy;

// переменные изображений слайдера

if (file_exists($path)) {
	$path = $_SERVER['DOCUMENT_ROOT'].'/'.'/images/news/'.$taxonomy.'/'.$title;
} 
	$upload_dir = mkdir($path, true);


if (isset($image)) {
	$errors = array();
	$image_name = $_FILES['image']['name'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
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
				$mov = move_uploaded_file($image_tmp,$name_img);
					
			} else {
				arr($errors);
				exit();
			}
}


arr($path);
arr($expensions);
// exit();
 ?>