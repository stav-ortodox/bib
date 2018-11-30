<?php 
session_start(); 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
  
get_header_doc ('Форма редактирования', 'Форма редактирования');

?>

	<?php
	// если запрос POST 

    if(isset($_POST['name']) && isset($_POST['name_type']) && isset($_POST['id'])){

 
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $name_type = htmlentities(mysqli_real_escape_string($link, $_POST['name_type']));
    $characterics = htmlentities(mysqli_real_escape_string($link, $_POST['characterics']));
    $place = htmlentities(mysqli_real_escape_string($link, $_POST['place']));
    $of_face = htmlentities(mysqli_real_escape_string($link, $_POST['of_face']));
    $sost = htmlentities(mysqli_real_escape_string($link, $_POST['sost']));

     
    $query ="UPDATE reestr_comps SET 
    name='$name', 
    name_type='$name_type', 
    characterics='$characterics', 
    place='$place', 
    of_face='$of_face', 
    sost='$sost'
    
    WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
    header('Location: p_reestr_comp.php');
}
 
// если запрос GET
if(isset($_GET['id']))
{   
    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
     
    // создание строки запроса
    $query ="SELECT * FROM reestr_comps WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0) 
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $name = $row[1];
        $name_type = $row[2];
        $characterics = $row[3];
        $place = $row[4];
        $of_face = $row[5];
        $sost = $row[6];
        $image = $row[7];
         
        echo "<div class='user_form'>
        				
            <form action='' method='POST' enctype='multipart/form-data'>
            <h4>Редактирование данных</h4>
            <input type='hidden' name='id' value='$id' />

            <p>Наименование техники:<br> 
            <input type='text' name='name' value='$name' /></p>

            <p>марка/модель: <br> 
            <input type='text' name='name_type' value='$name_type' /></p>

            <p>Технические характеристики: <br> 
            <textarea type='text' name='characterics' rows='10' cols='45' value='$characterics'>$characterics</textarea></p>

            <p>Место нахождения: <br> 
            <input type='text' name='place' value='$place' /></p>

            <p>Ответственное лицо: <br> 
            <input type='text' name='of_face' value='$of_face' /></p>

            <p>Cостояние: <br> 
            <input type='text' name='sost' value='$sost' /></p>

            <p>Фотография: <br> 
            <div class='img_edit'>
            <img src='$image' width=300 height=300>
            </div>
            </p>

            <p>Выберите новое изображение: <br>
            
            <input type='file' name='image' id='image'></p>

            <input class='submit' type='submit' value='Сохранить'>
            <input class='submit' type='button' onclick='history.back();' value='Отмена'>
            </form>
            
            </div>";

	
        mysqli_free_result($result);

    }
}
if ($_FILES['image']['size'] > 0) { 
// файл прислан
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
    $expensions = array("jpeg", "jpg", "png");

            if ($file_size > 2097152) {
                $errors[] = 'Файл должен быть не более 2мб';
            }

            if (empty($errors) == true) {
                $upload_dir = '../uploads/reestr_comp/';
                $name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
                $mov = move_uploaded_file($_FILES['image']['tmp_name'],$name_img);
                    
            } else {
                print $errors;
            }
}


$id = ($_POST['id']);

if(isset($name_img)) {
     
    $query ="UPDATE reestr_comps SET 
    image='$name_img'

    WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
        header('Location: /pages/p_reestr_comp.php');

}

// закрываем подключение
 mysqli_close($link);
//
get_footer ();

?>


