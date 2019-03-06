<?php

require __DIR__ . "/../../../app/database/db.php";

$faq = R::load("faq", $_GET["id"]);

R::trash($faq);

header("Location: /admin");