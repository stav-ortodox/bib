<?php  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php'; 
// require_once $_SERVER['DOCUMENT_ROOT'].'/pages/admins/s_edit_publisher_post.php';   
   
$id = $_REQUEST['id'];
get_header_site ("Редактирование единицы издания", "Редактирование единицы издания", 'Редактирование единицы издания');

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
$block_name_sel = $object->block_name;
}   
?>


<div class='user_form'>
				
      <form action='/pages/admins/s_edit_publisher_post.php' method='POST' enctype='multipart/form-data'>
      <h4>Редактирование единицы издания</h4>   

            <label for="select_block">Выберите блок издания:</label>
            <select class="custom-select" id="inlineFormCustomSelect" name="select_block">
                  <?php  
                  $query = ("SELECT DISTINCT id, block_name FROM publishing_blocks");
                  $result = mysqli_query($link, $query);
                  $row = mysqli_fetch_assoc($result);
                  foreach ($result as $row) { 
                        $block_name = $row['block_name'];
                        $id_option = $row['id'];
                        
                        if ($block_name == $block_name_sel) {
                              continue;
                        }?>
                        <option value="<?=$id_option?>"><?=$block_name?></option>
                        <?}?>
                        <option value="<?=$block_id?>" selected><?=$block_name_sel?></option>
                  </select>
                  <br><?
            
            // <!-- выводим всю остальную информацию -->
            $sql = "SELECT * FROM publishing_post WHERE id=$id";
            $result = mysqli_query($link, $sql);
            while($object = mysqli_fetch_object($result)){
            $pub_name = $object->pub_name;
            $pub_description = $object->pub_description;
            $pub_hidden = $object->pub_hidden;
            $pub_image = $object->pub_image;
            $pub_file = $object->pub_file;
            }?>


            <p>Изменить имя единицы издания:<br> 
            <input type='text' name='pub_name' value='<?php echo $pub_name ?>' /></p>

            <p>Описание единицы издания: <br> 
            <textarea name="pub_description" cols="30" rows="5"><?php echo $pub_description ?></textarea>

            <p>Тип хранения данных: <br> 
            <input type='radio' name='pub_hidden' value='$pub_hidden'>Доступный</p>
            <input type='radio' name='pub_hidden' value=''>Скрытый</p>

            <p>Обложка единицы издания: <br> 
            <div class='img_edit'>
            <img src='<?php echo $pub_image ?>' class='img-thumbnail img-fluid' style="height: 300px">
            </div>
            </p>

            <p>Выберите новую обложку: <br>
            <input type='file' name='pub_image' id='pub_image'></p>

            <!-- <p>Файл единицы издания: <br> 
            <div class='img_edit'>
            <img src='<?php echo $pub_file ?>' class='img-thumbnail img-fluid' style="height: 300px">
            </div>
            </p> -->

            <p>Выберите новый файл: <br>
            <input type='file' name='pub_file' id='pub_file'></p>
            
            <!-- Скрытые инпуты с айдишниками -->
            <input type='hidden' name='id' value="<?php echo $id ?>" /> <!-- id издания --> 
            <input type='hidden' name='block_id' value="<?php echo $block_id ?>" /> <!-- id родного блока --> 

            <input class='submit' type='submit' value='Сохранить'>
            <input class='submit' type='button' onclick='history.back();' value='Отмена'>
      </form>

</div>
<?php

get_footer ();
?>