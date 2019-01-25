<?php

require __DIR__ . "/../../../app/database/db.php";

$user = R::load("users", $_GET["id"]);

R::trash($user);

header("Location: /admin");