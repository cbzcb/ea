<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['telegram'])) {$telegram = $_POST['telegram'];} 
$datas=  json_decode($_POST['data'], true);
$tg = $datas[2]['value'];
$emails = $datas[1]['value'];
$names = $datas[0]['value'];
/* Сюда впишите свою эл. почту */
$myaddres  = "info@enotadsnetwork.org"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка!\nТелеграм: $tg\nИмя: $names $mem";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ обратного звонка'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$emails");
 
/*ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');*/

?>