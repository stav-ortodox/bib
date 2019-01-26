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
        $query ="SELECT * FROM inventory_altar WHERE id = '$id'";
        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        //если в запросе более нуля строк
        if($result && mysqli_num_rows($result)>0) 
        {
            $row = mysqli_fetch_row($result); // получаем первую строку
            $id= $row[0];
            $name= $row[1];
            $count= $row[2];
            $image= $row[3];
            $position= $row[4];
            $desk= $row[5];
           
    }
    }
   
    ?>


    <div class="user_form">
        <form action="edit.php" method="POST" enctype="multipart/form-data">
            <h4>Введение данных</h4>
            
            <input type="hidden" name="id" value="<?= $id ?>">

            <label for="position">Место нахождения:</label>
            <select class="form-control mb-4" name='position'>
                <option selected>Верхний алтарь храма св. Вел. и Цел. Пантeлеимона</option>
                <option>Нижний алтарь храма в честь иконы Божией Матери "Феодоровская"</option>
            </select>

            <label for="name">Наименование:</label>
            <input class="form-control mb-4" type="text" name="name" value="<?= $name ?>">

            <label for="count">Количество:</label>
            <input class="form-control mb-4" type="number" name="count" value="<?= $count ?>">

            <label for="desk">Описание:</label>
            <textarea class="form-control mb-4" type="text" name="desk" rows="5" cols="45"><?=$desk?></textarea>

            <label for="image">Прежняя фотография:</label>
            <img class="img-thumbnail m-4" style="width: 200px;" src="<?= $image ?>" alt="">

            <label for="new_image">Новая фотография:</label>
            <input class="form-control mb-4" type="file" name="new_image" id="new_image" >

            <input class="btn btn-info btn-block my-4" type="submit" value="Готово!">
        </form>

    </div>




    <?php get_footer(); ?>

