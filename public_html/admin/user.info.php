<?php

session_start();

require __DIR__."/../../app/util/Encoder.php";
require __DIR__."/../../app/util/ViewGenerator.php";

use App\Util\Encoder;
use App\Util\ViewGenerator;

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

            <title>Инвестиционный проект “Набережночелнинская картонно-бумажная фабрика”</title>
        </head>
        <body>
        <section id="admin">
            <div class="menu">
                <a href="/">
                    <div class="header_logo"></div>
                </a>

                <div class="user">
                    <h3>Администратор</h3>
                </div>

                <div class="links">
                    <a href="/admin/posts">
                        <div class="link">
                            <div class="logo">
                                <svg width="500px" height="500px" enable-background="new 0 0 50 50" version="1.1"
                                     viewBox="0 0 50 50" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m20.029 45h9.941c1.591 0 3.117-0.632 4.243-1.757l12-12c2.343-2.343 2.343-6.142 0-8.485l-16.97-16.971c-2.343-2.343-6.142-2.343-8.485 0l-16.971 16.97c-2.343 2.343-2.343 6.142 0 8.485l12 12c1.125 1.126 2.651 1.758 4.242 1.758zm-2.565-11.393l-0.95-0.95c-0.391-0.391-0.391-1.024 0-1.414l7.071-7.071c0.391-0.391 1.024-0.391 1.414 0l2.121 2.121c0.391 0.391 0.391 1.024 0 1.414l-5.9 5.899c-0.188 0.188-0.442 0.293-0.707 0.293h-2.343c-0.264 0-0.518-0.105-0.706-0.292zm10.364 4.707l-0.95 0.95c-0.188 0.188-0.442 0.293-0.707 0.293h-2.343c-0.265 0-0.52-0.105-0.707-0.293l-0.95-0.95c-0.391-0.391-0.391-1.024 0-1.414l2.121-2.121c0.391-0.391 1.024-0.391 1.414 0l2.121 2.121c0.392 0.39 0.392 1.023 1e-3 1.414zm-16.97-12.728l12.728-12.728c0.391-0.391 1.024-0.391 1.414 0l2.121 2.121c0.391 0.391 0.391 1.024 0 1.414l-11.556 11.557c-0.188 0.188-0.442 0.293-0.707 0.293h-2.343c-0.265 0-0.52-0.105-0.707-0.293l-0.95-0.95c-0.391-0.391-0.391-1.024 0-1.414z"/>
                                </svg>

                            </div>
                            <h4>Статьи</h4>
                        </div>
                    </a>
                    <a href="/admin">
                        <div class="link active">
                            <div class="logo">
                                <svg enable-background="new 0 0 122.699 122.699" version="1.1" viewBox="0 0 122.7 122.7"
                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="19.5" cy="12.2" r="12.1"/>
                                    <path d="m6 66.699h1.2v24c0 3.301 2.7 6 6 6h12.6c3.3 0 6-2.699 6-6v-1.399c-1.1-2.101-1.8-4.5-1.8-7v-31.4c0-6.1 3.7-11.4 9-13.7v-2.4c0-3.3-2.7-6-6-6h-27c-3.3 0-6 2.7-6 6v25.9c0 3.3 2.6 5.999 6 5.999z"/>
                                    <circle cx="103.3" cy="12.2" r="12.1"/>
                                    <path d="m83.699 34.7v2.4c5.301 2.3 9 7.6 9 13.7v31.3c0 2.5-0.6 4.9-1.799 7v1.4c0 3.3 2.699 6 6 6h12.6c3.3 0 6-2.7 6-6v-24h1.199c3.301 0 6-2.7 6-6v-25.8c0-3.3-2.699-6-6-6h-27c-3.299 0-6 2.699-6 6z"/>
                                    <path d="m39.1 50.899v31.4c0 3.3 2.7 6 6 6h2.3v28.3c0 3.3 2.7 6 6 6h16.1c3.3 0 6-2.7 6-6v-28.4h2.3c3.3 0 6-2.699 6-6v-31.299c0-3.3-2.7-6-6-6h-32.7c-3.4-1e-3 -6 2.7-6 5.999z"/>
                                    <circle cx="61.4" cy="26" r="13.9"/>
                                </svg>

                            </div>
                            <h4>Пользователи</h4>
                        </div>
                    </a>
                    <a href="/admin/main">
                        <div class="link">
                            <div class="logo">
                                <svg fill="none" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m12.994 0.28056l2.7258 2.7254c0.3741 0.37943 0.3741 0.98865-0.0054 1.3627l-0.6788 0.68403c-0.3741 0.37408-0.9887 0.37408-1.3628 0l-2.7258-2.7308c-0.3742-0.37408-0.3742-0.98865 0-1.3627l0.6841-0.67869c0.3741-0.37408 0.9887-0.37408 1.3629 0zm-3.1138 2.7077c-0.42891-0.42881-1.1336-0.42881-1.5625 0l-0.39215 0.39205-5.4656 5.4704-0.17157 0.17152s-0.55146 0.55133-1.7892 4.5576c-0.003064 0.0153-0.007659 0.0291-0.012255 0.0429-0.004595 0.0138-0.009191 0.0276-0.012254 0.0429-0.012255 0.0367-0.022979 0.0735-0.033702 0.1102l-4e-6 1e-4c-0.010721 0.0367-0.021443 0.0735-0.033696 0.1102-0.010988 0.0403-0.024165 0.0806-0.036914 0.1195-0.008579 0.0263-0.016965 0.0519-0.024359 0.0765-0.018383 0.0552-0.036765 0.1103-0.04902 0.1716-0.02542 0.0889-0.053771 0.1808-0.083025 0.2756h-6e-6l-2.5e-5 1e-4c-0.013044 0.0423-0.026268 0.0851-0.039491 0.1286l-0.003672 0.0119c-0.093776 0.3061-0.29949 0.9775-0.057602 1.2193 0.23897 0.239 0.92524 0.0307 1.2255-0.0612 0.05861-0.0187 0.11722-0.0361 0.17533-0.0535h1.3e-4c0.07549-0.0225 0.15013-0.0448 0.22282-0.069 0.03063-0.0092 0.05974-0.0184 0.08884-0.0276h1e-5c0.0291-0.0092 0.05821-0.0184 0.08884-0.0276 0.03064-0.0091 0.06281-0.0183 0.09498-0.0275s0.06434-0.0184 0.09497-0.0276c0.03976-0.0122 0.07798-0.0244 0.11621-0.0367h1.8e-4 2e-5c0.0383-0.0123 0.0766-0.0245 0.11643-0.0368 0.01225-0.0031 0.02298-0.0061 0.0337-0.0092s0.02145-0.0061 0.0337-0.0092c3.8112-1.1884 4.4975-1.7458 4.5526-1.7948l0.00613-0.0062 0.17769-0.1776 0.01226 0.0122 5.4656-5.4703 0.3921-0.39206c0.429-0.4288 0.429-1.1333 0-1.5621l-3.131-3.1242zm-3.338 9.407c-0.0027 0.0027-0.0054 0.0041-0.0081 0.0054-0.0027 0.0014-0.0054 0.0027-0.00809 0.0054-0.0027 0-0.00405 0.0014-0.0054 0.0027-0.00135 0.0014-0.0027 0.0027-0.0054 0.0027-0.0054 0-0.0108 0.0054-0.0108 0.0108-0.00539 0-0.01079 0.0054-0.01079 0.0054-0.16195 0.097-0.63158 0.345-1.7706 0.7547-0.06935 0.0249-0.14154 0.0499-0.21585 0.0755h-1e-5l-1.6e-4 1e-4c-0.07026 0.0242-0.14241 0.0491-0.21583 0.0753l-1.6248-1.6226c0.02279-0.0637 0.04462-0.1275 0.06589-0.1896h1e-5c0.02911-0.085 0.05717-0.1669 0.08524-0.2417 0.41026-1.1428 0.65857-1.6172 0.75574-1.7736 0-0.0027 0.00135-0.00404 0.0027-0.00539s0.0027-0.0027 0.0027-0.00539c0.0027-0.0027 0.00405-0.00539 0.0054-0.00809 0.00135-0.00269 0.00269-0.00539 0.00539-0.00808 0-0.0027 0.00135-0.00405 0.0027-0.0054 0.00135-0.00134 0.0027-0.00269 0.0027-0.00539 0.0027-0.00269 0.00405-0.00539 0.0054-0.00808 0.00135-0.0027 0.0027-0.00539 0.0054-0.00809l0.11876-0.1186 2.942 2.938-0.12416 0.124z" clip-rule="evenodd" fill-rule="evenodd"/>
                                </svg>

                            </div>
                            <h4>Главная страница</h4>
                        </div>
                    </a>
                    <a href="/admin/faq">
                        <div class="link">
                            <div class="logo">
                                <svg fill="none" viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m8.3864 7.7248e-4c-4.6941 0.062826-8.4481 3.9194-8.3857 8.6136 0.062827 4.6922 3.9191 8.4473 8.613 8.3848 4.6932-0.0632 8.448-3.9197 8.3855-8.6136-0.0628-4.6925-3.9192-8.4475-8.6128-8.3848zm-0.02513 13.673l-0.04694-7e-4c-0.72287-0.0215-1.2325-0.554-1.212-1.2662 0.02014-0.6999 0.54215-1.2081 1.2412-1.2081l0.04195 8e-4c0.74301 0.022 1.2469 0.5491 1.226 1.2818-0.0207 0.702-0.53458 1.1924-1.2502 1.1924zm2.0258-5.1264c0.471-0.36698 0.8448-0.66688 1.0148-0.90839 0.3267-0.44754 0.4923-0.93998 0.4923-1.4642 0-0.93721-0.3374-1.6556-1.0026-2.1353-0.6566-0.47341-1.4905-0.71344-2.4784-0.71344-0.75465 0-1.4014 0.16963-1.9212 0.50427-0.82727 0.52552-1.2737 1.4262-1.3264 2.6769l-0.0037 0.08815h2.042v-0.08445c0-0.33963 0.1007-0.67205 0.2999-0.98858 0.19366-0.30785 0.5174-0.45789 0.99026-0.45789 0.47674 0 0.8064 0.1238 0.97991 0.36827 0.18053 0.25333 0.27182 0.5379 0.27182 0.84556 0 0.22174-0.09203 0.44736-0.29991 0.73395-0.08888 0.12972-0.20825 0.25112-0.34979 0.35774-0.04195 0.02698-1.03 0.66318-1.4779 1.1891-0.28549 0.33483-0.30249 0.74005-0.3267 1.4289l-0.00572 0.16755h1.9805l7.4e-4 -0.0833c4e-3 -0.2956 0.02463-0.35957 0.06583-0.48725 0.00454-0.01407 0.00932-0.02891 0.01437-0.04491 0.06449-0.20492 0.23634-0.41317 0.52109-0.63454l0.51868-0.35811z" clip-rule="evenodd" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <h4>Вопросы и ответы</h4>
                        </div>
                    </a>
                </div>

                <div class="footer">
                    <div class="logo">
                        <a href="http://drim.agency/"><div class="creator_logo"></div></a>
                        <span>Разработка сайта</span>
                    </div>

                    <div class="politics">
                        <span>Все права защищены.<br>© Набережночелнинская картонно-бумажная Фабрика 2018</span>
                        <a href="">Политика конфиденциальности</a>
                    </div>
                </div>
            </div>
            <div class="content">
                <header>
                    <div class="header_item">
                        <a href="/" class="header_info_link">Проект</a>
                        <a href="/faq" class="header_info_link">Вопросы</a>
                        <a href="/news" class="header_info_link">Новости</a>
                    </div>
                    <div class="header_item">
                        <div class="header_item__telephone_wrap">
                            <div class="header_phone_icon">
                                <svg version="1.1" viewBox="0 0 401.998 401.998" xml:space="preserve">
                                    <path fill="#71aa27" d="m401.13 311.48c-1.137-3.426-8.371-8.473-21.697-15.129-3.61-2.098-8.754-4.949-15.41-8.566-6.662-3.617-12.709-6.95-18.13-9.996-5.432-3.045-10.521-5.995-15.276-8.846-0.76-0.571-3.139-2.234-7.136-5-4.001-2.758-7.375-4.805-10.14-6.14-2.759-1.327-5.473-1.995-8.138-1.995-3.806 0-8.56 2.714-14.268 8.135-5.708 5.428-10.944 11.324-15.7 17.706-4.757 6.379-9.802 12.275-15.126 17.7-5.332 5.427-9.713 8.138-13.135 8.138-1.718 0-3.86-0.479-6.427-1.424-2.566-0.951-4.518-1.766-5.858-2.423-1.328-0.671-3.607-1.999-6.845-4.004-3.244-1.999-5.048-3.094-5.428-3.285-26.075-14.469-48.438-31.029-67.093-49.676-18.649-18.658-35.211-41.019-49.676-67.097-0.19-0.381-1.287-2.19-3.284-5.424-2-3.237-3.333-5.518-3.999-6.854-0.666-1.331-1.475-3.283-2.425-5.852s-1.427-4.709-1.427-6.424c0-3.424 2.713-7.804 8.138-13.134 5.424-5.327 11.326-10.373 17.7-15.128 6.379-4.755 12.275-9.991 17.701-15.699 5.424-5.711 8.136-10.467 8.136-14.273 0-2.663-0.666-5.378-1.997-8.137-1.332-2.765-3.378-6.139-6.139-10.138-2.762-3.997-4.427-6.374-4.999-7.139-2.852-4.755-5.799-9.846-8.848-15.271-3.049-5.424-6.377-11.47-9.995-18.131-3.615-6.658-6.468-11.799-8.564-15.415-6.658-13.321-11.701-20.557-15.128-21.695-1.333-0.571-3.333-0.859-5.995-0.859-5.142 0-11.85 0.95-20.129 2.856-8.282 1.903-14.799 3.899-19.558 5.996-9.517 3.995-19.604 15.605-30.264 34.826-9.707 17.888-14.56 35.593-14.56 53.102 0 5.135 0.333 10.131 0.999 14.989 0.666 4.853 1.856 10.326 3.571 16.418 1.712 6.09 3.093 10.614 4.137 13.56 1.045 2.948 2.996 8.229 5.852 15.845 2.852 7.614 4.567 12.275 5.138 13.988 6.661 18.654 14.56 35.307 23.695 49.964 15.03 24.362 35.541 49.539 61.521 75.521 25.981 25.98 51.153 46.49 75.517 61.526 14.655 9.134 31.314 17.032 49.965 23.698 1.714 0.568 6.375 2.279 13.986 5.141 7.614 2.854 12.897 4.805 15.845 5.852 2.949 1.048 7.474 2.43 13.559 4.145 6.098 1.715 11.566 2.905 16.419 3.576 4.856 0.657 9.853 0.996 14.989 0.996 17.508 0 35.214-4.856 53.105-14.562 19.219-10.656 30.826-20.745 34.823-30.269 2.102-4.754 4.093-11.273 5.996-19.555 1.909-8.278 2.857-14.985 2.857-20.126 6e-3 -2.673-0.281-4.668-0.855-6.012z"/>
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
                    <h1>Информация об инвесторе</h1>

                    <div class="info">
                        <?= ViewGenerator::userInfo($_GET["id"]) ?>
                    </div>

                    <button class="btn" style="transform: rotateZ(180deg);margin-top: 1rem" onclick="back()">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                             xml:space="preserve">
                            <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	                            C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	                            c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z">
                            </path>
                        </svg>
                    </button>
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