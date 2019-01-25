<?php

session_start();

require __DIR__ . "/../vendor/autoload.php";

use App\Database\UserRepo;
use App\Util\Encoder;

if (isset($_POST["log"])) {
    $repo = new UserRepo();

    $login = $_POST["login"];
    $pwd = $_POST["pwd"];

    $user = $repo->getByLogin($login);

    if ($user !== null) {
        if (Encoder::decode($user->password) === $pwd) {
            if ($user->login === "administrator" && $user->role === "admin") {
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