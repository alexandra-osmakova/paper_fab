<?php

session_start();

require __DIR__ . "/../../app/util/ViewGenerator.php";

use App\Util\ViewGenerator;

$money = ViewGenerator::getTotalMoney();
$user_name = ViewGenerator::getUserName($_SESSION["user"]);

$amount = 0;

foreach ($money as $item) {
    $amount += $item["investement"];
}

$amount /= 1000000;
if (isset($_SESSION["user"])) {
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
    <section id="user">
        <div class="menu">
            <a href="/">
                <div class="header_logo"></div>
            </a>

            <div class="user">
                <h3><?=$user_name[0]["surname"] . " " . $user_name[0]["name"]?></h3>
                <h4>Пользователь</h4>
            </div>

            <div class="links">
                <a href="/user">
                    <div class="link active">
                        <div class="logo">
                            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;"
                                 xml:space="preserve">
<style type="text/css">
    .st0 {
        stroke: #FFFFFF;
        stroke-miterlimit: 10;
    }
</style>
                                <path class="st0" d="M321.2,451.2H130c-71.5,0-130-58.5-130-130V130C0,58.5,58.5,0,130,0h191.2c71.5,0,130,58.5,130,130v191.2
	C451.2,392.7,392.7,451.2,321.2,451.2z"/>
                                <path class="st0" d="M870,451.2H678.8c-71.5,0-130-58.5-130-130V130c0-71.5,58.5-130,130-130H870c71.5,0,130,58.5,130,130v191.2
	C1000,392.7,941.5,451.2,870,451.2z"/>
                                <path class="st0" d="M321.2,1000H130C58.5,1000,0,941.5,0,870V678.8c0-71.5,58.5-130,130-130h191.2c71.5,0,130,58.5,130,130V870
	C451.2,941.5,392.7,1000,321.2,1000z"/>
                                <path class="st0" d="M870,1000H678.8c-71.5,0-130-58.5-130-130V678.8c0-71.5,58.5-130,130-130H870c71.5,0,130,58.5,130,130V870
	C1000,941.5,941.5,1000,870,1000z"/>
</svg>

                        </div>
                        <h4>Главная</h4>
                    </div>
                </a>
                <a href="/user/docs">
                    <div class="link">
                        <div class="logo">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="438.533px" height="438.533px" viewBox="0 0 438.533 438.533"
                                 style="enable-background:new 0 0 438.533 438.533;"
                                 xml:space="preserve">
	<g>
        <path d="M382.58,108.493l-89.078-89.081c-9.521-9.517-22.087-15.706-37.692-18.558v145.324h145.326
			C398.281,130.566,392.091,118.006,382.58,108.493z"/>
        <path d="M246.676,182.72c-7.617,0-14.089-2.663-19.417-7.993c-5.33-5.327-7.992-11.799-7.992-19.414V0H63.953
			C56.341,0,49.869,2.663,44.54,7.993c-5.33,5.327-7.994,11.799-7.994,19.414v383.719c0,7.617,2.664,14.089,7.994,19.417
			c5.33,5.325,11.801,7.991,19.414,7.991h310.633c7.611,0,14.079-2.666,19.407-7.991c5.328-5.332,7.994-11.8,7.994-19.417V182.72
			H246.676z"/>
    </g>
</svg>

                        </div>
                        <h4>Юридические документы</h4>
                    </div>
                </a>
            </div>

            <div class="footer">
                <div class="logo">
                    <div class="creator_logo"></div>
                    <span>Разработка сайта</span>
                </div>

                <div class="politics">
                    <span>Все права защищены.<br>© Фабрика Картона 2018</span>
                    <a href="">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
        <div class="content">
            <header>
                <div class="header_item">
                    <a href="" class="header_info_link">Проект</a>
                    <a href="/news" class="header_info_link">Новости</a>
                </div>
                <div class="header_item">
                    <div class="header_item__telephone_wrap">
                        <div class="header_phone_icon">
                            <svg version="1.1" viewBox="0 0 401.998 401.998" xml:space="preserve">
                        <path fill="#7eac01" d="m401.13 311.48c-1.137-3.426-8.371-8.473-21.697-15.129-3.61-2.098-8.754-4.949-15.41-8.566-6.662-3.617-12.709-6.95-18.13-9.996-5.432-3.045-10.521-5.995-15.276-8.846-0.76-0.571-3.139-2.234-7.136-5-4.001-2.758-7.375-4.805-10.14-6.14-2.759-1.327-5.473-1.995-8.138-1.995-3.806 0-8.56 2.714-14.268 8.135-5.708 5.428-10.944 11.324-15.7 17.706-4.757 6.379-9.802 12.275-15.126 17.7-5.332 5.427-9.713 8.138-13.135 8.138-1.718 0-3.86-0.479-6.427-1.424-2.566-0.951-4.518-1.766-5.858-2.423-1.328-0.671-3.607-1.999-6.845-4.004-3.244-1.999-5.048-3.094-5.428-3.285-26.075-14.469-48.438-31.029-67.093-49.676-18.649-18.658-35.211-41.019-49.676-67.097-0.19-0.381-1.287-2.19-3.284-5.424-2-3.237-3.333-5.518-3.999-6.854-0.666-1.331-1.475-3.283-2.425-5.852s-1.427-4.709-1.427-6.424c0-3.424 2.713-7.804 8.138-13.134 5.424-5.327 11.326-10.373 17.7-15.128 6.379-4.755 12.275-9.991 17.701-15.699 5.424-5.711 8.136-10.467 8.136-14.273 0-2.663-0.666-5.378-1.997-8.137-1.332-2.765-3.378-6.139-6.139-10.138-2.762-3.997-4.427-6.374-4.999-7.139-2.852-4.755-5.799-9.846-8.848-15.271-3.049-5.424-6.377-11.47-9.995-18.131-3.615-6.658-6.468-11.799-8.564-15.415-6.658-13.321-11.701-20.557-15.128-21.695-1.333-0.571-3.333-0.859-5.995-0.859-5.142 0-11.85 0.95-20.129 2.856-8.282 1.903-14.799 3.899-19.558 5.996-9.517 3.995-19.604 15.605-30.264 34.826-9.707 17.888-14.56 35.593-14.56 53.102 0 5.135 0.333 10.131 0.999 14.989 0.666 4.853 1.856 10.326 3.571 16.418 1.712 6.09 3.093 10.614 4.137 13.56 1.045 2.948 2.996 8.229 5.852 15.845 2.852 7.614 4.567 12.275 5.138 13.988 6.661 18.654 14.56 35.307 23.695 49.964 15.03 24.362 35.541 49.539 61.521 75.521 25.981 25.98 51.153 46.49 75.517 61.526 14.655 9.134 31.314 17.032 49.965 23.698 1.714 0.568 6.375 2.279 13.986 5.141 7.614 2.854 12.897 4.805 15.845 5.852 2.949 1.048 7.474 2.43 13.559 4.145 6.098 1.715 11.566 2.905 16.419 3.576 4.856 0.657 9.853 0.996 14.989 0.996 17.508 0 35.214-4.856 53.105-14.562 19.219-10.656 30.826-20.745 34.823-30.269 2.102-4.754 4.093-11.273 5.996-19.555 1.909-8.278 2.857-14.985 2.857-20.126 6e-3 -2.673-0.281-4.668-0.855-6.012z"></path>
                    </svg>
                        </div>
                        <div class="phone_to_call">
                            <a class="header_phone" href="tel:+7(800)2507999">8 (800) 250 79 99
                            </a>
                            <span class="modal_trigger ask_for_call">Заказать звонок</span>
                        </div>
                    </div>
                    <a class="header_item__button" href="/login/logout.php">Выход</a>
                </div>
            </header>

            <div class="container">
                <h1>Главная</h1>

                <div style="display: flex;margin-top: 2rem;">
                    <div class="money percent">
                        <h3>Моя доля</h3>
                        <h1>9%</h1>
                    </div>
                    <div class="money">
                        <h3>Собрано денег</h3>
                        <div class="status">
                            <div id="done" class="done"></div>
                            <div id="remain" class="remain">
                                <h5><span id="d"><?=$amount?></span> млн. из <span id="r">500</span> млн.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="money question">
                    <h3>Задайте вопрос инициатору проекта</h3>
                    <button>
                        <span>
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 92 92" style="enable-background:new 0 0 92 92;" xml:space="preserve">
<g>
	<path d="M45.386,0.004C19.983,0.344-0.333,21.215,0.005,46.619c0.34,25.393,21.209,45.715,46.611,45.377
		c25.398-0.342,45.718-21.213,45.38-46.615C91.656,19.986,70.786-0.335,45.386,0.004z M45.25,74l-0.254-0.004
		c-3.912-0.116-6.67-2.998-6.559-6.852c0.109-3.788,2.934-6.538,6.717-6.538l0.227,0.004c4.021,0.119,6.748,2.972,6.635,6.937
		C51.904,71.346,49.123,74,45.25,74z M61.705,41.341c-0.92,1.307-2.943,2.93-5.492,4.916l-2.807,1.938
		c-1.541,1.198-2.471,2.325-2.82,3.434c-0.275,0.873-0.41,1.104-0.434,2.88l-0.004,0.451H39.43l0.031-0.907
		c0.131-3.728,0.223-5.921,1.768-7.733c2.424-2.846,7.771-6.289,7.998-6.435c0.766-0.577,1.412-1.234,1.893-1.936
		c1.125-1.551,1.623-2.772,1.623-3.972c0-1.665-0.494-3.205-1.471-4.576c-0.939-1.323-2.723-1.993-5.303-1.993
		c-2.559,0-4.311,0.812-5.359,2.478c-1.078,1.713-1.623,3.512-1.623,5.35v0.457H27.936l0.02-0.477
		c0.285-6.769,2.701-11.643,7.178-14.487C37.947,18.918,41.447,18,45.531,18c5.346,0,9.859,1.299,13.412,3.861
		c3.6,2.596,5.426,6.484,5.426,11.556C64.369,36.254,63.473,38.919,61.705,41.341z"/>
</g>
</svg>
                        </span>
                        Задать вопрос
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/paper.js/routes.js"></script>
    <script>
        function logout() {
            $.post(
                "../login/logout.php",
                {},
                function () {
                    location.href = "/login";
                }
            );
        }

        $(document).ready(function () {
            var d = parseInt($("#d").text());
            var r = parseInt($("#r").text());

            var done = (d * 100) / r;
            var remain = 100 - done;

            $("#done").css("width", done + "%");
            $("#remain").css("width", remain + "%");
        });

    </script>
    </body>
    </html>
    <?
} else {
    header("Location: /login");
}
?>