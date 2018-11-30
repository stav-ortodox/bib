<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 




$link = mysqli_connect( 
            DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);     /* База данных для запросов по умолчанию */ 
if (!$link) { 
   printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 


?>