<?php

require __DIR__ . "/../vendor/autoload.php";

use App\Database\UserRepo;
use App\Util\Encoder;

if(isset($_POST["email"])) {
    $repo = new UserRepo();
    $user = $_POST["email"];
    $to = "example@gmail.com";
    $subject = "Восстановление пароля";

    $user = $repo->getByLogin($user);

    if($user !== null) {
        $message = "Ваш пароль: " . Encoder::decode($user->password);
    }else {
        $message = "К сожалению вы не зарегистрированы у нас в системе!";
    }

    mail($to, $subject, $message);
}