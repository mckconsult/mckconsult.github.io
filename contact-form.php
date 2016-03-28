<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"], ENT_COMPAT, 'cp1251');
$email = htmlspecialchars($_POST["email"], ENT_COMPAT, 'cp1251');
$tel = htmlspecialchars($_POST["tel"], ENT_COMPAT, 'cp1251');
/* $website = htmlspecialchars($_POST["website"], ENT_COMPAT, 'cp1251'); */
$message = htmlspecialchars($_POST["message"], ENT_COMPAT, 'cp1251');
$bezspama = htmlspecialchars($_POST["bezspama"], ENT_COMPAT, 'cp1251');

/* Ваш адрес и тема сообщения */
$address = "vizitka36@mail.ru";
$sub = "Сообщение с сайта mckconsult.ru";

/* Формат письма */
$mes = "Сообщение с сайта mckconsult.\n
Имя отправителя: $name
E-mail: $email
Телефон отправителя: $tel
Текст сообщения: $message";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n"; 
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=http://mckconsult.ru');
	echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт mckconsult.ru';}
else {
	header('Refresh: 5; URL=http://mckconsult.ru');
	echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY';}
}
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>
