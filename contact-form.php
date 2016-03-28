<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
/* $email = htmlspecialchars($_POST["email"]); */
$tel = htmlspecialchars($_POST["tel"]);
/* $website = htmlspecialchars($_POST["website"]); */
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "pochta@kakoy-to-sajt.com";
$sub = "Сообщение с сайта mckconsult.ru";

/* Формат письма */
$mes = "Сообщение с сайта mckconsult.\n
Имя отправителя: $name 
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