<?php

require __DIR__ . "/../../../app/database/db.php";

try {
    $user = R::load("users", $_GET["id"]);

    $docs = R::findAll("docs", "WHERE userid=:userid", ["userid" => $user->id]);

    foreach ($docs as $doc) {
        unlink($doc->href);
    }

    R::trash($user);

    header("Location: /admin");
} catch (Exception $e) {
    header("Location: /admin");
}