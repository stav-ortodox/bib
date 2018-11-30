if (isset($_FILES['pub_file'])) {
            $errors = array();
            $file_name_file = $_FILES['pub_file']['name'];
            $file_size_file = $_FILES['pub_file']['size'];
            $file_tmp_file = $_FILES['pub_file']['tmp_name'];
            $file_type_file = $_FILES['pub_file']['type'];
            $file_ext_file = strtolower(end(explode('.', $_FILES['pub_file']['name'])));
            $expensions = array("jpeg", "jpg", "png");

                    if ($file_size > 2097152) {
                        $errors[] = 'Файл должен быть не более 2 мб';
                    }

                    if (empty($errors) == true) {
                        $upload_file_dir = '../../images/biblioteka/publishing_files/';
                        $name_file = $upload_file_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
                        $mov_file = move_uploaded_file($_FILES['pub_file']['tmp_name'],$name_file);
                            
                    } else {
                        print $errors;
                    }
                }




if ($_FILES['pub_file']['size'] > 0) { 
// файл прислан
    $errors = array();
    $file_name = $_FILES['pub_file']['name'];
    $file_size = $_FILES['pub_file']['size'];
    $file_tmp = $_FILES['pub_file']['tmp_name'];
    $file_type = $_FILES['pub_file']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['pub_file']['name'])));
    $expensions = array("jpeg", "jpg", "png");

            if ($file_size > 2097152) {
                $errors[] = 'Файл должен быть не более 2мб';
            }

            if (empty($errors) == true) {
                $upload_file_dir = '../../images/biblioteka/publishing_blocks/';
                $name_file = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
                $mov_file = move_uploaded_file($_FILES['pub_file']['tmp_name'],$name_file);
                    
            } 

            else {
                print $errors;
            }
        }

















        <?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';



	// если запрос POST 
  // $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
if(isset($_POST['pub_name']) && isset($_POST['id'])){

    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
    $pub_name = htmlentities(mysqli_real_escape_string($link, $_POST['pub_name']));
    $pub_description = htmlentities(mysqli_real_escape_string($link, $_POST['pub_description']));
    $pub_hidden = htmlentities(mysqli_real_escape_string($link, $_POST['pub_hidden']));
    $select_id_block = htmlentities(mysqli_real_escape_string($link, $_POST['select_block']));
      
    
        if ($_FILES['pub_image']['size'] > 0) { 
        // файл прислан
            $errors = array();
            $file_name = $_FILES['pub_image']['name'];
            $file_size = $_FILES['pub_image']['size'];
            $file_tmp = $_FILES['pub_image']['tmp_name'];
            $file_type = $_FILES['pub_image']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['pub_image']['name'])));
            $expensions = array("jpeg", "jpg", "png");

                    if ($file_size > 2097152) {
                        $errors[] = 'Файл должен быть не более 2мб';
                    }

                    if (empty($errors) == true) {
                        $upload_dir = '../../images/biblioteka/publishing_blocks/';
                        $name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
                        $mov = move_uploaded_file($_FILES['pub_image']['tmp_name'],$name_img);    
                    } 

                    else {
                        print $errors;
                    }
                }


        
    
    $query ="UPDATE publishing_post SET 
    
    block_id='$select_id_block',
    pub_name='$pub_name', 
    pub_description='$pub_description', 
    pub_image='$name_img',
    pub_file='$name_file'
    -- pub_hidden='$pub_hidden'
    
    WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
    if($result)
        
        header("Location: /pages/biblioteka/p_publishing_page.php?id=$id");
}


// если запрос GET
if(isset($_GET['id'])) {   

    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
     
    // создание строки запроса
    $query ="SELECT * FROM publishing_post WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0) 
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $pub_name = $row[2];
        $pub_description = $row[3];
        $pub_image = $row[4];
        $pub_file = $row[5];
        $pub_hidden = $row[6];
	
        mysqli_free_result($result);

    }
}


if ($_FILES['pub_image']['size'] > 0) { 
// файл прислан
    $errors = array();
    $file_name = $_FILES['pub_image']['name'];
    $file_size = $_FILES['pub_image']['size'];
    $file_tmp = $_FILES['pub_image']['tmp_name'];
    $file_type = $_FILES['pub_image']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['pub_image']['name'])));
    $expensions = array("jpeg", "jpg", "png");

            if ($file_size > 2097152) {
                $errors[] = 'Файл должен быть не более 2мб';
            }

            if (empty($errors) == true) {
                $upload_dir = '../../images/biblioteka/publishing_blocks/';
                $name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
                $mov = move_uploaded_file($_FILES['pub_image']['tmp_name'],$name_img);
                    
            } 

            else {
                print $errors;
            }
        }





 $id = ($_GET['id']);




if(isset($name_img)) {
      


    $query ="UPDATE publishing_post SET
    block_id='$select_id_block',
    pub_name='$pub_name', 
    pub_description='$pub_description', 
    pub_image='$name_img',
    pub_file='$name_file'

    WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
         header("Location: /pages/biblioteka/p_publishing_page.php?id=$id");

}

var_dump($select_id_block);
var_dump($pub_name);
var_dump($pub_description);
var_dump($name_img);
var_dump($name_file);

// apd_breakpoint(debug_level);
// закрываем подключение
  // mysqli_close($link);

?>
