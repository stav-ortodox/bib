<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

 



// загрузка главного изображения
if (!empty($_FILES)) {

	if (isset($_FILES['file'])) {
		arr($_SESSION['id_news']);
		// arr($_SESSION);
		$file = 'file';
		$_SESSION['file'] = $new_name;
		
	} elseif (isset($_FILES['files'])) {
		$file = 'files';
		$_SESSION['files'][] = $new_name;

	} else {
		$res = ['answer' => 'error', 'error' => 'Некорректное имя файла в форме'];
		exit(json_encode($res));
	}

	$path = PATH . 'images/news/uploads/';

}
	// $image_tmp = $_FILES['file']['tmp_name'];
	// $image_name = $_FILES['file']['name'];
	// $image_size = $_FILES['file']['size'];
	// $image_type = $_FILES['file']['type'];
	// $image_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
	// $expensions = array("jpeg", "JPEG", "JPG", "jpg", "png");

	// if (!in_array($image_ext, $expensions)) {
	// 	$errors[] = 'Недопустимый формат изображения';
	// }
	// if (empty($errors) == true) {

	// 	$query = ("SELECT image FROM news WHERE id = '$id'");
	// 	$result = mysqli_query($link, $query);
 //    $row = mysqli_fetch_assoc($result);
 //    arr($row['image']);
 //    exit();

	

// 		$name_img = date('Y-m-d_H-i-s').'.jpg'; 
// 		$name_img = mysqli_real_escape_string($link, $name_img);
// 		resize_photo($dir1, $name_img, $image_size, $image_type, $image_tmp);
// 		$path_image = $tr_taxonomy.'/'.$tr_title.'/'.$name_img;
// 		$insert_sql = "INSERT INTO news (`title`, `n_text`, `image`, `date`, `author`, `taxonomy`, `hidden`) 
// 		VALUES ('$title', '$text', '$path_image', '$date', '$author', '$taxonomy', '$hidden')";
// 		mysqli_query($link, $insert_sql)or die(mysqli_error($link));
// 		$id_news = mysqli_insert_id($link);
// 	} 
