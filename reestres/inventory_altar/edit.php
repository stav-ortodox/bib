<?php 
session_start(); 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 

admin ();


$id = $_REQUEST['id'];
$name = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['name'])));
$count = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['count'])));
$position = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['position'])));
$desk = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['desk'])));




if ($_FILES['new_image']['size'] > 0) { 
   $errors = array();
   $file_name = $_FILES['new_image']['name'];
   $file_size = $_FILES['new_image']['size'];
   $file_tmp = $_FILES['new_image']['tmp_name'];
   $file_type = $_FILES['new_image']['type'];
   $file_ext = strtolower(end(explode('.', $_FILES['new_image']['name'])));
   $expensions = array("jpeg", "jpg", "png");

   if ($file_size > 2097152) {
       $errors[] = 'Файл должен быть не более 2мб';
   }

   if (empty($errors) == true) {
       $upload_dir = 'uploads/icons/';
             $new_image = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
             $mov = move_uploaded_file($_FILES['new_image']['tmp_name'],$new_image);

         } else {
           print $errors;
       }


       $query = "UPDATE `inventory_altar` SET 
       `image` = '$new_image' 
       WHERE `inventory_altar`.`id` = $id";
       $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
   }
   else {
   }


   $query = "UPDATE `inventory_altar` SET 
   `name` = '$name',
   `count` = '$count',
   `position` = '$position',
   `desk` = '$desk'
   
   WHERE `inventory_altar`.`id` = $id";
   $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));

   echo "<script>window.location.href = history.go(-2);</script>";



?>