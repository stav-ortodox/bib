<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    // подключаемся к базе
    require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $email = stripslashes($email);
    $email = htmlspecialchars(mysqli_real_escape_string($link, $email));
    $login = stripslashes($login);
    $login = htmlspecialchars(mysqli_real_escape_string($link, $login));
    $password = stripslashes($password);
    $password = htmlspecialchars(mysqli_real_escape_string($link, $password));
    $email = trim($email);
    $login = trim($login);
    $password = trim($password);
    $errors = array();
    $success = array();

 
    $result = mysqli_query($link, "SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с ввеливеденным логином
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    $errors[] = "Извините, введённый вами login или пароль неверный.";
    $_SESSION['errors'] = $errors;
    header('Location: '.PATH.'pages/p_login.php');
    exit();
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $login = $myrow['login'];
    $id = $myrow['id'];
    $email = $myrow['email'];
    
    cookies($login, $id, $email);

    $success = 'ok';
    $_SESSION['success'] = $success;
    header('Location: /index.php');
    }
    else {
    //если пароли не сошлись
    $errors[] = "Извините, введённый вами login или пароль неверный.";
    $_SESSION['errors'] = $errors;
    header('Location: '.PATH.'pages/p_login.php');
    exit();
    }
    }
    ?>