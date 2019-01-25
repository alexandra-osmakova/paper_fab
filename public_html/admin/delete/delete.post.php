<?php

require __DIR__ . "/../../../app/database/db.php";

$post = R::load("posts", $_GET["id"]);

R::trash($post);

header("Location: /admin");