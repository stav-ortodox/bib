<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';


    
// var_dump($_REQUEST);
// echo "<br>";
// echo "<br>";
// var_dump($_GET);
// echo "<br>";
// echo "<br>";

if (isset($_POST['id'])) {
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));


    if (isset($_POST['select_block'])) {
        $block_name_sel=$_POST['select_block'];
        $block_id=$_POST['block_id'];
        

        $query ="UPDATE publishing_post SET 
        select_block='$block_name_sel'

        WHERE id='$id'";
        $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
          // echo "загруженa переменная ".$select_block."";

}

// перехожу к редакции id блока
    if (isset($_POST['block_id'])) {
        
            $query ="SELECT id FROM publishing_blocks WHERE block_name='$block_name_sel'";
            $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));

            while($object = mysqli_fetch_object($result)) 
            $new_block_id = $object->id;
            

            $query ="UPDATE publishing_post SET 
            block_id='$new_block_id'

            WHERE id='$id'";
            $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
               // echo "загруженa переменная ".$new_block_id."";
        
    }
}
//     if (isset($_POST['pub_name'])) {
//         $pub_name=$_POST['pub_name'];

//         $query ="UPDATE publishing_post SET 
//         pub_name='$pub_name'

//         WHERE id='$id'";
//         $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
//          // echo "загруженa переменная ".$pub_name."";
//     }

//     if (isset($_POST['pub_description'])) {
//         $pub_description=$_POST['pub_description'];

//         $query ="UPDATE publishing_post SET 
//         pub_description='$pub_description'

//         WHERE id='$id'";
//         $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
//          // echo "загруженa переменная ".$pub_description."";
//     }
// }


//     $id = htmlentities(mysqli_real_escape_string($link, $_REQUEST['id']));
//     $pub_name = htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_name']));
//     $pub_description = htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_description']));
    
// if ($_SESSION['id'] == 1) {
   

//     if ($_FILES['pub_image']['size'] > 0) { 
//     // файл прислан
//         $errors = array();
//         $file_name = $_FILES['pub_image']['name'];
//         $file_size = $_FILES['pub_image']['size'];
//         $file_tmp = $_FILES['pub_image']['tmp_name'];
//         $file_type = $_FILES['pub_image']['type'];
//         $file_ext = strtolower(end(explode('.', $_FILES['pub_image']['name'])));
//         $expensions = array("jpeg", "jpg", "png");

//                 if ($file_size > 2097152) {
//                     $errors[] = 'Файл должен быть не более 2мб';
//                 }

//                 if (empty($errors) == true) {
//                     $upload_dir = '../../images/biblioteka/publishing_blocks/';
//                     $name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
//                     $mov = move_uploaded_file($_FILES['pub_image']['tmp_name'],$name_img);       
//                 } 

//                 else {
//                     print $errors;
//                 }

//                 if(isset($name_img)) {
         
//         $query ="UPDATE publishing_post SET 
//         pub_image='$name_img'

//         WHERE id='$id'";
//         $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
//         echo "Загружена картинка";
//         }
//     }
        

/**********************************************************************************************************/

    // if ($_FILES['pub_file']['size'] > 0) { 
    // // файл прислан
    //     $errors = array();
    //     $file_name = $_FILES['pub_file']['name'];
    //     $file_size = $_FILES['pub_file']['size'];
    //     $file_tmp = $_FILES['pub_file']['tmp_name'];
    //     $file_type = $_FILES['pub_file']['type'];
    //     $file_ext = strtolower(end(explode('.', $_FILES['pub_file']['name'])));
    //     $expensions = array("jpeg", "jpg", "png");

    //             if ($file_size > 2097152) {
    //                 $errors[] = 'Файл должен быть не более 2мб';
    //             }

    //             if (empty($errors) == true) {
    //                 $upload_dir = '../../images/biblioteka/publishing_blocks/';
    //                 $name_file = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
    //                 $mov_file = move_uploaded_file($_FILES['pub_file']['tmp_name'],$name_file);       
    //             } 

    //             else {
    //                 print $errors;
    //             }

    //             if (isset($name_file)) {
         
    //     $query ="UPDATE publishing_post SET 
    //     pub_file='$name_file'

    //     WHERE id='$id'";
    //     $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
    //     // echo "загружен файл";
    //         }
    //     }
    // }

/******************************************************************************************************************/
// var_dump($_REQUEST);

    // if(isset($_REQUEST['pub_name']))  {
    //     $id = htmlentities(mysqli_real_escape_string($link, $_REQUEST['id']));
    //   // создание строки запроса
    //     $query ="SELECT * FROM publishing_post WHERE id = '$id'";
    //     // выполняем запрос
    //     $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    //     //если в запросе более нуля строк
    //     if($result && mysqli_num_rows($result)>0) {
    //         $row = mysqli_fetch_row($result); // получаем первую строку
    //         $block_id = $row[1];
    //         $pub_name = $row[2];
    //         $pub_description = $row[3];
    //         $pub_image = $row[4];
    //         $pub_file = $row[5];
    //         $pub_hidden = $row[6];
        
    //         mysqli_free_result($result);
   
    
    //         $query ="UPDATE publishing_post SET 

    //         block_id='$block_id',
    //         pub_name='$pub_name', 
    //         pub_description='$pub_description', 
    //         pub_image='$name_img',
    //         pub_file='$name_file',
    //         pub_hidden='$pub_hidden'

    //         WHERE id=$id";
    //         $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
    //         if($result)
             header('Location: /pages/biblioteka/p_publishing_page.php?id='.$block_id.'');

    //     }
    // }


// закрываем подключение
 // mysqli_close($link);
?>