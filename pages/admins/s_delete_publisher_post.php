<?php session_start();
 require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
 
get_header_doc ("Удаление единицы издания из блока", "Удаление единицы издания из блока");

 if(isset($_POST['id'])){

 
    $id = mysqli_real_escape_string($link, $_POST['id']);
     
    $query ="DELETE FROM publishing_post WHERE id = '$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    mysqli_close($link);
    // перенаправление на скрипт index.php
    
    echo "<script>window.location.href = history.go(-2);
    </script>";
    header('Location: /pages/biblioteka/p_publishing_page.php?id=$id');
    
}

?>

<?php
if(isset($_GET['id']))
{   
    $id = htmlentities($_GET['id']);

    get_open_form ('', 'POST', 'Внимание! Это действие удалит только файл единицы издания!', '');
    echo"<div class='user_form'>
        <form method='POST'>
        <p>Вы действительно хотите удалить эту единицу издания?</p>
        <p>...информация содержащаяся в единице:</p>
        <input type='hidden' name='id' value='$id' />
        <div style='text-align: center;'>
        <button class='submit' type='submit'>Удалить</button>
        <button class='submit' type='button' onclick='history.back();'>Отмена</button>
        </div>
        </form>
    </div>";
}
echo"</form>
	</div>"
?>