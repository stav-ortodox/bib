<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 


    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
 // подключаемся к базе
    require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином

    
    $result = mysqli_query($link, "SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($link, "INSERT INTO users (login,password) VALUES('$login','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    session_start();


    // *****************************

    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
        if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
        //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
        {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
        }
        //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
        $login = stripslashes($login);
        $login = htmlspecialchars($login);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);
    //удаляем лишние пробелы
        $login = trim($login);
        $password = trim($password);
    // подключаемся к базе
        require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
     
        $result = mysqli_query($link, "SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с ввеливеденным логином
        $myrow = mysqli_fetch_array($result);
        if (empty($myrow['password']))
        {
        //если пользователя с введенным логином не существует

        exit ("Извините, введённый вами login или пароль неверный.");
        }

        else {
        //если существует, то сверяем пароли
        if ($myrow['password']==$password) {
        //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
        $_SESSION['login']=$myrow['login']; 
        $_SESSION['id']=$myrow['id'];
        //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
        header('Location: /index.php');
        }
        else {
        //если пароли не сошлись

        exit ("Извините, введённый вами login или пароль неверный.");
        }
        }

    // ************************************
     
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>