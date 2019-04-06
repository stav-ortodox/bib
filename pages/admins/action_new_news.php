<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/translit.php';




// переменные статьи
unset($_SESSION['errors']);
$title = $_POST['title'];
$text = $_POST['text'];
$author = $_POST["author"];
$taxonomy = $_POST['taxonomy'];
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

if (isset($_GET['processed']) && (! isset($_FILES) || (count($_FILES) == 0))) {
	$errors[] = 'Превышен лимит общего размера загружаемых файлов!';
	$_SESSION['errors'] = $errors;
	header('Location: '.PATH.'pages/admins/new_news.php');
	exit();
}


if (empty($title) || empty($text) || empty($author) || empty($taxonomy)) {
	$errors[] = 'Внимательно проверьте заполненность всех полей!';
	$_SESSION['errors'] = $errors;
	header('Location: '.PATH.'pages/admins/new_news.php');
	exit();
}

// переводим в транслит название категории и статьи
$tr_title = str2url($title);
if (strlen($tr_title)>25) {
	$tr_title = mb_substr(strip_tags($tr_title), 0, 25, 'utf-8');
}
$tr_taxonomy = str2url($taxonomy);
$_SESSION['tr_taxonomy'] = $tr_taxonomy;
$_SESSION['tr_title'] = $tr_title;
$dir = $_SERVER['DOCUMENT_ROOT'].'/images/news/'.$tr_taxonomy;
$dir1 = $_SERVER['DOCUMENT_ROOT'].'/images/news/'.$tr_taxonomy.'/'.$tr_title.'/';

// Проверка на повтор статьи - если повтор, сразу редирект с указанием на ошибку
if (file_exists($dir1) && $title !== '') {
	$errors[] = 'Возможно, статья с таким именем в категории '.'"'.$taxonomy.'"'. ' уже существует! <br> Попробуйте задать другое имя или поменять категорию.';
	$_SESSION['errors'] = $errors;
	header('Location: '.PATH.'pages/admins/new_news.php');
	exit();
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

	if (!in_array($image_ext, $expensions)) {
		$errors[] = 'Недопустимый формат изображения';
	}
	if (empty($errors) == true) {
		$name_img = date('Y-m-d_H-i-s').'.jpg'; 
		$name_img = mysqli_real_escape_string($link, $name_img);
		resize_photo($dir1, $name_img, $image_size, $image_type, $image_tmp);
		$path_image = $tr_taxonomy.'/'.$tr_title.'/'.$name_img;
		$insert_sql = "INSERT INTO news (`title`, `n_text`, `image`, `date`, `author`, `taxonomy`, `hidden`) 
		VALUES ('$title', '$text', '$path_image', '$date', '$author', '$taxonomy', '$hidden')";
		mysqli_query($link, $insert_sql)or die(mysqli_error($link));
		$id_news = mysqli_insert_id($link);
	} 
} 
else {
	$errors[] = 'Вы не загрузили главное изображение!';
	$_SESSION['errors'] = $errors;
	rmdir($dir1);
	header('Location: '.PATH.'pages/admins/new_news.php');
	exit();
}

// загрузка изображений слайдера
foreach ($slide_image as $key => $value) {
	foreach ($value as $k => $v) {
		$slide_image[$k][$key] = $v;
	}
	// if (count($v) > 15) {

	// 	exit('фото больше 15');
	// }
	unset($slide_image[$key]);
}

foreach ($slide_image as $k => $v) {
	if (is_uploaded_file($slide_image[$k]['tmp_name'])) {
		$image_tmp = $slide_image[$k]['tmp_name'];
		$image_name = $slide_image[$k]['name'];
		$image_size = $slide_image[$k]['size'];
		$image_type = $slide_image[$k]['type'];
		$image_ext = strtolower(end(explode('.', $image_name)));
		$expensions = array("jpeg", "JPEG", "JPG", "jpg", "png");
		
		if (!in_array($image_ext, $expensions)) {
			$errors[] = 'Недопустимый формат изображения';
		}
		if (empty($errors) == true) {
			$name_img = 'slide-'.md5($image_name).'.jpg'; 
			resize_photo($dir1, $name_img, $image_size, $image_type, $image_tmp); 
			$path_image = $tr_taxonomy.'/'.$tr_title.'/'.$name_img;
			$insert_sql = "INSERT INTO path_image (`id_news`, `path_image`) 
			VALUES ('$id_news', '$path_image')";
			mysqli_query($link, $insert_sql)or die(mysqli_error($link));
		} 
	} 
	else {
		$success[] = 'Вы не загрузили ни одного изображения в слайдер, но статья всё равно будет опубликована.';
	}
}
$_SESSION['success'] = $success;
$_SESSION['errors'] = $errors;
header('Location: '.PATH.'pages/admins/new_news.php');
?>