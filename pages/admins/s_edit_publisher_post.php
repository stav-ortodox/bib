<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';


$block_name_sel = htmlentities(mysqli_real_escape_string($link, $_REQUEST['select_block']));
$pub_name = trim(htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_name'])));
$pub_description = trim(htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_description'])));
$pub_hidden = (int)($_REQUEST['pub_hidden']);
$block_id = (int)$_REQUEST['block_id'];;           
$id = (int)($_REQUEST['id']);
$id_option = (int)($_REQUEST['select_block']);
$errors = array();
$success = array();

// echo "<pre>";
// var_dump($_REQUEST);
// echo "</pre>";
// exit();

if (isset($id)) {
$query ="UPDATE publishing_post SET pub_name='$pub_name', pub_description='$pub_description', pub_hidden='$pub_hidden' WHERE id='$id'";
$result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
}

if ($block_id !== $id_option) {
	$query ="UPDATE publishing_post SET block_id='$id_option' WHERE id='$id'";
	$result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));
}

if (!empty($_FILES['pub_image']['name'])) {
	$query = ("SELECT pub_image FROM publishing_post WHERE id = $id");
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_assoc($result);
	$pub_image = $row["pub_image"]; 
	

	@unlink($pub_image);
	unset($pub_image);

	$file_name = $_FILES['pub_image']['name'];
	$file_size = $_FILES['pub_image']['size'];
	$file_tmp = $_FILES['pub_image']['tmp_name'];
	$file_type = $_FILES['pub_image']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['pub_image']['name'])));
	$expensions = array("jpeg", "jpg", "png");

		if ($file_size > 3097152) {
			$errors[] = 'Изображение должно быть не более 3 мб';
		}

		if (!in_array($file_ext, $expensions)) {
			$errors[] = 'Недопустимый формат изображения';
		}

		if (empty($errors) == true) {
			$upload_dir = '../../images/biblioteka/publishing_posts/';
			$name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg';
			$mov = move_uploaded_file($file_tmp, $name_img);		
		  
			$query ="UPDATE publishing_post SET pub_image='$name_img' WHERE id='$id'";
      $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
      
  	if (!$result) {
  		$errors[] = 'Ошибка загрузки изображения!';
  		$_SESSION['errors'] = $errors;
      header('Location: /pages/biblioteka/p_publishing_page.php?id='.$id_option.'');        
  	}
	}
}



if (!empty($_FILES['pub_file']['name'])) {
	$query = ("SELECT pub_file FROM publishing_post WHERE id = $id");
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_assoc($result);
	$pub_file = $row["pub_file"]; 

	@unlink($pub_file);
	unset($pub_file);

	$file_name_file = $_FILES['pub_file']['name'];
	$file_size_file = $_FILES['pub_file']['size'];
	$file_tmp_file = $_FILES['pub_file']['tmp_name'];
	$file_type_file = $_FILES['pub_file']['type'];
	$file_ext_file = strtolower(end(explode('.', $_FILES['pub_file']['name'])));
	$expensions_file = array("pdf");

	// if ($file_size_file > 3097152) {
	// 	$errors[] = 'Файл должен быть не более 3 мб';
	// }

	if (!in_array($file_ext_file, $expensions_file)) {
		$errors[] = 'Недопустимый формат файла';
	}

	if (empty($errors) == true) {

		$upload_file_dir = '../../images/biblioteka/publishing_files/';
		$name_file = $upload_file_dir.date('YmdHis').rand(100,1000).'.pdf';
		$mov_file = move_uploaded_file($file_tmp_file, $name_file);
	
		$query ="UPDATE publishing_post SET pub_file='$name_file' WHERE id='$id'";
	  $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
	      
  	if (!$result) {
  		$errors[] = 'Ошибка загрузки файла издания!';
  		$_SESSION['errors'] = $errors;
      header('Location: /pages/biblioteka/p_publishing_page.php?id='.$id_option.'');        
  	}
	}
}

if (empty($errors)) {
	$success[] = 'ok';
	$_SESSION['success'] = $success; 
} else {
	$_SESSION['errors'] = $errors;
}

 header('Location: /pages/biblioteka/p_publishing_page.php?id='.$id_option.'');
?>