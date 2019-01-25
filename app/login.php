<?php

session_start();

require __DIR__ . "/util/Encoder.php";
require __DIR__ . "/database/db.php";

use App\Util\Encoder;

if (isset($_POST["log"])) {
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];

    $user = R::findOne("users", "WHERE login=:login", ["login" => $login]);

    if ($user !== null) {
        if (Encoder::decode($user->password) === $pwd) {
            if ($user->login === "administrator") {
                $location = "/admin";
            } else {
                $location = "/user";
            }
            $_SESSION["user"] = Encoder::encode($user->login);
            header("Location: " . $location);
        } else {
            echo "<script>alert('Неправильный логин или пароль'); location.href='/login'</script>";
        }
    } else {
        echo "<script>alert('Неправильный логин или пароль');location.href='/login'</script>";
    }
}