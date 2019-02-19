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

            <title>Administrator</title>
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
                                <svg width="500px" height="500px" enable-background="new 0 0 50 50" version="1.1"
                                     viewBox="0 0 50 50" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m20.029 45h9.941c1.591 0 3.117-0.632 4.243-1.757l12-12c2.343-2.343 2.343-6.142 0-8.485l-16.97-16.971c-2.343-2.343-6.142-2.343-8.485 0l-16.971 16.97c-2.343 2.343-2.343 6.142 0 8.485l12 12c1.125 1.126 2.651 1.758 4.242 1.758zm-2.565-11.393l-0.95-0.95c-0.391-0.391-0.391-1.024 0-1.414l7.071-7.071c0.391-0.391 1.024-0.391 1.414 0l2.121 2.121c0.391 0.391 0.391 1.024 0 1.414l-5.9 5.899c-0.188 0.188-0.442 0.293-0.707 0.293h-2.343c-0.264 0-0.518-0.105-0.706-0.292zm10.364 4.707l-0.95 0.95c-0.188 0.188-0.442 0.293-0.707 0.293h-2.343c-0.265 0-0.52-0.105-0.707-0.293l-0.95-0.95c-0.391-0.391-0.391-1.024 0-1.414l2.121-2.121c0.391-0.391 1.024-0.391 1.414 0l2.121 2.121c0.392 0.39 0.392 1.023 1e-3 1.414zm-16.97-12.728l12.728-12.728c0.391-0.391 1.024-0.391 1.414 0l2.121 2.121c0.391 0.391 0.391 1.024 0 1.414l-11.556 11.557c-0.188 0.188-0.442 0.293-0.707 0.293h-2.343c-0.265 0-0.52-0.105-0.707-0.293l-0.95-0.95c-0.391-0.391-0.391-1.024 0-1.414z"/>
                                </svg>

                            </div>
                            <h4>Главная страница</h4>
                        </div>
                    </a>
                    <a href="/admin/faq">
                        <div class="link">
                            <div class="logo">
                                <svg width="500px" height="500px" enable-background="new 0 0 50 50" version="1.1"
                                     viewBox="0 0 50 50" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m20.029 45h9.941c1.591 0 3.117-0.632 4.243-1.757l12-12c2.343-2.343 2.343-6.142 0-8.485l-16.97-16.971c-2.343-2.343-6.142-2.343-8.485 0l-16.971 16.97c-2.343 2.343-2.343 6.142 0 8.485l12 12c1.125 1.126 2.651 1.758 4.242 1.758zm-2.565-11.393l-0.95-0.95c-0.391-0.391-0.391-1.024 0-1.414l7.071-7.071c0.391-0.391 1.024-0.391 1.414 0l2.121 2.121c0.391 0.391 0.391 1.024 0 1.414l-5.9 5.899c-0.188 0.188-0.442 0.293-0.707 0.293h-2.343c-0.264 0-0.518-0.105-0.706-0.292zm10.364 4.707l-0.95 0.95c-0.188 0.188-0.442 0.293-0.707 0.293h-2.343c-0.265 0-0.52-0.105-0.707-0.293l-0.95-0.95c-0.391-0.391-0.391-1.024 0-1.414l2.121-2.121c0.391-0.391 1.024-0.391 1.414 0l2.121 2.121c0.392 0.39 0.392 1.023 1e-3 1.414zm-16.97-12.728l12.728-12.728c0.391-0.391 1.024-0.391 1.414 0l2.121 2.121c0.391 0.391 0.391 1.024 0 1.414l-11.556 11.557c-0.188 0.188-0.442 0.293-0.707 0.293h-2.343c-0.265 0-0.52-0.105-0.707-0.293l-0.95-0.95c-0.391-0.391-0.391-1.024 0-1.414z"/>
                                </svg>

                            </div>
                            <h4>Вопросы и ответы</h4>
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
                        <a href="/" class="header_info_link">Проект</a>
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
                    <h1>Все пользователи</h1>

                    <div class="controls">
                        <button class="btn" onclick="addUser()">+</button>
                        <span>Показано 1 из 6</span>
                    </div>

                    <table>
                        <thead>
                        <tr>
                            <td>№ договора</td>
                            <td>ФИО</td>
                            <td>Телефон</td>
                            <td>Данные</td>
                            <td>Сумма</td>
                            <td>Действия</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?= ViewGenerator::generateUsers() ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="/paper.js/routes.js"></script>
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