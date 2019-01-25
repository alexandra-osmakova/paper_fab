<?php
header("Refresh: 5; url=/admin", true, 301);

session_start();

require __DIR__ . "/../../../app/util/Encoder.php";
require __DIR__ . "/../../../app/database/db.php";

use App\Util\Encoder;

if(isset($_POST["title"])) {
    $post = R::dispense("posts");

    move_uploaded_file($_FILES["file"]["tmp_name"], "../../img/".$_FILES["file"]["name"]);

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