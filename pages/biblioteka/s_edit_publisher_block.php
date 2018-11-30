<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';


	

if (isset($_POST['close']) && $_POST['close'] == 'yes') {
    $id = $_POST['id'];
    $query ="UPDATE publishing_blocks SET 
        block_hidden='1'

        WHERE id='$id'";
        $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
    
}
else
{}

if (isset($_POST['close']) && $_POST['close'] == 'no') {
    $id = $_POST['id'];
    $query ="UPDATE publishing_blocks SET 
        block_hidden='0'

        WHERE id='$id'";
        $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
    
}
else
{}




if(isset($_POST['block_name']) && isset($_POST['id'])){

    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $block_name = htmlentities(mysqli_real_escape_string($link, $_POST['block_name']));
    $block_description = htmlentities(mysqli_real_escape_string($link, $_POST['block_description']));
    
    
        if ($_FILES['block_image']['size'] > 0) { 
        // файл прислан
            $errors = array();
            $file_name = $_FILES['block_image']['name'];
            $file_size = $_FILES['block_image']['size'];
            $file_tmp = $_FILES['block_image']['tmp_name'];
            $file_type = $_FILES['block_image']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['block_image']['name'])));
            $expensions = array("jpeg", "jpg", "png");

                    if ($file_size > 2097152) {
                        $errors[] = 'Файл должен быть не более 2мб';
                    }

                    if (empty($errors) == true) {
                        $upload_dir = '../../images/biblioteka/publishing_blocks/';
                        $name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
                        $mov = move_uploaded_file($_FILES['block_image']['tmp_name'],$name_img);

                    $query ="UPDATE publishing_blocks SET 
                    block_image='$name_img'

                    WHERE id='$id'";
                    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
                    
                    if($result)
                        
                        header('Location: /pages/p_biblioteka.php');    
                            
                    } 

                    else {
                        print $errors;
                    }
        }

     
    $query ="UPDATE publishing_blocks SET 

    block_name='$block_name', 
    block_description='$block_description'
    
    
    WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
    if($result)
    header('Location: /pages/p_biblioteka.php');
}
 



// если запрос GET
if(isset($_GET['id'])) {   

// 

    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
     
    // создание строки запроса
    $query ="SELECT * FROM publishing_blocks WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0) 
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $block_name = $row[1];
        $block_image = $row[2];
        $block_description = $row[3];
        $block_hidden = $row[4];
	
        mysqli_free_result($result);

    }
}


    


// закрываем подключение
  mysqli_close($link);

?>
