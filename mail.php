<?php

$recepient = "shutka92_92@mail.ru";
$sitename = "УЧЕБНЫЙ АДАПТИВНЫЙ САЙТ №1";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \r\nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\r\n From: $recepient");
