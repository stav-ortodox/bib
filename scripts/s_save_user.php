<?php require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

$errors = array();
$success = array();
 
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (isset($_POST['password2'])) { $password2=$_POST['password2']; if ($password2 =='') { unset($password2);} }
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
    if ($password2 !== $password) { 
        $errors[] = "Пароли не совпадают!";
        $_SESSION['errors'] = $errors;
        header('Location: '.PATH.'pages/p_registration.php');
        unset($password); 
        exit();
    }
    if (empty($login) or empty($password) or empty($password2) or empty($email)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
        $errors[] = "Вы ввели не всю информацию, заполните пожалуйста все поля!";
        $_SESSION['errors'] = $errors;
        header('Location: '.PATH.'pages/p_registration.php');
        exit();
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $email = stripslashes($email);
    $email = htmlspecialchars(mysqli_real_escape_string($link, $email));
    $login = stripslashes($login);
    $login = htmlspecialchars(mysqli_real_escape_string($link, $login));
    $password = stripslashes($password);
    $password = htmlspecialchars(mysqli_real_escape_string($link, $password));
    $email = trim($email);
    $login = trim($login);
    $password = trim($password);
 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link, "SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    $errors[] = "Извините, введённый вами логин уже зарегистрирован. Введите другой логин.";
    $_SESSION['errors'] = $errors;
    header('Location: '.PATH.'pages/p_registration.php');
    exit();
    }

    // проверка на существование пользователя с такой почтой
    $result = mysqli_query($link, "SELECT id FROM users WHERE email='$email'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    $errors[] = "Извините, введённая вами почта уже зарегистрированна.";
    $_SESSION['errors'] = $errors;
    header('Location: '.PATH.'pages/p_registration.php');
    exit();
    }


 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($link, "INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE') {
        session_start();
        if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
            if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
            //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
            if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
            //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
        if (empty($login) or empty($password) or empty($email)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
            {
            $errors[] = "Вы ввели не всю информацию, заполните пожалуйста все поля!";
            $_SESSION['errors'] = $errors;
            header('Location: '.PATH.'pages/p_registration.php');
            exit();
            }
            require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
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

         
            $result = mysqli_query($link, "SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с ввеливеденным логином
            $myrow = mysqli_fetch_array($result);
            if (empty($myrow['password'])) {
            //если пользователя с введенным логином не существует
            $errors[] = "Извините, введённый вами login или пароль неверный.";
            $_SESSION['errors'] = $errors;
            header('Location: '.PATH.'pages/p_registration.php');
            exit();
            } else {
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
            $errors[] = "Извините, введённый вами login или пароль неверный.";
            $_SESSION['errors'] = $errors;
            header('Location: '.PATH.'pages/p_registration.php');
            exit();
            }
        }
    }
 else {
    $errors[] = "Ошибка регистрации. Попробуйте ещё раз.";
    $_SESSION['errors'] = $errors;
    header('Location: '.PATH.'pages/p_registration.php');
    exit();
    }
    $success = 'ok';
    $_SESSION['success'] = $success;
    header('Location: /index.php');
    ?>