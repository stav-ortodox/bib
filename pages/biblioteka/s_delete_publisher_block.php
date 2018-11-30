<?php session_start();
 require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
 
get_header_doc ("Удаление блока издания", "Удаление блока издания");

 

 if(isset($_POST['id'])){



    $id = mysqli_real_escape_string($link, $_POST['id']);


    $query = "SELECT * FROM publishing_blocks WHERE
    id='$id'";
    $result = mysqli_query($link, $query) or die ("ОШИБКА " . mysqli_error($link));
    while($object = mysqli_fetch_object($result))
    $name_del_img = $object->block_image; 


    if (isset($name_del_img) && $name_del_img != null) {
        @unlink($name_del_img);
    }
    

    $query ="DELETE FROM publishing_blocks WHERE id = '$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

// var_dump($_POST['id']);
// var_dump($object->block_image);
    
    mysqli_close($link);

    // перенаправление на скрипт index.php
    echo "<script>window.location.href = history.go(-2);
    </script>";
    header('Location: /pages/biblioteka/p_biblioteka.php');
}

?>

<?php
if(isset($_GET['id']))
{   
    $id = htmlentities($_GET['id']);

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
    }
    
        mysqli_free_result($result);


    get_open_form ('', 'POST', '<p class="warning">Внимание! Удаление этого блока повлечёт за собой удаление всех изданий содержащихся в блоке </p><strong>'.$block_name.'</strong><p class="warning">!</p>', '');
    echo"<div class='user_form'>
        <form method='POST'>
        <p class='text-center'>Вы действительно хотите удалить блок: <strong>$block_name</strong>?</p>

        <div class='info'>
            <strong>Информация содержащаяся в блоке:</strong><hr>
            <strong>Название блока: </strong> <blockquote>$block_name</blockquote>
            <strong>Обложка блока:</strong>
            <div class='img_edit img-fluid'>
                <img src='".$block_image."' alt=''>
            </div>
            <strong>Описание блока: </strong><blockquote>$block_description</blockquote>
            <strong>Содержание блока: </strong><blockquote>$block_description</blockquote>
        </div>

        <input type='hidden' name='id' value='$id' />
        <div style='text-align: center;'>
        <button class='submit' type='submit'>Удалить</button>
        <button class='submit' type='button' onclick='history.back();'>Отмена</button>
        </div>
        </form>
    </div>";
}
echo"</form>
	</div>";

get_footer ();
?>