<?php 
session_start(); 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php'; 
// require_once $_SERVER['DOCUMENT_ROOT'].'/pages/admins/s_edit_publisher_post.php';   
   
$id = $_REQUEST['id'];
get_header_doc ("Редактирование единицы издания", 'Редактирование единицы издания');

// var_dump($_REQUEST);
// var_dump($_COOKIE);
// echo "<br>";
// echo "<br>";
// var_dump($_SERVER["REQUEST_URI"]);

// Получаем id блока в котором находится данная единица издания
$sql = "SELECT block_id FROM publishing_post WHERE id=$id";
            $result = mysqli_query($link, $sql);
             while($object = mysqli_fetch_object($result)){
$block_id = $object->block_id;
}    

// Получаем названия блока в котором находится данная единица издания
$sql = "SELECT block_name FROM publishing_blocks WHERE id=$block_id";
            $result = mysqli_query($link, $sql);
             while($object = mysqli_fetch_object($result)){
  $block_name = $object->block_name;
}   
?>


<div class='user_form'>
				
      <form action='/pages/admins/s_edit_publisher_post.php' method='POST' enctype='multipart/form-data'>
      <h4>Редактирование единицы издания</h4>

            <input type='hidden' name='id' value="<?php echo $id ?>" />
            <input type='hidden' name='block_id' value="<?php echo $block_id ?>" />   

            <label for="select_block">Выберите блок издания:</label>
            <?php 
            $sql = "SELECT * FROM publishing_blocks";
            $result_select = mysqli_query($link, $sql);
            /*Выпадающий список*/
            echo "<select name='select_block' autofocus>
            <option id='p-block-name' value='$block_name'>$block_name</option>";



            while($object = mysqli_fetch_object($result_select)){
            $block_name = $object->block_name;
            echo "<option value = '$block_name'> $object->block_name </option>";
            }
            echo "</select>";
            ?>


            <!-- выводим всю остальную информацию -->
            <?php 
            $sql = "SELECT * FROM publishing_post WHERE id=$id";
                        $result = mysqli_query($link, $sql);
                         while($object = mysqli_fetch_object($result)){
            $pub_name = $object->pub_name;
            $pub_description = $object->pub_description;
            $pub_hidden = $object->pub_hidden;
            $pub_image = $object->pub_image;
            $pub_file = $object->pub_file;
            }
            ?>


            <p>Изменить имя единицы издания:<br> 
            <input type='text' name='pub_name' value='<?php echo $pub_name ?>' /></p>

            <p>Описание единицы издания: <br> 
            <input type='text' name='pub_description' value='<?php echo $pub_description ?>' /></p>

            <p>Тип хранения данных: <br> 
            <input type='radio' name='pub_hidden' value='$pub_hidden'>Доступный</p>
            <input type='radio' name='pub_hidden' value=''>Скрытый</p>

            <p>Обложка единицы издания: <br> 
            <div class='img_edit'>
            <img src='<?php echo $pub_image ?>' width=300 height=300>
            </div>
            </p>

            <p>Выберите новую обложку: <br>

            <input type='file' name='pub_image' id='pub_image'></p>

            <p>Файл единицы издания: <br> 
            <div class='img_edit'>
            <img src='<?php echo $pub_file ?>' width=300 height=300>
            </div>
            </p>

            <p>Выберите новый файл: <br>

            <input type='file' name='pub_file' id='pub_file'></p>

            <input class='submit' type='submit' value='Сохранить'>
            <input class='submit' type='button' onclick='history.back();' value='Отмена'>
      </form>

</div>
<?php

get_footer ();

?>