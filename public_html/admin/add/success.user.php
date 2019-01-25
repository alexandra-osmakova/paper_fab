<?php
//header("Refresh: 5; url=/admin", true, 301);

session_start();

require __DIR__ . "/../../../app/util/Encoder.php";
require __DIR__ . "/../../../app/database/db.php";

use App\Util\Encoder;

if (isset($_POST["client_type"])) {
    $client_type = $_POST["client_type"];
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $middlename = $_POST["middlename"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $dop_tel = $_POST["dop_tel"];
    $type = [];

    if ($client_type === "Физическое лицо") {
        $type["seriya"] = $_POST["seriya"];
        $type["nomer"] = $_POST["nomer"];
        $type["vydan"] = $_POST["vydan"];
        $type["p_date"] = $_POST["p_date"];
        $type["code"] = $_POST["code"];

        $client_type = "physical";
    } else if ($client_type === "Юридическое лицо") {
        $type["j_name"] = $_POST["j_name"];
        $type["inn"] = $_POST["inn"];
        $type["kpp"] = $_POST["kpp"];
        $type["ogrn"] = $_POST["ogrn"];

        $client_type = "company";
    }

    $m_amount = $_POST["m_amount"];
    $m_date = $_POST["m_date"];
    $addition = $_POST["addition"];

    $user = R::dispense("users");
    $userInfo = R::dispense("info");

    $user->login = $email;
    $user->password = base64_encode("password");
    $user->type = $client_type;

    R::store($user);

    $user = R::findOne("users", "WHERE login=:login", ["login" => $email]);

    $userInfo->userid = $user->id;
    $userInfo->name = $name;
    $userInfo->surname = $surname;
    $userInfo->midname = $middlename;
    $userInfo->phoneprimary = $tel;
    $userInfo->phonesecondary = $dop_tel[0];
    $userInfo->investement = $m_amount;
    $userInfo->date = $m_date;
    $userInfo->addition = $addition;

    R::store($userInfo);

    $store = R::dispense($client_type);

    $store->userid = $user->id;

    if ($client_type === "physical") {
        $store->serie = $type["seriya"];
        $store->number = $type["nomer"];
        $store->structure = $type["vydan"];
        $store->date = $type["p_date"];
        $store->code = $type["code"];
    } else if ($client_type === "company") {
        $store->name = $type["j_name"];
        $store->inn = $type["inn"];
        $store->kpp = $type["kpp"];
        $store->ogrn = $type["ogrn"];
    }

    R::store($store);

    $uploaddir = "../../docs/";

    for($i = 0; $i < count($_FILES["files"]["name"]); $i++) {
        $uploadfile = $uploaddir . basename($_FILES["files"]["name"][$i]);

        move_uploaded_file($_FILES["files"]["tmp_name"][$i], $uploadfile);

        $file = R::dispense("docs");

        $file->userid = $user->id;
        $file->href = "/docs/" . basename($_FILES["files"]["name"][$i]);

        R::store($file);
        unset($file);
    }

    $location = "success";
}

if (isset($_SESSION["user"])) {
    if (Encoder::decode($_SESSION["user"]) === "administrator") {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <link href="https://fonts.googleapis.com/css?family=Cuprum&amp;subset=cyrillic,cyrillic-ext"
                  rel="stylesheet">
            <link rel="stylesheet" href="/paper.css/reset.css">
            <link rel="stylesheet" href="/paper.css/paper.css">
            <link rel="stylesheet" href="/paper.css/admin.css">

            <title>Administrator</title>
        </head>
        <body>
        <section id="admin">
            <div class="success">
                <h1>Успешно</h1>
            </div>
        </section>
        </body>
        </html>
        <?
    } else {
        echo "<h1 style='color: red;'>403 FORBIDDEN</h1>";
        die(403);
    }
} else {
    header("Location: /login");
}
?>