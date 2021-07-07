<?php 
 require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

if (isset($_POST['form-submit'])) {

$errors = array();
$success = array();
$name = $_POST['form-name'];
$email = $_POST['form-email'];
$subject = $_POST['subject'];
$text = $_POST['form-text'];
$userreg = $_POST['userreg'];

if (isset($_SESSION['id'])) {
	$user_id = $_SESSION['id'];
} else {
	$errors[] = 'Для того чтобы отправить письмо зарегистрируйтесь или войдите (если уже зарегистрированны)!';
	$_SESSION['errors'] = $errors;
	header('Location: '.PATH.'pages/p_contacts.php#top');    
	exit();
}

	$name = trim(mysqli_real_escape_string($link, $name));
	$email = trim(mysqli_real_escape_string($link, $email));
	$subject = trim(mysqli_real_escape_string($link, $subject));
	$text = trim(mysqli_real_escape_string($link, $text));
	$userreg = mysqli_real_escape_string($link, (int)$userreg);
	$user_id = mysqli_real_escape_string($link, (int)$user_id);

	if (empty($name)) {
		$errors[] = 'Не указано имя';
	}    
	if (empty($email)) {
		$errors[] = 'Не указан Email';
	}
	if (empty($subject)) {
		$errors[] = 'Не указана тема сообщения';
	}
	if (empty($text)) {
		$errors[] = 'Вы ничего не написали';
	}
	if (!empty($errors)) {
	  $_SESSION['errors'] = $errors;
	  header('Location: '.PATH.'pages/p_contacts.php#top');    
	  exit();
	} else {
		$query = "INSERT INTO contacts (name, email, subject, formtext, userreg, user_id) VALUES ('$name', '$email', '$subject', '$text', '$userreg', $user_id)";
		$res = mysqli_query($link, $query);
		$success[] = 'Спасибо! Ваше сообщение успешно отправленно. Ответ придёт на указанный Email';
	}
}



if (empty($errors)) {
    $_SESSION['success'] = $success;
    
} else {
    $_SESSION['errors'] = $errors;
}

header('Location: '.PATH.'pages/p_contacts.php#top');
// redirect('#top');