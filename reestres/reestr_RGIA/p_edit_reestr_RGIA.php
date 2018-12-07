<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_doc('Форма редактирования', 'Форма редактирования');


if(isset($_GET['id']))
{   
    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
     
    // создание строки запроса
    $query ="SELECT * FROM reestr_rgia WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0) 
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $id=$row[0];
        $fond= $row[1];
        $opis= $row[2];
        $delo= $row[3];
        $nach= $row[4];
        $okonch= $row[5];
        $naimen= $row[6];
        $listov= $row[7];
        $prim= $row[8];
        $tom= $row[9];
        $zakaz= $row[10];
        $poluch= $row[11];
        $zakaz_cop= $row[12];
        $poluch_cop= $row[13];
}
}
?>


        <div class="card-form">
            <form class="border border-light p-5" action="s_edit_reestr_RGIA.php" method="POST">

            <p class="h4 mb-4 text-center"></p>

            <input type="text" name="id" value="<?php echo $id ?>" class="form-control mb-4">

            <label for="fond">Фонд:</label>
            <input type="text" name="fond" class="form-control mb-4" value="<?php echo $fond ?>">

            <label for="opis">Опись:</label>
            <input type="text" name="opis" class="form-control mb-4" value="<?php echo $opis?>">

            <label for="delo">Дело:</label>
            <input type="text" name="delo" class="form-control mb-4" value="<?php echo $delo ?>">

            <label for="nach">Начато:</label>
            <input type="text" name="nach" class="form-control mb-4" value="<?php echo $nach ?>">

            <label for="okonch">Окончено:</label>
            <input type="text" name="okonch" class="form-control mb-4" value="<?php echo $okonch ?>">

            <label for="naimen">Наименование:</label>
            <textarea name="naimen" class="form-control mb-4"><?php echo $naimen ?></textarea>

            <label for="listov">Кол-во листов:</label>
            <input type="text" name="listov" class="form-control mb-4" value="<?php echo $listov ?>">

            <label for="prim">Примечание:</label>
            <input type="text" name="prim" class="form-control mb-4" value="<?php echo $prim ?>">

            <label for="tom">Том:</label>
            <input type="text" name="tom" class="form-control mb-4" value="<?php echo $tom ?>">

            <label for="zakaz">Заказано:</label>
            <input type="text" name="zakaz" class="form-control mb-4" value="<?php echo $zakaz ?>">

            <label for="poluch">Получено в ч/з РГИА:</label>
            <input type="text" name="poluch" class="form-control mb-4" value="<?php echo $poluch ?>">

            <label for="zakaz_cop">Заказана копия:</label>
            <input type="text" name="zakaz_cop" class="form-control mb-4" value="<?php echo $zakaz_cop ?>">

            <label for="poluch_cop">Получена копия:</label>
            <input type="text" name="poluch_cop" class="form-control mb-4" value="<?php echo $poluch_cop ?>">

            <div class="custom-control custom-checkbox mb-4">
                <input type="checkbox" class="custom-control-input" id="gotovnost" name="gotovnost">
                <label class="custom-control-label" for="gotovnost">Готовность</label>
            </div>

            <button class="btn btn-info btn-block my-4" type="submit">Изменить</button>
        </form>

        </div>




get_footer(); ?>