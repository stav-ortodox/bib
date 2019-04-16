<?php 
session_start();

unset($_SESSION['login']);
unset($_SESSION['id']);
unset($_SESSION['email']);

setcookie('login', '', time()-3600, '/');
setcookie('id', '', time()-3600, '/');
setcookie('email', '', time()-3600, '/');

header("Location: /index.php");
exit();


?>