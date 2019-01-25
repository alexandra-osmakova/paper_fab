<?php

require __DIR__ . "/../../vendor/autoload.php";

use RedBeanPHP\R;

R::setup("mysql:host=localhost;dbname=paper", "root", "1234");