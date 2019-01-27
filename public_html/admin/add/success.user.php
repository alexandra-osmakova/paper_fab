<?php
header("Refresh: 2; url=/admin", true, 301);

session_start();

require __DIR__ . "/../../../app/util/Encoder.php";
require __DIR__ . "/../../../app/database/db.php";

use App\Util\Encoder;

try {
    if (isset($_POST["name"])) {
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

        if(isset($_GET["id"])) {
            $user = R::load("users", $_GET["id"]);
            $userInfo = R::findOne("info", "WHERE userid=:userid", ["userid" => $user->id]);
            $store = R::findOne($user->type, "WHERE userid=:userid", ["userid" => $user->id]);
            $file = R::findOne("docs", "WHERE userid=:userid", ["userid" => $user->id]);
        }else {
            $user = R::dispense("users");
            $userInfo = R::dispense("info");
            $store = R::dispense($client_type);
        }
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


        $uploaddir = "../../docs/";

        if ($_FILES["files"]["name"] !== null) {
            for ($i = 0; $i < count($_FILES["files"]["name"]); $i++) {
                $uploadfile = $uploaddir . basename($_FILES["files"]["name"][$i]);

                move_uploaded_file($_FILES["files"]["tmp_name"][$i], $uploadfile);

                $file = R::dispense("docs");

                $file->userid = $user->id;
                $file->href = "/docs/" . basename($_FILES["files"]["name"][$i]);

                R::store($file);
                unset($file);
            }
        }

        R::store($userInfo);
        R::store($store);
    }
}catch (Exception $e) {
    echo $e->getMessage();
    var_dump($e->getTrace());
    echo "<h1 style='color: red; margin: auto;'>Не удалось сохранить пользователя!</h1>";
    die();
}

if (isset($_SESSION["user"])) {
    if (Encoder::decode($_SESSION["user"]) === "administrator") {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="В 2018 году в г. Набережные Челны начал строиться завод по производству гофрокартона. Проект инвестиционный - это значит, что каждый может вложиться в проект и получать дивиденды после начала функционирования завода.">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
            <link href="https://fonts.googleapis.com/css?family=Cuprum&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
            <link rel="stylesheet" href="/paper.css/reset.css">
            <link rel="stylesheet" href="/paper.css/paper.css">
            <title>Инвестиционный проект “Набережночелнинская картонно-бумажная фабрика”</title>
        </head>

        <body>
        <section class="main_thanx">
            <svg enable-background="new 0 0 52 52" version="1.1" viewBox="0 0 52 52" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <path fill="#7eac01" d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" />
                <path fill="#7eac01" d="m38.252 15.336l-15.369 17.29-9.259-7.407c-0.43-0.345-1.061-0.274-1.405 0.156-0.345 0.432-0.275 1.061 0.156 1.406l10 8c0.184 0.147 0.405 0.219 0.625 0.219 0.276 0 0.551-0.114 0.748-0.336l16-18c0.367-0.412 0.33-1.045-0.083-1.411-0.414-0.368-1.045-0.331-1.413 0.083z" />
        </svg>
            <h2>Успешно</h2>
            <p>Вы будете перенаправлены через <span class="counter_back"><span class="counter_back_num">5</span>
                секунд</span></p>
        </section>
        <script>
            var counter_back_num = document.getElementsByClassName('counter_back_num')[0];
            var x = 5;
            window.onload = function () {
                var timerId = setInterval(function () {
                    console.log(1)
                    if (x > 0) {
                        counter_back_num.innerHTML = x;
                        x--;
                    } else if (x == 0) {
                        counter_back_num.innerHTML = 0;
                        stopCount()
                    }
                }, 1000);

                function stopCount() {
                    setTimeout(function () {
                        clearInterval(timerId);
                    }, 0);
                }
            }
        </script>
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