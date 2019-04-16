<?php 
// $name = $_POST['user_name'];
// $phone = $_POST['user_phone'];
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'stav-ortodox@mail.ru';                 // Наш логин
$mail->Password = 'beeline1';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->setFrom('stav-ortodox@mail.ru', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');   // От кого письмо 
$mail->addAddress('stav-ortodox@yandex.ru');
//$mail->addAddress('');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
// $mail->Subject = "Запрос на восстановление пароля на сайте " . "Лавка Ароматов";
// $mail->Body    = '
// 	Чтобы восстановить пароль перейдите по ссылке <br> 
//  ' . $link . '';
$mail->AltBody = 'Что-то пошло не так(((';
if(!$mail->send()) {
    echo "Что-то пошло не так((( Возможно проблема с подключением к сети Интернет!";
} else {
    header('location: PATH');
}
?>