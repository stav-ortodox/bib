<?php 
session_start(); 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
get_header_doc ('Форма редактирования', 'Форма редактирования');  
?>

	<?php
	// если запрос POST 

    if(isset($_POST['id'])){


    $fond = htmlentities(mysqli_real_escape_string($link, $_POST['fond']));
    $opis = htmlentities(mysqli_real_escape_string($link, $_POST['opis']));
    $delo = htmlentities(mysqli_real_escape_string($link, $_POST['delo']));
    $nach = htmlentities(mysqli_real_escape_string($link, $_POST['nach']));
    $okonch = htmlentities(mysqli_real_escape_string($link, $_POST['okonch']));
    $naimen = htmlentities(mysqli_real_escape_string($link, $_POST['naimen']));
    $listov = htmlentities(mysqli_real_escape_string($link, $_POST['listov']));
    $prim = htmlentities(mysqli_real_escape_string($link, $_POST['prim']));
    $tom = htmlentities(mysqli_real_escape_string($link, $_POST['tom']));
    $zakaz = htmlentities(mysqli_real_escape_string($link, $_POST['zakaz']));
    $poluch = htmlentities(mysqli_real_escape_string($link, $_POST['poluch']));
    $zakaz_cop = htmlentities(mysqli_real_escape_string($link, $_POST['zakaz_cop']));
    $poluch_cop = htmlentities(mysqli_real_escape_string($link, $_POST['poluch_cop']));
    $gotovnost = htmlentities(mysqli_real_escape_string($link, $_POST['gotovnost']));
     
    $query ="UPDATE reestr_rgia SET 
        fond='$fond',
        opis='$opis',
        delo='$delo',
        nach='$nach',
        okonch='$okonch',
        naimen='$naimen',
        listov='$listov',
        prim='$prim',
        tom='$tom',
        zakaz='$zakaz',
        poluch='$poluch',
        zakaz_cop='$zakaz_cop',
        poluch_cop='$poluch_cop'
       
    
    WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
    if($result)
    header('Location: p_reestr_rgia.php');
   
    
}
 
// если запрос GET
if(isset($_GET['id']))
{   
    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
     
    // создание строки запроса
    $query ="SELECT * FROM reestr_rgia WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0) 
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $fond= $row[1];
        $opis= $row[2];
        $delo= $row[3];
        $nach= $row[4];
        $okonch= $row[5];
        $naimen= $row[6];
        $listov= $row[7];
        $prim= $row[8];
        $tom= $row[9];
        $zakaz= $row[10];
        $poluch= $row[11];
        $zakaz_cop= $row[12];
        $poluch_cop= $row[13];
      
        

        echo "<div class='card-form'>
            <form class='border border-light p-5' action='' method='POST'>

            <p class='h4 mb-4 text-center'></p>
            
            <input type='hidden' name='id' value='$id' class='form-control mb-4'>

            <label for=fond>Фонд:</label>
            <input type=text name='fond' value='$fond' class='form-control mb-4'>

            <label for='opis'>Опись:</label>
            <input type=text name='opis' value='$opis' class='form-control mb-4'>

            <label for=delo>Дело:</label>
            <input type=text name='delo' value='$delo' class='form-control mb-4'>

            <label for='nach'>Начато:</label>
            <input type='text' name='nach' value='$nach' class='form-control mb-4'>

            <label for='okonch'>Окончено:</label>
            <input type='text' name='okonch' value='$okonch' class='form-control mb-4'>

            <label for='naimen'>Наименование:</label>
            <textarea name='naimen' class='form-control mb-4'>$naimen</textarea>

            <label for='listov'>Кол-во листов:</label>
            <input type='text' name='listov' value='$listov' class='form-control mb-4'>

            <label for='prim'>Примечание:</label>
            <input type='text' name='prim' value='$prim' class='form-control mb-4'>

            <label for='tom'>Том:</label>
            <input type='text' name='tom' value='$tom' class='form-control mb-4'>

            <label for='zakaz'>Заказано:</label>
            <input type='text' name='zakaz' value='$zakaz' class='form-control mb-4'>

            <label for='poluch'>Получено в ч/з РГИА:</label>
            <input type='text' name='poluch' value='$poluch' class='form-control mb-4'>

            <label for='zakaz_cop'>Заказана копия:</label>
            <input type='text' name='zakaz_cop' value='$zakaz_cop' class='form-control mb-4'>

            <label for='poluch_cop'>Получена копия:</label>
            <input type='text' name='poluch_cop' value='$poluch_cop' class='form-control mb-4'>

           

            <button class='btn btn-info btn-block my-4' type='submit'>Добавить</button>
            </form>

            </div>";

        mysqli_free_result($result);
    }
}
// if ($_FILES['image']['size'] > 0) { 

//     $errors = array();
//     $file_name = $_FILES['image']['name'];
//     $file_size = $_FILES['image']['size'];
//     $file_tmp = $_FILES['image']['tmp_name'];
//     $file_type = $_FILES['image']['type'];
//     $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
//     $expensions = array("jpeg", "jpg", "png");

//             if ($file_size > 2097152) {
//                 $errors[] = 'Файл должен быть не более 2мб';
//             }

//             if (empty($errors) == true) {
//                 $upload_dir = '../uploads/reestr_comp/';
//                 $name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
//                 $mov = move_uploaded_file($_FILES['image']['tmp_name'],$name_img);
                    
//             } else {
//                 print $errors;
//             }
// }


// $id = ($_POST['id']);

//     if(isset($id)) {
     
//     $query ="UPDATE reestr_rgia SET 
//         fond='$fond',
//         opis='$opis',
//         delo='$delo',
//         nach='$nach',
//         okonch='$okonch',
//         naimen='$naimen',
//         listov='$listov',
//         prim='$prim',
//         tom='$tom',
//         zakaz='$zakaz',
//         poluch='$poluch',
//         zakaz_cop='$zakaz_cop',
//         poluch_cop='$poluch_cop',
//         gotovnost='$gotovnost'

//     WHERE id='$id'";
//     $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
//     if($result)
//         echo "<span style='color:blue;'>Данные обновлены</span>";
//         header('Location: p_reestr_rgia.php');
// }

// закрываем подключение

get_footer ();
?>


