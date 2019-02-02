<?php

require __DIR__ . "/../../app/util/ViewGenerator.php";

use App\Util\ViewGenerator;

if(isset($_POST["method"])) {
    $method = $_POST["method"];
    if($method === "getNews") {
        echo ViewGenerator::getNews($_POST["count"]);
    }
}