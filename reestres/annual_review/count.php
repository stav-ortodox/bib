<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
//get_header_doc ('', 'Богослужебный журнал/Подсчет');
admin ();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- My css -->
    <link rel='stylesheet' href='/css/test.css'>
    <link rel='stylesheet' href='/css/bootstrap-grid.min.css'>
    <link rel='stylesheet' href='/css/bootstrap.css'>

    <!-- Fonts -->
    <link href="http://allfont.ru/allfont.css?fonts=ds-russia-demo" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
    <link href="http://allfont.ru/allfont.css?fonts=zanesennyj" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>
<body>
<?php
//table_reestr_comp('Богослужебный журнал|Подсчет');?>
<br>

<?$connection = "SELECT * FROM `count` ORDER BY `order`";
$query = mysqli_query($link, $connection);
foreach ($query as $item) { ?>
<div class="count">
    <h4><?=$item['slygba']?>: </h4>
    <form action="action.php" method="POST">
        <button type="submit" class="btn btn-indigo" name="id" value="<?=$item['id']?>">+1</button>
        <button type="submit" class="btn btn-danger" name="back" value="<?=$item['id']?>">-1</button>
        <?='('.$item['kolvo'].')'?>
    </form>
</div>
<?}?>

<div class="footer"></div>


</body>
</html>




