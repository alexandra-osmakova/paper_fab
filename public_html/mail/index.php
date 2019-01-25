<?php

header('Refresh: 5; url=/', true, 301);

if (isset($_POST["modal_btn"])) {
    $to = "example@mail.ru";
    $subject = "Заявка :: KBF.SU";

    $message = "Имя: " . $_POST["name"] . "\nКонтакт: " . $_POST["phone-number"];

    echo $message;
    //mail($to, $subject, $message);
}