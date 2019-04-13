<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';



$block_name_sel = htmlentities(mysqli_real_escape_string($link, $_REQUEST['select_block']));
$pub_name = trim(htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_name'])));
$pub_description = trim(htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_description'])));
$pub_hidden = (int)($_REQUEST['pub_hidden']);
$block_id = (int)$_REQUEST['block_id'];;           
$id = (int)($_REQUEST['id']);
$id_option = (int)($_REQUEST['select_block']);

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


header('Location: /pages/biblioteka/p_publishing_page.php?id='.$block_id.'');
?>