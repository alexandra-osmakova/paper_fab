<?php

require __DIR__."/../../app/util/Encoder.php";
require __DIR__ . "/../../app/database/db.php";

use App\Util\Encoder;

if(isset($_POST["email"])) {
    $user = $_POST["email"];
    $to = "example@gmail.com";
    $subject = "Восстановление пароля";

    $user = R::findOne("users", "WHERE login=:login", ["login" => $user]);

    if($user !== null) {
        $message = "Ваш пароль: " . Encoder::decode($user->password);
    }else {
        $message = "К сожалению вы не зарегистрированы у нас в системе!";
    }

    mail($to, $subject, $message);
}