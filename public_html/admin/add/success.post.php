<?php
header("Refresh: 5; url=/admin", true, 301);

session_start();

require __DIR__ . "/../../../app/util/Encoder.php";
require __DIR__ . "/../../../app/database/db.php";

use App\Util\Encoder;

if (isset($_POST["id"])) {
    $post = R::load("posts", $_POST["id"]);

    move_uploaded_file($_FILES["file"]["tmp_name"], "../../img/" . $_FILES["file"]["name"]);

    $post->date = date("Y-m-d H-i-s");
    $post->title = $_POST["title"];
    $post->text = $_POST["text"];
    $post->bg = "/img/" . $_FILES["file"]["name"];

    R::store($post);
} else if (isset($_POST["title"])) {
    $post = R::dispense("posts");

    move_uploaded_file($_FILES["file"]["tmp_name"], "../../img/" . $_FILES["file"]["name"]);

    $post->date = date("Y-m-d H:i:s");
    $post->title = $_POST["title"];
    $post->text = $_POST["text"];
    $post->bg = "/img/" . $_FILES["file"]["name"];

    R::store($post);
}

if (isset($_SESSION["user"])) {
    if (Encoder::decode($_SESSION["user"]) === "administrator") {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description"
                  content="В 2018 году в г. Набережные Челны начал строиться завод по производству гофрокартона. Проект инвестиционный - это значит, что каждый может вложиться в проект и получать дивиденды после начала функционирования завода.">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
            <link href="https://fonts.googleapis.com/css?family=Cuprum&amp;subset=cyrillic,cyrillic-ext"
                  rel="stylesheet">
            <link rel="stylesheet" href="/paper.css/reset.css">
            <link rel="stylesheet" href="/paper.css/paper.css">
            <title>Инвестиционный проект “Набережночелнинская картонно-бумажная фабрика”</title>
        </head>

        <body>
        <section class="main_thanx">
            <svg enable-background="new 0 0 52 52" version="1.1" viewBox="0 0 52 52" xml:space="preserve"
                 xmlns="http://www.w3.org/2000/svg">
            <path fill="#71aa27"
                  d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z"/>
                <path fill="#71aa27"
                      d="m38.252 15.336l-15.369 17.29-9.259-7.407c-0.43-0.345-1.061-0.274-1.405 0.156-0.345 0.432-0.275 1.061 0.156 1.406l10 8c0.184 0.147 0.405 0.219 0.625 0.219 0.276 0 0.551-0.114 0.748-0.336l16-18c0.367-0.412 0.33-1.045-0.083-1.411-0.414-0.368-1.045-0.331-1.413 0.083z"/>
        </svg>
            <h2>Успешно</h2>
            <p>Вы будете перенаправлены на через <span class="counter_back"><span class="counter_back_num">5</span>
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