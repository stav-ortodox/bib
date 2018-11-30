<?php session_start();
 require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';  
get_header_doc ('Форма удаления', 'Форма удаления');


if(isset($_POST['id'])){
 
    $id = mysqli_real_escape_string($link, $_POST['id']);
     
    $query ="DELETE FROM reestr_comps WHERE id = '$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    mysqli_close($link);
    // перенаправление на скрипт index.php
    // header('Location: p_reestr_comp.php');
  // header('Location: '.$_SERVER["HTTP_REFERER"]);
    echo "<script>window.location.href = history.go(-2);
    </script>";
    header('Location: /pages/p_reestr_comp.php');
    
}

?>

<?php
if(isset($_GET['id']))
{   
    $id = htmlentities($_GET['id']);

    echo "
    <div class='user_form'>
        <form method='POST'>
        <h4>Удалить эту запись?</h4>
        <input type='hidden' name='id' value='$id' />
        <div style='text-align: center;'>
        <button class='submit' type='submit'>Удалить</button>
        <button class='submit' type='button' onclick='history.back();'>Отмена</button>
        </div>
        </form>
    </div>";
}



get_footer ();
?>
