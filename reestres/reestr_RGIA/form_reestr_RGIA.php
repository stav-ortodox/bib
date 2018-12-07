<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_doc('Форма реестра дел РГИА', 'Форма реестра дел РГИА');
?>

<div class="card-form">
	<form class="border border-light p-5" action="s_reestr_RGIA.php
	      " method="POST">

    <p class="h4 mb-4 text-center"></p>

    <label for="fond">Фонд:</label>
    <input type="text" name="fond" class="form-control mb-4" placeholder="796">

    <label for="opis">Опись:</label>
    <input type="text" name="opis" class="form-control mb-4" placeholder="186">

    <label for="delo">Дело:</label>
    <input type="text" name="delo" class="form-control mb-4" placeholder="444">

    <label for="nach">Начато:</label>
    <input type="text" name="nach" class="form-control mb-4" placeholder="27.07.1904">

    <label for="okonch">Окончено:</label>
    <input type="text" name="okonch" class="form-control mb-4" placeholder="03.09.1905">

    <label for="naimen">Наименование:</label>
    <textarea name="naimen" class="form-control mb-4" placeholder="«О ревизии Ставропольской духовной семинарии»"></textarea>

    <label for="listov">Кол-во листов:</label>
    <input type="text" name="listov" class="form-control mb-4" placeholder="14">

    <label for="prim">Примечание:</label>
    <input type="text" name="prim" class="form-control mb-4" placeholder="Примечание">

    <label for="tom">Том:</label>
    <input type="text" name="tom" class="form-control mb-4" placeholder="III">

    <label for="zakaz">Заказано:</label>
    <input type="text" name="zakaz" class="form-control mb-4" placeholder="24.05.2018">

    <label for="poluch">Получено в ч/з РГИА:</label>
    <input type="text" name="poluch" class="form-control mb-4" placeholder="01.06.2018">

    <label for="zakaz_cop">Заказана копия:</label>
    <input type="text" name="zakaz_cop" class="form-control mb-4" placeholder="Фотокопия сделана: 24.05.2018 или просто: 24.05.2018">

    <label for="poluch_cop">Получена копия:</label>
    <input type="text" name="poluch_cop" class="form-control mb-4" placeholder="на почте в Ставрополе 20.07.2018">

    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="gotovnost" name="gotovnost">
        <label class="custom-control-label" for="gotovnost">Готовность</label>
    </div>

    <button class="btn btn-info btn-block my-4" type="submit">Добавить</button>
</form>

</div>



<?php get_footer(); ?>
