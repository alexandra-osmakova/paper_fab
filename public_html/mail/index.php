<?php

header('Refresh: 0; url=/thanx_page.php', true, 301);

if (isset($_POST["modal_btn"])) {
    $to = "example@mail.ru";
    $subject = "Заявка :: KBF.SU";

    $message = "Имя: " . $_POST["name"] . "\nКонтакт: " . $_POST["phone-number"];

    echo $message;
    //mail($to, $subject, $message);
}