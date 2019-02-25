<?php
require __DIR__."/../../app/util/ViewGenerator.php";

use App\Util\ViewGenerator;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="В 2018 году в г. Набережные Челны начал строиться завод по производству гофрокартона. Проект инвестиционный - это значит, что каждый может вложиться в проект и получать дивиденды после начала функционирования завода.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
    <link href="https://fonts.googleapis.com/css?family=Cuprum&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="/paper.css/reset.css">
    <link rel="stylesheet" href="/paper.css/paper.css">
    <title>Инвестиционный проект “Набережночелнинская картонно-бумажная фабрика”</title>
</head>

<body>
<header>
    <nav>
        <div class="menu_bar">
            <div class="header_logo"></div>
            <div class="menu_buttons">
                <div class="enter">
                    <a href="/login">
                        <svg enable-background="new 0 0 67 67" version="1.1" viewBox="0 0 67 67" xml:space="preserve">
                                <path fill="#71aa27"
                                      d="m33.3 48.8c-0.7 0-1.4-0.3-1.9-0.8s-0.8-1.2-0.8-1.9 0.3-1.4 0.8-1.9l8.3-8.4h-35.3c-1.5 0-2.6-1.2-2.6-2.6s1.2-2.6 2.6-2.6h33.7l-6.6-6.6c-1-1-1-2.5 0-3.6 0.5-0.5 1.2-0.8 1.9-0.8s1.4 0.3 1.9 0.8l10.9 10.9c0.2 0.2 0.4 0.3 0.6 0.6l0.5 0.5c0.5 0.5 0.8 1.2 0.8 1.9s-0.3 1.4-0.8 1.9l-12 12c-0.6 0.3-1.2 0.6-2 0.6z"/>
                            <path fill="#71aa27"
                                  d="m28.4 65.6c-5.5 0-9.4-3.4-9.4-8v-11.1c0-1.5 1.2-2.6 2.6-2.6s2.6 1.2 2.6 2.6v11.1c0 2.5 3.1 2.7 4.1 2.7h24.3c1.4 0 3.6-0.3 3.6-2.7v-46.5c0-2-1.6-4.4-3.6-4.4h-24.2c-2 0-4.1 2.3-4.1 4.4v11c0 1.5-1.2 2.6-2.6 2.6s-2.6-1.2-2.6-2.6v-11c0-5.1 4.5-9.7 9.4-9.7h24.2c4.8 0 9 4.5 9 9.7v46.4c0 4.7-3.7 8-9 8l-24.3 0.1z"/>
                            </svg>
                    </a>
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
                    <a href="/faq">Вопросы</a>
                    <a href="/news">Новости</a>
                </div>
                <div class="hidden_menu_item">
                        <span class="hidden_menu_text">ООО «Фабрика картона» <br>
                            Производство гофрокартона <br>
                            и гофротары</span>
                    <div class="header_item__telephone_wrap">
                        <div class="header_phone_icon">
                            <svg version="1.1" viewBox="0 0 401.998 401.998" xml:space="preserve">
                                    <path fill="#71aa27"
                                          d="m401.13 311.48c-1.137-3.426-8.371-8.473-21.697-15.129-3.61-2.098-8.754-4.949-15.41-8.566-6.662-3.617-12.709-6.95-18.13-9.996-5.432-3.045-10.521-5.995-15.276-8.846-0.76-0.571-3.139-2.234-7.136-5-4.001-2.758-7.375-4.805-10.14-6.14-2.759-1.327-5.473-1.995-8.138-1.995-3.806 0-8.56 2.714-14.268 8.135-5.708 5.428-10.944 11.324-15.7 17.706-4.757 6.379-9.802 12.275-15.126 17.7-5.332 5.427-9.713 8.138-13.135 8.138-1.718 0-3.86-0.479-6.427-1.424-2.566-0.951-4.518-1.766-5.858-2.423-1.328-0.671-3.607-1.999-6.845-4.004-3.244-1.999-5.048-3.094-5.428-3.285-26.075-14.469-48.438-31.029-67.093-49.676-18.649-18.658-35.211-41.019-49.676-67.097-0.19-0.381-1.287-2.19-3.284-5.424-2-3.237-3.333-5.518-3.999-6.854-0.666-1.331-1.475-3.283-2.425-5.852s-1.427-4.709-1.427-6.424c0-3.424 2.713-7.804 8.138-13.134 5.424-5.327 11.326-10.373 17.7-15.128 6.379-4.755 12.275-9.991 17.701-15.699 5.424-5.711 8.136-10.467 8.136-14.273 0-2.663-0.666-5.378-1.997-8.137-1.332-2.765-3.378-6.139-6.139-10.138-2.762-3.997-4.427-6.374-4.999-7.139-2.852-4.755-5.799-9.846-8.848-15.271-3.049-5.424-6.377-11.47-9.995-18.131-3.615-6.658-6.468-11.799-8.564-15.415-6.658-13.321-11.701-20.557-15.128-21.695-1.333-0.571-3.333-0.859-5.995-0.859-5.142 0-11.85 0.95-20.129 2.856-8.282 1.903-14.799 3.899-19.558 5.996-9.517 3.995-19.604 15.605-30.264 34.826-9.707 17.888-14.56 35.593-14.56 53.102 0 5.135 0.333 10.131 0.999 14.989 0.666 4.853 1.856 10.326 3.571 16.418 1.712 6.09 3.093 10.614 4.137 13.56 1.045 2.948 2.996 8.229 5.852 15.845 2.852 7.614 4.567 12.275 5.138 13.988 6.661 18.654 14.56 35.307 23.695 49.964 15.03 24.362 35.541 49.539 61.521 75.521 25.981 25.98 51.153 46.49 75.517 61.526 14.655 9.134 31.314 17.032 49.965 23.698 1.714 0.568 6.375 2.279 13.986 5.141 7.614 2.854 12.897 4.805 15.845 5.852 2.949 1.048 7.474 2.43 13.559 4.145 6.098 1.715 11.566 2.905 16.419 3.576 4.856 0.657 9.853 0.996 14.989 0.996 17.508 0 35.214-4.856 53.105-14.562 19.219-10.656 30.826-20.745 34.823-30.269 2.102-4.754 4.093-11.273 5.996-19.555 1.909-8.278 2.857-14.985 2.857-20.126 6e-3 -2.673-0.281-4.668-0.855-6.012z"/>
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
        <div class="header_logo"></div>
        <span class="header_logo_text">Производство гофрокартона<br> и гофротары</span>
    </div>
    <div class="header_item">
        <a href="/" class="header_info_link">Проект</a>
        <a href="/faq" class="header_info_link">Вопросы</a>
        <a href="/news" class="header_info_link">Новости</a>
    </div>
    <div class="header_item">
        <div class="header_item__telephone_wrap">
            <div class="header_phone_icon">
                <svg version="1.1" viewBox="0 0 401.998 401.998" xml:space="preserve">
                        <path fill="#71aa27"
                              d="m401.13 311.48c-1.137-3.426-8.371-8.473-21.697-15.129-3.61-2.098-8.754-4.949-15.41-8.566-6.662-3.617-12.709-6.95-18.13-9.996-5.432-3.045-10.521-5.995-15.276-8.846-0.76-0.571-3.139-2.234-7.136-5-4.001-2.758-7.375-4.805-10.14-6.14-2.759-1.327-5.473-1.995-8.138-1.995-3.806 0-8.56 2.714-14.268 8.135-5.708 5.428-10.944 11.324-15.7 17.706-4.757 6.379-9.802 12.275-15.126 17.7-5.332 5.427-9.713 8.138-13.135 8.138-1.718 0-3.86-0.479-6.427-1.424-2.566-0.951-4.518-1.766-5.858-2.423-1.328-0.671-3.607-1.999-6.845-4.004-3.244-1.999-5.048-3.094-5.428-3.285-26.075-14.469-48.438-31.029-67.093-49.676-18.649-18.658-35.211-41.019-49.676-67.097-0.19-0.381-1.287-2.19-3.284-5.424-2-3.237-3.333-5.518-3.999-6.854-0.666-1.331-1.475-3.283-2.425-5.852s-1.427-4.709-1.427-6.424c0-3.424 2.713-7.804 8.138-13.134 5.424-5.327 11.326-10.373 17.7-15.128 6.379-4.755 12.275-9.991 17.701-15.699 5.424-5.711 8.136-10.467 8.136-14.273 0-2.663-0.666-5.378-1.997-8.137-1.332-2.765-3.378-6.139-6.139-10.138-2.762-3.997-4.427-6.374-4.999-7.139-2.852-4.755-5.799-9.846-8.848-15.271-3.049-5.424-6.377-11.47-9.995-18.131-3.615-6.658-6.468-11.799-8.564-15.415-6.658-13.321-11.701-20.557-15.128-21.695-1.333-0.571-3.333-0.859-5.995-0.859-5.142 0-11.85 0.95-20.129 2.856-8.282 1.903-14.799 3.899-19.558 5.996-9.517 3.995-19.604 15.605-30.264 34.826-9.707 17.888-14.56 35.593-14.56 53.102 0 5.135 0.333 10.131 0.999 14.989 0.666 4.853 1.856 10.326 3.571 16.418 1.712 6.09 3.093 10.614 4.137 13.56 1.045 2.948 2.996 8.229 5.852 15.845 2.852 7.614 4.567 12.275 5.138 13.988 6.661 18.654 14.56 35.307 23.695 49.964 15.03 24.362 35.541 49.539 61.521 75.521 25.981 25.98 51.153 46.49 75.517 61.526 14.655 9.134 31.314 17.032 49.965 23.698 1.714 0.568 6.375 2.279 13.986 5.141 7.614 2.854 12.897 4.805 15.845 5.852 2.949 1.048 7.474 2.43 13.559 4.145 6.098 1.715 11.566 2.905 16.419 3.576 4.856 0.657 9.853 0.996 14.989 0.996 17.508 0 35.214-4.856 53.105-14.562 19.219-10.656 30.826-20.745 34.823-30.269 2.102-4.754 4.093-11.273 5.996-19.555 1.909-8.278 2.857-14.985 2.857-20.126 6e-3 -2.673-0.281-4.668-0.855-6.012z"/>
                    </svg>
            </div>
            <div class="phone_to_call">
                <a class="header_phone" href="tel:+7(800)2507999">8 (800) 250 79 99
                </a>
                <span class="modal_trigger ask_for_call">Заказать звонок</span>
            </div>
        </div>
        <a class="header_item__button" href="/login">Личный кабинет</a>
    </div>
</header>
<section id="faq">
    <h1 class="title_style">Часто задаваемые вопросы</h1>
    <div class="faq__block">
        <div class="faq__block--question">
            <h6>Предоставляете ли Вы чек?</h6>
            <div class="faq__block--arrow">
                <svg enable-background="new 0 0 451.846 451.847" version="1.1" viewBox="0 0 451.85 451.85" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m345.44 248.29-194.29 194.28c-12.359 12.365-32.397 12.365-44.75 0-12.354-12.354-12.354-32.391 0-44.744l171.91-171.91-171.91-171.9c-12.354-12.359-12.354-32.394 0-44.748 12.354-12.359 32.391-12.359 44.75 0l194.29 194.28c6.177 6.18 9.262 14.271 9.262 22.366 0 8.099-3.091 16.196-9.267 22.373z"/>
                </svg>
            </div>
        </div>
        <div class="faq__block--answer">
            <p>Мы работаем официально и несем полные обязательства перед государством и нашими клиентами. Мы работаем
                официально и несем полные обязательства перед государством и нашими клиентами. Мы работаем официально и
                несем полные обязательства перед государством и нашими клиентами. Мы работаем официально и несем полные
                обязательства перед государством и нашими клиентами.</p>
        </div>
    </div>
    <div class="faq__block">
        <div class="faq__block--question">
            <h6>Предоставляете ли Вы чек?</h6>
            <div class="faq__block--arrow">
                <svg enable-background="new 0 0 451.846 451.847" version="1.1" viewBox="0 0 451.85 451.85" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m345.44 248.29-194.29 194.28c-12.359 12.365-32.397 12.365-44.75 0-12.354-12.354-12.354-32.391 0-44.744l171.91-171.91-171.91-171.9c-12.354-12.359-12.354-32.394 0-44.748 12.354-12.359 32.391-12.359 44.75 0l194.29 194.28c6.177 6.18 9.262 14.271 9.262 22.366 0 8.099-3.091 16.196-9.267 22.373z"/>
                </svg>
            </div>
        </div>
        <div class="faq__block--answer">
            <p>Мы работаем официально и несем полные обязательства перед государством и нашими клиентами. Мы работаем
                официально и несем полные обязательства перед государством и нашими клиентами. Мы работаем официально и
                несем полные обязательства перед государством и нашими клиентами. Мы работаем официально и несем полные
                обязательства перед государством и нашими клиентами.</p>
        </div>
    </div>
    <div class="faq__block">
        <div class="faq__block--question">
            <h6>Предоставляете ли Вы чек?</h6>
            <div class="faq__block--arrow">
                <svg enable-background="new 0 0 451.846 451.847" version="1.1" viewBox="0 0 451.85 451.85" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m345.44 248.29-194.29 194.28c-12.359 12.365-32.397 12.365-44.75 0-12.354-12.354-12.354-32.391 0-44.744l171.91-171.91-171.91-171.9c-12.354-12.359-12.354-32.394 0-44.748 12.354-12.359 32.391-12.359 44.75 0l194.29 194.28c6.177 6.18 9.262 14.271 9.262 22.366 0 8.099-3.091 16.196-9.267 22.373z"/>
                </svg>
            </div>
        </div>
        <div class="faq__block--answer">
            <p>Мы работаем официально и несем полные обязательства перед государством и нашими клиентами. Мы работаем
                официально и несем полные обязательства перед государством и нашими клиентами. Мы работаем официально и
                несем полные обязательства перед государством и нашими клиентами. Мы работаем официально и несем полные
                обязательства перед государством и нашими клиентами.</p>
        </div>
    </div>
    <div class="faq__block">
        <div class="faq__block--question">
            <h6>Предоставляете ли Вы чек?</h6>
            <div class="faq__block--arrow">
                <svg enable-background="new 0 0 451.846 451.847" version="1.1" viewBox="0 0 451.85 451.85" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m345.44 248.29-194.29 194.28c-12.359 12.365-32.397 12.365-44.75 0-12.354-12.354-12.354-32.391 0-44.744l171.91-171.91-171.91-171.9c-12.354-12.359-12.354-32.394 0-44.748 12.354-12.359 32.391-12.359 44.75 0l194.29 194.28c6.177 6.18 9.262 14.271 9.262 22.366 0 8.099-3.091 16.196-9.267 22.373z"/>
                </svg>
            </div>
        </div>
        <div class="faq__block--answer">
            <p>Мы работаем официально и несем полные обязательства перед государством и нашими клиентами. Мы работаем
                официально и несем полные обязательства перед государством и нашими клиентами. Мы работаем официально и
                несем полные обязательства перед государством и нашими клиентами. Мы работаем официально и несем полные
                обязательства перед государством и нашими клиентами.</p>
        </div>
    </div>
</section>

<section id="more">
    <div class="more__block">
        <h1>Остались вопросы?</h1>
        <h6>Заполните форму, и мы перезвоним Вам, чтобы обсудить все детали</h6>
        <form action="">
            <div style="display: flex">
                <input type="text" placeholder="Введите Ваше имя">
                <input type="text" placeholder="Контактный телефон">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Задайте интересующий вас вопрос..."></textarea>
            <input type="submit" value="Оставить заявку">
        </form>
    </div>
</section>

<section class="footer_contacts_section">
    <div class="footer_item">
        <div class="footer_links">
            <div class="footer_logo"></div>
            <div class="footer_links_container">
                <div>
                    <a href="/" class="footer_info_link">Проект</a>
                    <a href="news/index.php" class="footer_info_link">Новости</a>
                    <a href="news/index.php" class="footer_info_link">Личный кабинет</a>
                </div>
                <div>
                    <svg enable-background="new 0 0 96.124 96.123" version="1.1" viewBox="0 0 96.124 96.123"
                         xml:space="preserve">
                            <path fill="#77a103"
                                  d="m72.089 0.02l-12.465-0.02c-14.004 0-23.054 9.285-23.054 23.656v10.907h-12.533c-1.083 0-1.96 0.878-1.96 1.961v15.803c0 1.083 0.878 1.96 1.96 1.96h12.533v39.876c0 1.083 0.877 1.96 1.96 1.96h16.352c1.083 0 1.96-0.878 1.96-1.96v-39.876h14.654c1.083 0 1.96-0.877 1.96-1.96l6e-3 -15.803c0-0.52-0.207-1.018-0.574-1.386s-0.867-0.575-1.387-0.575h-14.659v-9.246c0-4.444 1.059-6.7 6.848-6.7l8.397-3e-3c1.082 0 1.959-0.878 1.959-1.96v-14.674c0-1.081-0.876-1.958-1.957-1.96z"/>
                        </svg>
                        <svg enable-background="new 0 0 548.358 548.358" version="1.1" viewBox="0 0 548.358 548.358"
                             xml:space="preserve">
                            <path fill="#77a103"
                                  d="m545.45 400.3c-0.664-1.431-1.283-2.618-1.858-3.569-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571-0.284-0.28-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415-5.91-7.614-7.234-15.321-4.004-23.13 2.282-5.9 10.854-18.36 25.696-37.397 7.807-10.089 13.99-18.175 18.556-24.267 32.931-43.78 47.208-71.756 42.828-83.939l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712-4.764-1.427-10.853-1.663-18.278-0.712l-82.224 0.568c-1.332-0.472-3.234-0.428-5.712 0.144-2.475 0.572-3.713 0.859-3.713 0.859l-1.431 0.715-1.136 0.859c-0.952 0.568-1.999 1.567-3.142 2.995-1.137 1.423-2.088 3.093-2.848 4.996-8.952 23.031-19.13 44.444-30.553 64.238-7.043 11.803-13.511 22.032-19.418 30.693-5.899 8.658-10.848 15.037-14.842 19.126-4 4.093-7.61 7.372-10.852 9.849-3.237 2.478-5.708 3.525-7.419 3.142-1.715-0.383-3.33-0.763-4.859-1.143-2.663-1.714-4.805-4.045-6.42-6.995-1.622-2.95-2.714-6.663-3.285-11.136-0.568-4.476-0.904-8.326-1-11.563-0.089-3.233-0.048-7.806 0.145-13.706 0.198-5.903 0.287-9.897 0.287-11.991 0-7.234 0.141-15.085 0.424-23.555 0.288-8.47 0.521-15.181 0.716-20.125 0.194-4.949 0.284-10.185 0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137-1.335-2.95-3.289-5.232-5.853-6.852-2.569-1.618-5.763-2.902-9.564-3.856-10.089-2.283-22.936-3.518-38.547-3.71-35.401-0.38-58.148 1.906-68.236 6.855-3.997 2.091-7.614 4.948-10.848 8.562-3.427 4.189-3.905 6.475-1.431 6.851 11.422 1.711 19.508 5.804 24.267 12.275l1.715 3.429c1.334 2.474 2.666 6.854 3.999 13.134 1.331 6.28 2.19 13.227 2.568 20.837 0.95 13.897 0.95 25.793 0 35.689-0.953 9.9-1.853 17.607-2.712 23.127s-2.143 9.993-3.855 13.418c-1.715 3.426-2.856 5.52-3.428 6.28-0.571 0.76-1.047 1.239-1.425 1.427-2.474 0.948-5.047 1.431-7.71 1.431-2.667 0-5.901-1.334-9.707-4-3.805-2.666-7.754-6.328-11.847-10.992-4.093-4.665-8.709-11.184-13.85-19.558-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267-4.952-10.185-9.329-20.037-13.134-29.554-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427-2.095-0.859-4.281-1.475-6.567-1.854l-78.229 0.568c-7.994 0-13.418 1.811-16.274 5.428l-1.143 1.711c-0.571 0.953-0.859 2.475-0.859 4.57 0 2.094 0.571 4.664 1.714 7.707 11.42 26.84 23.839 52.725 37.257 77.659s25.078 45.019 34.973 60.237c9.897 15.229 19.985 29.602 30.264 43.112 10.279 13.515 17.083 22.176 20.412 25.981 3.333 3.812 5.951 6.662 7.854 8.565l7.139 6.851c4.568 4.569 11.276 10.041 20.127 16.416 8.853 6.379 18.654 12.659 29.408 18.85 10.756 6.181 23.269 11.225 37.546 15.126 14.275 3.905 28.169 5.472 41.684 4.716h32.834c6.659-0.575 11.704-2.669 15.133-6.283l1.136-1.431c0.764-1.136 1.479-2.901 2.139-5.276 0.668-2.379 1-5 1-7.851-0.195-8.183 0.428-15.558 1.852-22.124 1.423-6.564 3.045-11.513 4.859-14.846 1.813-3.33 3.859-6.14 6.136-8.418 2.282-2.283 3.908-3.666 4.862-4.142 0.948-0.479 1.705-0.804 2.276-0.999 4.568-1.522 9.944-0.048 16.136 4.429 6.187 4.473 11.99 9.996 17.418 16.56 5.425 6.57 11.943 13.941 19.555 22.124 7.617 8.186 14.277 14.271 19.985 18.274l5.708 3.426c3.812 2.286 8.761 4.38 14.853 6.283 6.081 1.902 11.409 2.378 15.984 1.427l73.087-1.14c7.229 0 12.854-1.197 16.844-3.572 3.998-2.379 6.373-5 7.139-7.851 0.764-2.854 0.805-6.092 0.145-9.712-0.677-3.611-1.344-6.136-2.008-7.563z"/>
                        </svg>
                        <svg enable-background="new 0 0 612 612" version="1.1" viewBox="0 0 612 612"
                             xml:space="preserve">
                            <path fill="#77a103"
                                  d="m612 116.26c-22.525 9.981-46.694 16.75-72.088 19.772 25.929-15.527 45.777-40.155 55.184-69.411-24.322 14.379-51.169 24.82-79.775 30.48-22.907-24.437-55.49-39.658-91.63-39.658-69.334 0-125.55 56.217-125.55 125.51 0 9.828 1.109 19.427 3.251 28.606-104.33-5.24-196.84-55.223-258.75-131.17-10.823 18.51-16.98 40.078-16.98 63.101 0 43.559 22.181 81.993 55.835 104.48-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0 60.806 43.291 111.55 100.69 123.1-10.517 2.83-21.607 4.398-33.08 4.398-8.107 0-15.947-0.803-23.634-2.333 15.985 49.907 62.336 86.199 117.25 87.194-42.947 33.654-97.099 53.655-155.92 53.655-10.134 0-20.116-0.612-29.944-1.721 55.567 35.681 121.54 56.485 192.44 56.485 230.95 0 357.19-191.29 357.19-357.19l-0.421-16.253c24.666-17.593 46.005-39.697 62.794-64.861z"/>
                        </svg>
                </div>
            </div>
        </div>
        <div class="footer_contacts">
            <div class="footer_contacts_item">
                <h3 class="footer_contacts_title">Свяжитесь с нами</h3>
                <div class="footer_contact_item_piece">
                    <div>
                        <svg enable-background="new 0 0 401.998 401.998" version="1.1" viewBox="0 0 401.998 401.998"
                             xml:space="preserve">
                                <path fill="#77a103"
                                      d="m401.13 311.48c-1.137-3.426-8.371-8.473-21.697-15.129-3.61-2.098-8.754-4.949-15.41-8.566-6.662-3.617-12.709-6.95-18.13-9.996-5.432-3.045-10.521-5.995-15.276-8.846-0.76-0.571-3.139-2.234-7.136-5-4.001-2.758-7.375-4.805-10.14-6.14-2.759-1.327-5.473-1.995-8.138-1.995-3.806 0-8.56 2.714-14.268 8.135-5.708 5.428-10.944 11.324-15.7 17.706-4.757 6.379-9.802 12.275-15.126 17.7-5.332 5.427-9.713 8.138-13.135 8.138-1.718 0-3.86-0.479-6.427-1.424-2.566-0.951-4.518-1.766-5.858-2.423-1.328-0.671-3.607-1.999-6.845-4.004-3.244-1.999-5.048-3.094-5.428-3.285-26.075-14.469-48.438-31.029-67.093-49.676-18.649-18.658-35.211-41.019-49.676-67.097-0.19-0.381-1.287-2.19-3.284-5.424-2-3.237-3.333-5.518-3.999-6.854-0.666-1.331-1.475-3.283-2.425-5.852s-1.427-4.709-1.427-6.424c0-3.424 2.713-7.804 8.138-13.134 5.424-5.327 11.326-10.373 17.7-15.128 6.379-4.755 12.275-9.991 17.701-15.699 5.424-5.711 8.136-10.467 8.136-14.273 0-2.663-0.666-5.378-1.997-8.137-1.332-2.765-3.378-6.139-6.139-10.138-2.762-3.997-4.427-6.374-4.999-7.139-2.852-4.755-5.799-9.846-8.848-15.271-3.049-5.424-6.377-11.47-9.995-18.131-3.615-6.658-6.468-11.799-8.564-15.415-6.658-13.321-11.701-20.557-15.128-21.695-1.333-0.571-3.333-0.859-5.995-0.859-5.142 0-11.85 0.95-20.129 2.856-8.282 1.903-14.799 3.899-19.558 5.996-9.517 3.995-19.604 15.605-30.264 34.826-9.707 17.888-14.56 35.593-14.56 53.102 0 5.135 0.333 10.131 0.999 14.989 0.666 4.853 1.856 10.326 3.571 16.418 1.712 6.09 3.093 10.614 4.137 13.56 1.045 2.948 2.996 8.229 5.852 15.845 2.852 7.614 4.567 12.275 5.138 13.988 6.661 18.654 14.56 35.307 23.695 49.964 15.03 24.362 35.541 49.539 61.521 75.521 25.981 25.98 51.153 46.49 75.517 61.526 14.655 9.134 31.314 17.032 49.965 23.698 1.714 0.568 6.375 2.279 13.986 5.141 7.614 2.854 12.897 4.805 15.845 5.852 2.949 1.048 7.474 2.43 13.559 4.145 6.098 1.715 11.566 2.905 16.419 3.576 4.856 0.657 9.853 0.996 14.989 0.996 17.508 0 35.214-4.856 53.105-14.562 19.219-10.656 30.826-20.745 34.823-30.269 2.102-4.754 4.093-11.273 5.996-19.555 1.909-8.278 2.857-14.985 2.857-20.126 6e-3 -2.673-0.281-4.668-0.855-6.012z"/>
                            </svg>
                    </div>
                    <span>+7 (800) 250-79-99</span>
                </div>
                <div class="footer_contact_item_piece">
                    <div>
                        <svg enable-background="new 0 0 31.416 31.416" version="1.1" viewBox="0 0 31.416 31.416"
                             xml:space="preserve">
                                <path fill="#77a103"
                                      d="m28.755 6.968l-0.47 0.149-2.503 0.223-0.707 1.129-0.513-0.163-1.992-1.796-0.289-0.934-0.387-0.996-1.252-1.123-1.477-0.289-0.034 0.676 1.447 1.412 0.708 0.834-0.796 0.416-0.648-0.191-0.971-0.405 0.033-0.783-1.274-0.524-0.423 1.841-1.284 0.291 0.127 1.027 1.673 0.322 0.289-1.641 1.381 0.204 0.642 0.376h1.03l0.705 1.412 1.869 1.896-0.137 0.737-1.507-0.192-2.604 1.315-1.875 2.249-0.244 0.996h-0.673l-1.254-0.578-1.218 0.578 0.303 1.285 0.53-0.611 0.932-0.029-0.065 1.154 0.772 0.226 0.771 0.866 1.259-0.354 1.438 0.227 1.67 0.449 0.834 0.098 1.414 1.605 2.729 1.605-1.765 3.372-1.863 0.866-0.707 1.927-2.696 1.8-0.287 1.038c6.892-1.66 12.019-7.851 12.019-15.253-2e-3 -3.233-0.982-6.242-2.66-8.739z"/>
                            <path fill="#77a103"
                                  d="m17.515 23.917l-1.144-2.121 1.05-2.188-1.05-0.314-1.179-1.184-2.612-0.586-0.867-1.814v1.077h-0.382l-2.251-3.052v-2.507l-1.65-2.683-2.62 0.467h-1.765l-0.888-0.582 1.133-0.898-1.13 0.261c-1.362 2.326-2.156 5.025-2.156 7.916 0 8.673 7.031 15.707 15.705 15.707 0.668 0 1.323-0.059 1.971-0.137l-0.164-1.903s0.721-2.826 0.721-2.922c-1e-3 -0.097-0.722-2.537-0.722-2.537z"/>
                            <path fill="#77a103"
                                  d="m5.84 5.065l2.79-0.389 1.286-0.705 1.447 0.417 2.312-0.128 0.792-1.245 1.155 0.19 2.805-0.263 0.773-0.852 1.09-0.728 1.542 0.232 0.562-0.085c-2.031-0.956-4.291-1.509-6.686-1.509-4.875 0-9.234 2.222-12.112 5.711h8e-3l2.236-0.646zm10.532-3.503l1.604-0.883 1.03 0.595-1.491 1.135-1.424 0.143-0.641-0.416 0.922-0.574zm-4.751 0.129l0.708 0.295 0.927-0.295 0.505 0.875-2.14 0.562-1.029-0.602c-1e-3 0 1.006-0.648 1.029-0.835z"/>
                            </svg>
                    </div>
                    <span>f-karton@mail.ru</span>
                </div>
            </div>
            <div class="footer_contacts_item">
                <h3 class="footer_contacts_title">Где мы находимся?</h3>
                <div class="footer_contact_item_piece">
                    <div>
                        <svg enable-background="new 0 0 430.1 430.1" version="1.1" viewBox="0 0 430.1 430.1"
                             xml:space="preserve">
                                <path fill="#77a103"
                                      d="m356.2 107.1c-1.5-5.7-4.6-11.9-6.9-17.2-27.6-66.2-87.7-89.9-136.2-89.9-65 0-136.6 43.6-146.1 133.4v18.4c0 0.8 0.3 7.6 0.6 11.1 5.4 42.8 39.1 88.3 64.4 131.1 27.1 45.9 55.3 91 83.2 136.1 17.2-29.4 34.4-59.3 51.2-87.9 4.6-8.4 9.9-16.8 14.5-24.9 3.1-5.3 8.9-10.7 11.6-15.7 27.1-49.7 70.8-99.8 70.8-149.1v-20.3c-0.1-5.3-6.7-24-7.1-25.1zm-142 92.1c-19.1 0-40-9.6-50.3-35.9-1.5-4.2-1.4-12.6-1.4-13.4v-11.9c0-33.6 28.6-48.9 53.4-48.9 30.6 0 54.2 24.5 54.2 55.1 0 30.5-25.3 55-55.9 55z"/>
                            </svg>
                    </div>
                    <span>г. Набережные Челны, Механизаторный проезд, 7/1</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_item">
        <iframe src="https://yandex.ru/map-widget/v1/-/CBFsRAHOgC" frameborder="1" allowfullscreen="true"></iframe>
    </div>
</section>
<footer>
    <div class="politics">
        <span>Все права защищены. © Фабрика Картона 2018</span>
        <a href="./politikaconf.pdf" target="_blank">Политика конфиденциальности</a>
    </div>
    <div class="creator">
        <div class="creator_logo"></div>
        <span>Разработка сайта</span>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="/paper.js/paper.js"></script>
<script>
    $('.faq__block--question').on('click', function(e) {
        var target = $(e.currentTarget);
        var next = $(e.currentTarget.nextElementSibling);

        if(!target.hasClass('active')) {
            target.addClass('active');
            next.addClass('active')
        }
        else {
            target.removeClass('active');
            next.removeClass('active');
        }

        console.log(next);
    });
</script>
</body>

</html>