<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

if (isset ($_POST['id'])) {
    $id = $_POST['id'];
    $connectionCount = "SELECT `kolvo` FROM `count` WHERE `id`= $id";
    $queryCount = mysqli_query($link, $connectionCount) or die ("Ошибка " . mysqli_error($link));
    $row = mysqli_fetch_array($queryCount);
    $newCount = $row['kolvo'] + 1;

    $connectionUpdate = "UPDATE `count` SET `kolvo` = $newCount WHERE `id`= $id";
    $queryUpdate = mysqli_query($link, $connectionUpdate) or die ("Ошибка " . mysqli_error($link));
    header("Location: count.php");
//    echo "<script>window.location.href = history.go(-2);</script>";
}
if (isset ($_POST['back'])) {
    $id = $_POST['back'];
    $connectionCount = "SELECT `kolvo` FROM `count` WHERE `id`= $id";
    $queryCount = mysqli_query($link, $connectionCount) or die ("Ошибка " . mysqli_error($link));
    $row = mysqli_fetch_array($queryCount);
    $newCount = $row['kolvo'] - 1;

    $connectionUpdate = "UPDATE `count` SET `kolvo` = $newCount WHERE `id`= $id";
    $queryUpdate = mysqli_query($link, $connectionUpdate) or die ("Ошибка " . mysqli_error($link));
    header("Location: count.php");
}
?>