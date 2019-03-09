<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

// echo "<pre>";
// var_dump($_REQUEST);
// echo "</pre>";

$block_name_sel = htmlentities(mysqli_real_escape_string($link, $_REQUEST['select_block']));
$pub_name = trim(htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_name'])));
$pub_description = trim(htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_description'])));
$pub_hidden = (int)($_REQUEST['pub_hidden']);
$block_id = (int)$_REQUEST['block_id'];;           
$id = (int)($_REQUEST['id']);


if (isset($id)) {
    $query ="UPDATE publishing_post SET select_block='$block_name_sel', pub_name='$pub_name', pub_description='$pub_description', pub_hidden='$pub_hidden' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
}

// перехожу к редакции id блока
if (isset($block_id)) {
    $query ="SELECT id FROM publishing_blocks WHERE block_name='$block_name_sel'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));
    while($object = mysqli_fetch_object($result)) 
    $new_block_id = $object->id;

    $query ="UPDATE publishing_post SET block_id='$new_block_id' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка при апдейте блока id " . mysqli_error($link)); 
}

header('Location: /pages/biblioteka/p_publishing_page.php?id='.$block_id.'');

?>