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
            $place= $row[4];
            $of_face= $row[5];
            $sost= $row[6];
            $image= $row[7];
    }
    }
    
    ?>


    <div class="card-form">
        <form class="border border-light p-5" action="s_edit_reestr_comps.php" method="POST">

            <p class="h4 mb-4 text-center"></p>

            <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control mb-4">

            <label for="name">Наименование:</label>
            <input type="text" name="name" class="form-control mb-4" value="<?php echo $name ?>">

            <label for="name_type">Марка/Модель:</label>
            <input type="text" name="name_type" class="form-control mb-4" value="<?php echo $name_type?>">

            <label for="characterics">Характеристики:</label>
            <textarea name="characterics" class="form-control mb-4"><?php echo $characterics ?></textarea>

            <label for="place">Место нахождения:</label>
            <input type="text" name="place" class="form-control mb-4" value="<?php echo $place ?>">

            <label for="of_face">Ответственное лицо:</label>
            <input type="text" name="of_face" class="form-control mb-4" value="<?php echo $of_face ?>">

            <label for="sost">Состояние:</label>
            <input type="text" name="sost" class="form-control mb-4" value="<?php echo $sost ?>">

            <div class="">
                <p>Прежнее изображение</p>
                <div class="box"><img class="img-thumbnail" src="<?php echo $image ?>" alt=""></div>
            </div>

            <label for="image">Новое изображение:</label>
            <input type="file" name="image" id="image" class="form-control mb-4" value="">


            <button class="btn btn-info btn-block my-4" type="submit">Изменить</button>
        </form>

    </div>




    <?php get_footer(); ?>


