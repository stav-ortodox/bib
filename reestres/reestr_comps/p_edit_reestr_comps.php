<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 


get_header_doc ('Форма редактирования', 'Форма редактирования');
admin ();


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
            $id= $row[0];
            $name= $row[1];
            $name_type= $row[2];
            $characterics= $row[3];
            $house= $row[4];
            $place= $row[5];
            $of_face= $row[6];
            $sost= $row[7];
            $image= $row[8];
    }
    }
    
    ?>


    <div class="card-form">
        <form class="border border-light p-5" action="s_edit_reestr_comps.php" method="POST" enctype="multipart/form-data">

            <p class="h4 mb-4 text-center"></p>

            <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control mb-4">

            <label for="name">Наименование:</label>
            <input type="text" name="name" class="form-control mb-4" value="<?php echo $name ?>">

            <label for="name_type">Марка/Модель:</label>
            <input type="text" name="name_type" class="form-control mb-4" value="<?php echo $name_type?>">

            <label for="characterics">Характеристики:</label>
            <textarea name="characterics" class="form-control mb-4"><?php echo $characterics ?></textarea>


            <label for="house">Место нахождения:</label>
            <select class="form-control mb-4" name='house'>
                <option selected><?php echo $house?></option>
                <?php 
                $select_query = sprintf("SELECT `house` FROM `house` ORDER BY `house`");
                $result = mysqli_query($link, $select_query);
                while ($houses = mysqli_fetch_array($result)) {
                    if ($houses['house'] == $house) {
                        continue;
                    }
                   echo "<option>".$houses['house']."</option>";
               }
               ?>
           </select>

           <label for="place">Помещение нахождения:</label>
           <select class="form-control mb-4" name='place'>
            <option selected><?php echo $place ?></option>
            <?php 
            $select_query = sprintf("SELECT `place` FROM `place` ORDER BY `place`");
                           $result = mysqli_query($link, $select_query);
                           while ($places = mysqli_fetch_array($result)) {
                               if ($places['place'] == $place) {
                                   continue;
                               }
                              echo "<option>".$places['place']."</option>";
                          }
            ?>
        </select>


        <label for="of_face">Ответственное лицо:</label>
        <input type="text" name="of_face" class="form-control mb-4" value="<?php echo $of_face ?>">

        <label for="sost">Состояние:</label>
        <input type="text" name="sost" class="form-control mb-4" value="<?php echo $sost ?>">

        <div class="">
            <p>Прежнее изображение</p>
            <div class="box"><img class="img-thumbnail" src="<?php echo $image ?>" alt=""></div>
        </div>

        <label for="new_image">Новое изображение:</label>
        <input type="file" name="new_image" id="new_image" class="form-control mb-4" value="">


        <button class="btn btn-info btn-block my-4" type="submit">Изменить</button>
    </form>

</div>




    <?php get_footer(); ?>


