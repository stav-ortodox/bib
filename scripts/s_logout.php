<?php 
session_start();

unset($_SESSION['login']);
unset($_SESSION['id']);

header("Location: /index.php");
exit();


?>