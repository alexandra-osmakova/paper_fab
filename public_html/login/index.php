<?php
session_start();

require __DIR__ . "/../../app/login.php";

if(isset($_SESSION["user"])) {
    if(base64_decode($_SESSION["user"]) === "administrator"){
        $location = "/admin";
    }else {
        $location = "/user";
    }

    header("Location: ".$location);
}else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
    <link href="https://fonts.googleapis.com/css?family=Cuprum&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/paper.css/reset.css">
    <link rel="stylesheet" href="/paper.css/paper.css">
    <link rel="stylesheet" href="/paper.css/admin.css">
    <title>Document</title>
</head>

<body>
<header>
    <nav>
        <div class="menu_bar">
            <a class="header_logo" href="/"></a>
            <div class="menu_buttons">
                <div class="enter">
                    <svg enable-background="new 0 0 67 67" version="1.1" viewBox="0 0 67 67" xml:space="preserve">
                            <path fill="#71aa27" d="m33.3 48.8c-0.7 0-1.4-0.3-1.9-0.8s-0.8-1.2-0.8-1.9 0.3-1.4 0.8-1.9l8.3-8.4h-35.3c-1.5 0-2.6-1.2-2.6-2.6s1.2-2.6 2.6-2.6h33.7l-6.6-6.6c-1-1-1-2.5 0-3.6 0.5-0.5 1.2-0.8 1.9-0.8s1.4 0.3 1.9 0.8l10.9 10.9c0.2 0.2 0.4 0.3 0.6 0.6l0.5 0.5c0.5 0.5 0.8 1.2 0.8 1.9s-0.3 1.4-0.8 1.9l-12 12c-0.6 0.3-1.2 0.6-2 0.6z"></path>
                        <path fill="#71aa27" d="m28.4 65.6c-5.5 0-9.4-3.4-9.4-8v-11.1c0-1.5 1.2-2.6 2.6-2.6s2.6 1.2 2.6 2.6v11.1c0 2.5 3.1 2.7 4.1 2.7h24.3c1.4 0 3.6-0.3 3.6-2.7v-46.5c0-2-1.6-4.4-3.6-4.4h-24.2c-2 0-4.1 2.3-4.1 4.4v11c0 1.5-1.2 2.6-2.6 2.6s-2.6-1.2-2.6-2.6v-11c0-5.1 4.5-9.7 9.4-9.7h24.2c4.8 0 9 4.5 9 9.7v46.4c0 4.7-3.7 8-9 8l-24.3 0.1z"></path>
                        </svg>
                </div>
                <div class="menu">
                    <div class="menu__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="hidden_menu menu_visible">
                <div class="hidden_menu_item">
                    <a href="/">Проект</a>
                    <a href="/news">Новости</a>
                </div>
                <div class="hidden_menu_item">
                        <span class="hidden_menu_text">ООО «Фабрика картона» <br>
                            Производство гофрокартона <br>
                            и гофротары</span>
                    <div class="header_item__telephone_wrap">
                        <div class="header_phone_icon">
                            <svg version="1.1" viewBox="0 0 401.998 401.998" xml:space="preserve">
                                    <path fill="#71aa27" d="m401.13 311.48c-1.137-3.426-8.371-8.473-21.697-15.129-3.61-2.098-8.754-4.949-15.41-8.566-6.662-3.617-12.709-6.95-18.13-9.996-5.432-3.045-10.521-5.995-15.276-8.846-0.76-0.571-3.139-2.234-7.136-5-4.001-2.758-7.375-4.805-10.14-6.14-2.759-1.327-5.473-1.995-8.138-1.995-3.806 0-8.56 2.714-14.268 8.135-5.708 5.428-10.944 11.324-15.7 17.706-4.757 6.379-9.802 12.275-15.126 17.7-5.332 5.427-9.713 8.138-13.135 8.138-1.718 0-3.86-0.479-6.427-1.424-2.566-0.951-4.518-1.766-5.858-2.423-1.328-0.671-3.607-1.999-6.845-4.004-3.244-1.999-5.048-3.094-5.428-3.285-26.075-14.469-48.438-31.029-67.093-49.676-18.649-18.658-35.211-41.019-49.676-67.097-0.19-0.381-1.287-2.19-3.284-5.424-2-3.237-3.333-5.518-3.999-6.854-0.666-1.331-1.475-3.283-2.425-5.852s-1.427-4.709-1.427-6.424c0-3.424 2.713-7.804 8.138-13.134 5.424-5.327 11.326-10.373 17.7-15.128 6.379-4.755 12.275-9.991 17.701-15.699 5.424-5.711 8.136-10.467 8.136-14.273 0-2.663-0.666-5.378-1.997-8.137-1.332-2.765-3.378-6.139-6.139-10.138-2.762-3.997-4.427-6.374-4.999-7.139-2.852-4.755-5.799-9.846-8.848-15.271-3.049-5.424-6.377-11.47-9.995-18.131-3.615-6.658-6.468-11.799-8.564-15.415-6.658-13.321-11.701-20.557-15.128-21.695-1.333-0.571-3.333-0.859-5.995-0.859-5.142 0-11.85 0.95-20.129 2.856-8.282 1.903-14.799 3.899-19.558 5.996-9.517 3.995-19.604 15.605-30.264 34.826-9.707 17.888-14.56 35.593-14.56 53.102 0 5.135 0.333 10.131 0.999 14.989 0.666 4.853 1.856 10.326 3.571 16.418 1.712 6.09 3.093 10.614 4.137 13.56 1.045 2.948 2.996 8.229 5.852 15.845 2.852 7.614 4.567 12.275 5.138 13.988 6.661 18.654 14.56 35.307 23.695 49.964 15.03 24.362 35.541 49.539 61.521 75.521 25.981 25.98 51.153 46.49 75.517 61.526 14.655 9.134 31.314 17.032 49.965 23.698 1.714 0.568 6.375 2.279 13.986 5.141 7.614 2.854 12.897 4.805 15.845 5.852 2.949 1.048 7.474 2.43 13.559 4.145 6.098 1.715 11.566 2.905 16.419 3.576 4.856 0.657 9.853 0.996 14.989 0.996 17.508 0 35.214-4.856 53.105-14.562 19.219-10.656 30.826-20.745 34.823-30.269 2.102-4.754 4.093-11.273 5.996-19.555 1.909-8.278 2.857-14.985 2.857-20.126 6e-3 -2.673-0.281-4.668-0.855-6.012z"></path>
                                </svg>
                        </div>
                        <div class="phone_to_call">
                            <a class="header_phone" href="tel:+7(800)2507999">8 (800) 250 79 99
                            </a>
                            <span class="modal_trigger ask_for_call">Заказать звонок</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="header_item">
        <a class="header_logo" href="/"></a>
        <span class="header_logo_text">Производство гофрокартона<br> и гофротары</span>
    </div>
    <div class="header_item">
        <a href="" class="header_info_link">Проект</a>
        <a href="/news" class="header_info_link">Новости</a>
    </div>
    <div class="header_item">
        <div class="header_item__telephone_wrap">
            <div class="header_phone_icon">
                <svg version="1.1" viewBox="0 0 401.998 401.998" xml:space="preserve">
                        <path fill="#71aa27" d="m401.13 311.48c-1.137-3.426-8.371-8.473-21.697-15.129-3.61-2.098-8.754-4.949-15.41-8.566-6.662-3.617-12.709-6.95-18.13-9.996-5.432-3.045-10.521-5.995-15.276-8.846-0.76-0.571-3.139-2.234-7.136-5-4.001-2.758-7.375-4.805-10.14-6.14-2.759-1.327-5.473-1.995-8.138-1.995-3.806 0-8.56 2.714-14.268 8.135-5.708 5.428-10.944 11.324-15.7 17.706-4.757 6.379-9.802 12.275-15.126 17.7-5.332 5.427-9.713 8.138-13.135 8.138-1.718 0-3.86-0.479-6.427-1.424-2.566-0.951-4.518-1.766-5.858-2.423-1.328-0.671-3.607-1.999-6.845-4.004-3.244-1.999-5.048-3.094-5.428-3.285-26.075-14.469-48.438-31.029-67.093-49.676-18.649-18.658-35.211-41.019-49.676-67.097-0.19-0.381-1.287-2.19-3.284-5.424-2-3.237-3.333-5.518-3.999-6.854-0.666-1.331-1.475-3.283-2.425-5.852s-1.427-4.709-1.427-6.424c0-3.424 2.713-7.804 8.138-13.134 5.424-5.327 11.326-10.373 17.7-15.128 6.379-4.755 12.275-9.991 17.701-15.699 5.424-5.711 8.136-10.467 8.136-14.273 0-2.663-0.666-5.378-1.997-8.137-1.332-2.765-3.378-6.139-6.139-10.138-2.762-3.997-4.427-6.374-4.999-7.139-2.852-4.755-5.799-9.846-8.848-15.271-3.049-5.424-6.377-11.47-9.995-18.131-3.615-6.658-6.468-11.799-8.564-15.415-6.658-13.321-11.701-20.557-15.128-21.695-1.333-0.571-3.333-0.859-5.995-0.859-5.142 0-11.85 0.95-20.129 2.856-8.282 1.903-14.799 3.899-19.558 5.996-9.517 3.995-19.604 15.605-30.264 34.826-9.707 17.888-14.56 35.593-14.56 53.102 0 5.135 0.333 10.131 0.999 14.989 0.666 4.853 1.856 10.326 3.571 16.418 1.712 6.09 3.093 10.614 4.137 13.56 1.045 2.948 2.996 8.229 5.852 15.845 2.852 7.614 4.567 12.275 5.138 13.988 6.661 18.654 14.56 35.307 23.695 49.964 15.03 24.362 35.541 49.539 61.521 75.521 25.981 25.98 51.153 46.49 75.517 61.526 14.655 9.134 31.314 17.032 49.965 23.698 1.714 0.568 6.375 2.279 13.986 5.141 7.614 2.854 12.897 4.805 15.845 5.852 2.949 1.048 7.474 2.43 13.559 4.145 6.098 1.715 11.566 2.905 16.419 3.576 4.856 0.657 9.853 0.996 14.989 0.996 17.508 0 35.214-4.856 53.105-14.562 19.219-10.656 30.826-20.745 34.823-30.269 2.102-4.754 4.093-11.273 5.996-19.555 1.909-8.278 2.857-14.985 2.857-20.126 6e-3 -2.673-0.281-4.668-0.855-6.012z"></path>
                    </svg>
            </div>
            <div class="phone_to_call">
                <a class="header_phone" href="tel:+7(800)2507999">8 (800) 250 79 99
                </a>
                <span class="modal_trigger ask_for_call">Заказать звонок</span>
            </div>
        </div>
        <button class="header_item__button">Личный кабинет</button>
    </div>
</header>
<section id="login">
    <div class="container login">
        <form action="index.php" method="post">
            <h3>Вход в личный кабинет</h3>
            <input type="text" name="login" placeholder="Введите ваш E-mail" required>
            <input type="password" name="pwd" placeholder="Введите ваш пароль" required>
            <input type="submit" name="log" value="Вход">
        </form>
        <br>
        <span id="forgot">Забыли пароль?</span>
    </div>
    <div class="container forgot" style="display: none;">
        <h3>Забыли пароль?</h3>
        <p>Для восстановления пароля введите e-mail, который Вы указывали при регистрации</p>
        <input type="email" id="email" name="e-mail" placeholder="Введите ваш E-mail" required>
        <input type="submit" id="forgot" name="forgot" value="Восстановить пароль">
    </div>
    <div class="container success" style="display: none;">
        <div class="icon"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                               viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve">
<g>
    <path d="M26,0C11.7,0,0,11.7,0,26s11.7,26,26,26s26-11.7,26-26S40.3,0,26,0z M26,50C12.8,50,2,39.2,2,26S12.8,2,26,2s24,10.8,24,24
		S39.2,50,26,50z"/>
</g>
                <g>
                    <path d="M22.6,38c-0.1,0-0.2,0-0.3,0c-0.3-0.1-0.6-0.4-0.6-0.7l-0.4-7l-10.2-3.1c-0.6-0.2-1-0.7-1.1-1.4c0-0.6,0.3-1.2,0.9-1.5
		l26.3-10.7c0.1,0,0.2-0.1,0.3-0.1c0.2,0,0.4,0.1,0.5,0.2c0.2,0.2,0.4,0.5,0.3,0.8l-4.3,21.8c-0.2,0.7-0.8,1.2-1.5,1.2
		c-0.3,0-0.6-0.1-0.9-0.3l-5-3.5l-3.5,3.9C23.1,37.9,22.8,38,22.6,38z M32.6,35.7l3.6-18.5L23.5,29.5L32.6,35.7z M23.3,35.1l2-2.3
		l-2.2-1.5L23.3,35.1z M21.9,28.6l12.4-12l-22.1,9L21.9,28.6z"/>
                </g>
</svg></div>
        <h3>Проверьте почтовый ящик</h3>
        <p>На указанный e-mail отправлено письмо  с инструкцией о восстановлении пароля</p>
        <a href="/login"><span class="btn">Вход</span></a>
    </div>

</section>
<footer>
    <div class="politics">
        <span>Все права защищены. © Фабрика Картона 2018</span>
        <a href="">Политика конфиденциальности</a>
    </div>
    <div class="creator">
        <div class="creator_logo"></div>
        <span>Разработка сайта</span>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="../paper.js/paper.js"></script>-->
<script>
    var menu__icon = document.getElementsByClassName('menu__icon')[0];
    var hidden_menu = document.getElementsByClassName('hidden_menu')[0];

    menu__icon.addEventListener('click', menu_open);

    function menu_open() {
        hidden_menu.classList.toggle('menu_visible');
        document.documentElement.classList.toggle('no_scroll');
    }

    var header_burger_menu = document.getElementsByClassName("menu")[0];

    menu__icon.addEventListener('click', function () {
        header_burger_menu.classList.toggle('menu_state_open');
    });

    $("span#forgot").on("click", function (e) {
        $("div.container").css("display", "none");
        $("div.container.forgot").css("display", "block");
    });
    $("input#forgot").on("click", function (e) {
        $.post(
            "forgot.php",
            {
                email: $("input#email").val()
            },
            function () {
                $("div.container").css("display", "none");
                $("div.container.success").css("display", "block");
            }
        );
    });
</script>
</body>
</html>
<?}?>