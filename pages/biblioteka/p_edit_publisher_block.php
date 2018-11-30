<?php 
session_start(); 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/pages/biblioteka/s_edit_publisher_block.php';   
  

get_header_doc ("Редактирование блока издания", 'Редактирование блока издания');

?>

            <div class='user_form'>
        				
            <form action='/pages/biblioteka/s_edit_publisher_block.php' method='POST' enctype='multipart/form-data'>
            <h4><?php echo $block_name ?></h4>
            <input type='hidden' name='id' value="<?php echo $id ?>" />

            <p>Изменить имя блока издания:<br> 
            <input type='text' name='block_name' value='<?php echo $block_name ?>' /></p>

            <p>Изменить описание блока издания: <br> 
            <input type='text' name='block_description' value='<?php echo $block_description ?>' /></p>

                  <br> 

<?php 
if ($block_hidden == 0):
      echo '
      <div class="checkbox">
            
            <p>Сделать блок данного издания скрытым:</p>
            <input id="close" type="checkbox" name="close" value="yes">
    
      </div>
            ';

elseif ($block_hidden == 1):
       echo '
      <div class="checkbox">
            
            <p>Сделать блок данного издания открытым:</p>
            <input id="close" type="checkbox" name="close" value="no">
    
      </div>
            ';
else :
endif;
?>

            <p>Обложка блока издания: <br> 
            <div class='img_edit'>
            <img src='<?php echo $block_image ?>'>
            </div>
            </p>

            <p>Выбрать новую обложку: <br>
            
            <input type='file' name='block_image' id='block_image'></p>

            <input class='submit' type='submit' value='Сохранить'>
            <input class='submit' type='button' onclick='history.back();' value='Отмена'>
            </form>
            
            </div>
<?php

get_footer ();

?>