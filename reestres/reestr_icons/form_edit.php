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
        $query ="SELECT * FROM reestr_icons WHERE id = '$id'";
        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        //если в запросе более нуля строк
        if($result && mysqli_num_rows($result)>0) 
        {
            $row = mysqli_fetch_row($result); // получаем первую строку
            $id= $row[0];
            $name= $row[1];
            $desk= $row[2];
            $type= $row[3];
            $zakaz= $row[4];
            $izgotov= $row[5];
            $dostav= $row[6];
            $image= $row[7];
    }
    }
    
    ?>


    <div class="card-form">
        <form class="border border-light p-5" action="edit.php" method="POST" enctype="multipart/form-data">

            <p class="h4 mb-4 text-center"></p>

            <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control mb-4">

            <label for="name">Название иконы:</label>
            <textarea class="form-control mb-4" type="text" name="name" rows="10" cols="45"><?php echo $name ?></textarea> 

            <label for="desk">Описание:</label>
            <textarea class="form-control mb-4" type="text" name="desk" rows="10" cols="45"><?php echo $desk ?></textarea> 

            <label for="type">Изготовлена на:</label>
            <input class="form-control mb-4" type="text" name="type" value="<?php echo $type ?>">

            <label for="zakaz">Заказана:</label>
            <input class="form-control mb-4" type="text" name="zakaz" value="<?php echo $zakaz ?>">

            <label for="izgotov">Изготовлена:</label>
            <input class="form-control mb-4" type="text" name="izgotov" value="<?php echo $izgotov ?>">

            <label for="dostav">Доставлена:</label>
            <input class="form-control mb-4" type="text" name="dostav" value="<?php echo $dostav ?>">

            <div class="">
                <p>Прежнее изображение</p>
                <div class="box"><img class="img-thumbnail" src="<?php echo $image ?>" alt=""></div>
            </div>

            <label for="new_image">Новое изображение:</label>
            <input type="file" name="new_image" id="new_image" class="form-control mb-4" value="">


            <button class="btn btn-info btn-block my-4" type="submit">Сохранить изменения</button>
        </form>

    </div>




    <?php get_footer(); ?>

