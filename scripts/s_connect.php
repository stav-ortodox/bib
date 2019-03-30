<?php
define("DATABASE_HOST", "localhost");
define("DATABASE_USERNAME", "root");
define("DATABASE_PASSWORD", "");
define("DATABASE_NAME", "stavr213_stavpant");
define("MY_PASS", "123vc3718123");
define("PATH", "http://bib/");
define("NEWS", "C:/Users/user/Desktop/OSPanel/domains/bib/images/news/");


$link = mysqli_connect( 
            DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME); 
            session_start();    /* База данных для запросов по умолчанию */ 
            
if (!$link) { 
   printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 


?>