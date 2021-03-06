<?php
require __DIR__."/../app/util/ViewGenerator.php";

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
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
    <link href="https://fonts.googleapis.com/css?family=Cuprum&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="./paper.css/reset.css">
    <link rel="stylesheet" href="./paper.css/paper.css">
    <title>Инвестиционный проект “Набережночелнинская картонно-бумажная фабрика”</title>
</head>

<body>
<header>
    <nav>
        <div class="menu_bar">
            <a href="/">
                <div class="header_logo"></div>
            </a>
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
                    <a href="/" class="active">Проект</a>
                    <a href="/faq">Вопросы</a>
                    <a href="/news">Новости</a>
                </div>
                <div class="hidden_menu_item">
                        <span class="hidden_menu_text">ООО"Набережночелнинская картонно-бумажная Фабрика" <br>
                            Производство по переработке макулатуры в бумагу</span>
                    <div class="header_item__telephone_wrap">
                        <div class="header_phone_icon">
                            <svg version="1.1" viewBox="0 0 401.998 401.998" xml:space="preserve">
                                    <path fill="#71aa27"
                                          d="m401.13 311.48c-1.137-3.426-8.371-8.473-21.697-15.129-3.61-2.098-8.754-4.949-15.41-8.566-6.662-3.617-12.709-6.95-18.13-9.996-5.432-3.045-10.521-5.995-15.276-8.846-0.76-0.571-3.139-2.234-7.136-5-4.001-2.758-7.375-4.805-10.14-6.14-2.759-1.327-5.473-1.995-8.138-1.995-3.806 0-8.56 2.714-14.268 8.135-5.708 5.428-10.944 11.324-15.7 17.706-4.757 6.379-9.802 12.275-15.126 17.7-5.332 5.427-9.713 8.138-13.135 8.138-1.718 0-3.86-0.479-6.427-1.424-2.566-0.951-4.518-1.766-5.858-2.423-1.328-0.671-3.607-1.999-6.845-4.004-3.244-1.999-5.048-3.094-5.428-3.285-26.075-14.469-48.438-31.029-67.093-49.676-18.649-18.658-35.211-41.019-49.676-67.097-0.19-0.381-1.287-2.19-3.284-5.424-2-3.237-3.333-5.518-3.999-6.854-0.666-1.331-1.475-3.283-2.425-5.852s-1.427-4.709-1.427-6.424c0-3.424 2.713-7.804 8.138-13.134 5.424-5.327 11.326-10.373 17.7-15.128 6.379-4.755 12.275-9.991 17.701-15.699 5.424-5.711 8.136-10.467 8.136-14.273 0-2.663-0.666-5.378-1.997-8.137-1.332-2.765-3.378-6.139-6.139-10.138-2.762-3.997-4.427-6.374-4.999-7.139-2.852-4.755-5.799-9.846-8.848-15.271-3.049-5.424-6.377-11.47-9.995-18.131-3.615-6.658-6.468-11.799-8.564-15.415-6.658-13.321-11.701-20.557-15.128-21.695-1.333-0.571-3.333-0.859-5.995-0.859-5.142 0-11.85 0.95-20.129 2.856-8.282 1.903-14.799 3.899-19.558 5.996-9.517 3.995-19.604 15.605-30.264 34.826-9.707 17.888-14.56 35.593-14.56 53.102 0 5.135 0.333 10.131 0.999 14.989 0.666 4.853 1.856 10.326 3.571 16.418 1.712 6.09 3.093 10.614 4.137 13.56 1.045 2.948 2.996 8.229 5.852 15.845 2.852 7.614 4.567 12.275 5.138 13.988 6.661 18.654 14.56 35.307 23.695 49.964 15.03 24.362 35.541 49.539 61.521 75.521 25.981 25.98 51.153 46.49 75.517 61.526 14.655 9.134 31.314 17.032 49.965 23.698 1.714 0.568 6.375 2.279 13.986 5.141 7.614 2.854 12.897 4.805 15.845 5.852 2.949 1.048 7.474 2.43 13.559 4.145 6.098 1.715 11.566 2.905 16.419 3.576 4.856 0.657 9.853 0.996 14.989 0.996 17.508 0 35.214-4.856 53.105-14.562 19.219-10.656 30.826-20.745 34.823-30.269 2.102-4.754 4.093-11.273 5.996-19.555 1.909-8.278 2.857-14.985 2.857-20.126 6e-3 -2.673-0.281-4.668-0.855-6.012z"/>
                                </svg>
                        </div>
                        <div class="phone_to_call">
                            <a class="header_phone" href="tel:+7(987)2222233">+7 (987) 222-22-33
                            </a>
                            <span class="modal_trigger ask_for_call">Заказать звонок</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="header_item">
        <a href="/">
            <div class="header_logo"></div>
        </a>
        <span class="header_logo_text">Производство по переработке макулатуры в бумагу</span>
    </div>
    <div class="header_item">
        <a href="/" class="header_info_link active">Проект</a>
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
                <a class="header_phone" href="tel:+7(987)2222233">+7 (987) 222-22-33
                </a>
                <span class="modal_trigger ask_for_call">Заказать звонок</span>
            </div>
        </div>
        <a class="header_item__button" href="/login">Личный кабинет</a>
    </div>
</header>
<section class="main_section">
    <div class="main_section__wrap"></div>
    <div class="main_section__content">
        <main class="main_section__content_item">
            <h1 class="title_style">Инвестируй <br> и становись<span class="styled_text"> собственником</span>
                бумажной фабрики</h1>
            <p class="common_text">Выгодно вложить свои накопления в реальноепроизводство и получать дивиденды может каждый</p>
            <div class="main_section__buttons">
                <button class="main_section__styled_btn modal_trigger">Инвестировать</button>
                <button class="main_section__normal_btn slider_trigger">
                    <svg enable-background="new 0 0 420 420" version="1.1" viewBox="0 0 420 420" xml:space="preserve">
                            <path fill="#ffffff"
                                  d="M300,240.715V155l-120,85.715V155h-30V85h-30v70H90V35H30v120H0v230h420V155L300,240.715z M160,335h-40   v-40h40V335z M230,335h-40v-40h40V335z M300,335h-40v-40h40V335z"/>
                        </svg>
                    Смотреть план проекта
                </button>
            </div>
        </main>
        <main class="main_section__content_item">
            <div class="circle_amimation_container">
                <div class="pulse"></div>
                <svg class="progress__value" width="7.5em" height="7.5em" viewBox="0 0 120 120">
                    <circle cx="60" cy="60" r="54" fill="none" stroke="#71aa27" stroke-width="2"/>
                </svg>
                <svg class="progress__value_second" width="7.5em" height="7.5em" viewBox="0 0 120 120">
                    <circle cx="40" cy="40" r="34" fill="none" stroke="#d9d9d9" stroke-width="2"/>
                </svg>
                <svg class="main_section_icon" enable-background="new 0 0 232.153 232.153" version="1.1"
                     viewBox="0 0 232.15 232.15"
                     xml:space="preserve">
                        <path fill="#ffffff"
                              d="m203.79 99.628-154.48-97.334c-4.567-2.719-10.238-2.266-14.521-2.266-17.132 0-17.056 13.227-17.056 16.578v198.94c0 2.833-0.075 16.579 17.056 16.579 4.283 0 9.955 0.451 14.521-2.267l154.48-97.333c12.68-7.545 10.489-16.449 10.489-16.449s2.192-8.904-10.488-16.448z"
                              clip-rule="evenodd" fill-rule="evenodd"/>
                    </svg>
                <span class="animation_text">Онлайн <br> трансляция</span>
            </div>
        </main>
    </div>
</section>
<section class="advantages">
    <h1 class="title_style">Почему выгодно инвестировать в производство бумаги<br> для
        гофрирования из макулатурного сырья?</h1>
    <div class="advantages_content">
        <div class="quote__wrap">
            <div class="quote__video">
                <video id="video_2" tabindex="-1">
                    <source src="video.mp4" type="video/mp4">
                    Видео не поддерживается. <a href="video.mp4">Ссылка на файл</a>
                </video>
                <div class="quote__video--hover" id="hover"></div>
                <button class="quote__video--play" id="play">
                    <svg class="quote__video_play_icon" enable-background="new 0 0 232.153 232.153" version="1.1"
                         viewBox="0 0 232.15 232.15" xml:space="preserve">
                        <path fill="#ffffff"
                              d="m203.79 99.628-154.48-97.334c-4.567-2.719-10.238-2.266-14.521-2.266-17.132 0-17.056 13.227-17.056 16.578v198.94c0 2.833-0.075 16.579 17.056 16.579 4.283 0 9.955 0.451 14.521-2.267l154.48-97.333c12.68-7.545 10.489-16.449 10.489-16.449s2.192-8.904-10.488-16.448z"
                              clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
                <p class="quote__video--label">О проекте<br>за 2 минуты</p>
            </div>
            <div class="quote__label">
                <div class="quote__label--text">
                    <h6>Посмотрите видео</h6>
                    <p>от исполнительного директора<br>Батаева Алексея</p>
                </div>
            </div>
        </div>
        <div class="chart__wrap">
            <div class="chart__controls">
                <h6>Объем рынка</h6>
                <p> упаковочных материалов из картона и гофрокатрона в 2013-2017 гг, тыс. т</p>
            </div>
            <div class="chart__container">
                <canvas id="chart"></canvas>
            </div>
        </div>
        <p class="from">Источник: данные Росстата, ФТС, аналитика IndexBox</p>
    </div>
</section>
<section class="safety">
    <h1 class="title_style">Преимущества проекта</h1>
    <div class="safety_content">
        <div class="safety_content_item">
            <div>
                <svg width="512pt" height="512pt" version="1.1" viewBox="-38 0 512 512.00142">
                    <g>
                        <path fill="#ffffff"
                              d="m218 158.46c-53.793 0-97.555 43.762-97.555 97.551 0 53.793 43.762 97.555 97.555 97.555 53.789 0 97.551-43.762 97.551-97.555 0-53.789-43.762-97.551-97.551-97.551zm57.918 79.18l-69.887 69.887c-2.9336 2.9336-6.7812 4.4023-10.625 4.4023s-7.6875-1.4648-10.621-4.4023l-26.707-26.707c-5.8672-5.8633-5.8672-15.375 0-21.242 5.8633-5.8672 15.375-5.8672 21.242 0l16.086 16.086 59.27-59.266c5.8633-5.8672 15.375-5.8672 21.242 0 5.8672 5.8633 5.8672 15.375 0 21.242z"/>
                        <path fill="#ffffff"
                              d="m435.49 138.92l-0.015625-0.39844c-0.22266-4.918-0.37109-10.121-0.46094-15.91-0.41797-28.23-22.859-51.582-51.094-53.16-58.867-3.2852-104.41-22.48-143.32-60.406l-0.33203-0.31641c-12.691-11.637-31.836-11.637-44.531 0l-0.33203 0.31641c-38.91 37.926-84.449 57.121-143.32 60.41-28.23 1.5742-50.676 24.926-51.094 53.16-0.085938 5.75-0.23828 10.953-0.46094 15.906l-0.023437 0.92578c-1.1445 60.027-2.5664 134.73 22.426 202.54 13.742 37.289 34.555 69.703 61.855 96.348 31.094 30.344 71.82 54.434 121.05 71.598 1.6016 0.55859 3.2656 1.0117 4.9609 1.3516 2.3906 0.47656 4.7969 0.71484 7.2031 0.71484s4.8164-0.23828 7.2031-0.71484c1.6953-0.33984 3.3711-0.79688 4.9805-1.3594 49.168-17.195 89.852-41.297 120.92-71.637 27.289-26.652 48.102-59.074 61.855-96.371 25.086-68.012 23.668-142.86 22.527-203zm-217.49 244.69c-70.359 0-127.6-57.238-127.6-127.6 0-70.359 57.238-127.6 127.6-127.6 70.355 0 127.6 57.238 127.6 127.6 0 70.359-57.242 127.6-127.6 127.6z"/>
                    </g>
                </svg>
            </div>
            <h6>Застрахованные риски</h6>
            <span class="common_text">инвестиции застрахованы<br>в страховой компании "Согласие"</span>
        </div>
        <div class="safety_content_item">
            <div>
                <svg viewBox="0 0 24 23">
                    <g transform="translate(-971 -1894)" fill="#fff">
                        <g transform="translate(0 1478)">
                            <g transform="translate(951 395)">
                                <g transform="translate(20 21)">
                                    <path d="m10.5 2c-5.7994-9.2922e-4 -10.5 4.7-10.5 10.499-4.6462e-4 5.7998 4.7006 10.501 10.5 10.501 5.799 4.646e-4 10.501-4.7005 10.5-10.501h-10.5v-10.499z"/>
                                    <path d="m13 0v10h11c-4.867e-4 -5.5235-4.9247-10.001-11-10z"/>
                                </g>
                            </g>
                        </g>
                    </g>
                    </g>
                </svg>
            </div>
            <h6>Спрос превышает предложение</h6>
            <span class="common_text">спрос на гофрокартон превышает
                    предложение и не имеет сезонности</span>
        </div>
        <div class="safety_content_item">
            <div>
                <svg width="493.35px" height="493.35px" enable-background="new 0 0 493.353 493.353" version="1.1"
                     viewBox="0 0 493.353 493.353" xml:space="preserve">
                        <path fill="#ffffff"
                              d="m62.384 38.114c-7.138-7.133-15.752-10.706-25.837-10.706-10.089 0-18.702 3.576-25.841 10.706-7.135 7.139-10.706 15.753-10.706 25.841 0 13.703 6.088 24.173 18.271 31.405v361.45c0 2.475 0.902 4.617 2.714 6.424 1.807 1.807 3.949 2.71 6.423 2.71h18.271c2.474 0 4.615-0.896 6.423-2.71 1.809-1.807 2.712-3.949 2.712-6.424v-361.45c12.185-7.236 18.271-17.703 18.271-31.405 0-10.085-3.567-18.698-10.701-25.841z"/>
                    <path fill="#ffffff"
                          d="m487.93 69.385c-3.62-3.617-7.905-5.426-12.854-5.426-2.471 0-7.659 1.997-15.558 5.996-7.897 3.999-16.275 8.47-25.125 13.418-8.843 4.949-19.321 9.419-31.401 13.418-12.087 3.999-23.271 5.996-33.544 5.996-9.521 0-17.895-1.809-25.133-5.424-23.982-11.231-44.816-19.607-62.522-25.127-17.7-5.519-36.732-8.277-57.099-8.277-35.214 0-75.279 11.418-120.2 34.258-11.043 5.52-18.56 9.613-22.557 12.277-5.902 4.38-8.854 9.611-8.854 15.703v211.84c0 4.948 1.812 9.236 5.429 12.847 3.612 3.62 7.898 5.428 12.847 5.428 3.044 0 6.18-0.855 9.419-2.567 51.772-27.791 95.93-41.685 132.48-41.685 13.893 0 27.454 2.094 40.678 6.279 13.229 4.188 24.222 8.758 32.976 13.702 8.761 4.948 19.082 9.521 30.978 13.709 11.902 4.179 23.654 6.276 35.262 6.276 29.314 0 64.433-11.036 105.35-33.119 5.144-2.663 8.897-5.277 11.276-7.848 2.381-2.569 3.572-6.231 3.572-10.995v-217.84c1e-3 -4.947-1.806-9.226-5.42-12.841z"/>
                    </svg>
            </div>
            <h6>Поддержка правительства РТ</h6>
            <span class="common_text">проект включен в ТОСЭР, поддерживается<br>и контролируется правительством РТ</span>
        </div>
        <div class="safety_content_item">
            <div>
                <svg viewBox="0 0 23 26" xmlns="http://www.w3.org/2000/svg">
                    <path d="m6.5 0s6.5 7.0256 6.5 11.25c0 4.2244-2.1415 6.75-6.5 6.75-4.3585 0-6.5-2.5256-6.5-6.75 0-4.2244 6.5-11.25 6.5-11.25zm-0.92857 16.65c0.24955 0 0.45268-0.1856 0.46428-0.4275 0.01161-0.2419-0.1741-0.4444-0.41785-0.4669-0.9692-0.045-1.8688-0.495-2.4781-1.2262-1.2362-1.5581-0.82991-4.0781-0.82411-4.1006 0.03483-0.2419-0.13348-0.46693-0.38303-0.5063-0.24955-0.045-0.4875 0.1181-0.53393 0.3544-3.4e-4 0.0023-8.4e-4 0.0056-0.0015 0.0099-0.0332 0.2166-0.45147 2.9458 0.99971 4.7826 0.76027 0.9394 1.8978 1.5131 3.1281 1.5806h0.04643z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                    <path d="m16 14.657c0-2.7156 3.5-6.6573 3.5-6.6573s3.5 3.9417 3.5 6.6573-1.1539 4.3427-3.5 4.3427-3.5-1.6271-3.5-4.3427zm3.0625 2.9677c0.8094-0.0115 1.5805-0.3609 2.1438-0.9682 0.4867-0.6532 0.6617-1.5068 0.4757-2.3146-0.0437-0.2464-0.2679-0.4068-0.5031-0.3667s-0.3937 0.2693-0.3609 0.5156c0.1367 0.5386 0.0328 1.1172-0.2789 1.5698-0.3938 0.4068-0.9243 0.636-1.4766 0.6474-0.2406 0-0.4375 0.2063-0.4375 0.4584s0.1969 0.4583 0.4375 0.4583z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                    <path d="m13.5 26c-1.75 0-2.5-1.2444-2.5-3.1111s2.5-4.8889 2.5-4.8889 2.5 3.0222 2.5 4.8889-0.75 3.1111-2.5 3.1111zm-0.4167-1.3333c0.1927 0 0.3646-0.1445 0.4063-0.3445 0.0416-0.2-0.0469-0.4055-0.224-0.5-0.1302-0.0555-0.2291-0.1666-0.276-0.3111-0.0417-0.1444-0.0261-0.3 0.0469-0.4278 0.1041-0.2166 0.0208-0.4833-0.1875-0.5944-0.2032-0.1111-0.4532-0.0222-0.5573 0.2-0.1719 0.3389-0.2032 0.7389-0.0886 1.1055 0.1146 0.3667 0.3646 0.6667 0.6927 0.8278 0.0573 0.0278 0.125 0.0445 0.1875 0.0445z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                </svg>
            </div>
            <h6>Доступные ресурсы</h6>
            <span class="common_text">завод строится на территории<br>промышленного парка<br>«Развитие», где низкие тарифы на<br>ресурсы</span>
        </div>
        <div class="safety_content_item">
            <div>
                <svg viewBox="0 0 28 29" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.9828 10.4522V8C23.6644 8.05809 23.3361 8.08952 23 8.08952C22.6639 8.08952 22.3356 8.05809 22.0172 8V10.4522L18 12.59V17H19.9656V13.6745L23 12.0597L26.0344 13.6745V17H28V12.59L23.9828 10.4522Z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                    <path d="m12.978 20.003c-1.1649 0.8458-2.7606 1.3444-4.4793 1.3444h-1.2e-4c-0.83419 0-1.6502-0.1184-2.4254-0.352-0.7905-0.2382-1.4794-0.5801-2.05-0.995l-1.0227 9h11l-1.0224-8.9974z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                    <path d="m19 6c-0.4514-0.73555-0.7114-1.5892-0.7114-2.5s0.26-1.7645 0.7113-2.5h-11c0.45136 0.73548 0.71132 1.5892 0.71132 2.5s-0.25996 1.7645-0.71132 2.5h11z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                    <path d="m7.6284 6c-0.91357 1.1413-2.3515 1.8793-3.9669 1.8793-0.22434 0-0.44489-0.01561-0.66152-0.0432l1.37 3.1639c1.1586-1.152 2.7743-1.8337 4.5174-1.8337 0.03757 0 0.07507 6.6e-4 0.11258 0.00133l-1.3716-3.1676z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                    <path d="m10.222 11.344c-0.55065-0.2281-1.1294-0.3437-1.7203-0.3437-1.8273 0-3.4599 1.0906-4.1593 2.7784-0.94949 2.2918 0.14298 4.9286 2.4354 5.8779 0.55056 0.228 1.1294 0.3436 1.7203 0.3437h6e-5c1.8273 0 3.4598-1.0906 4.1591-2.7784 0.9496-2.2918-0.143-4.9286-2.4353-5.8779z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                    <path d="m3 0c-1.6542 0-3 1.3458-3 3s1.3458 3 3 3c1.6542-6e-5 3-1.3458 3-3 0-1.6542-1.3458-3-3-3z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                    <path d="m23 0c-1.6542 0-3 1.3458-3 3s1.3458 3 3 3 3-1.3458 3-3c0-1.6542-1.3458-3-3-3z"
                          clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                </svg>
            </div>
            <h6>Высокотехнологичное оборудование</h6>
            <span class="common_text">оборудование из КНР проверено многими<br>производителями стран СНГ</span>
        </div>
        <div class="safety_content_item">
            <div>
                <svg enable-background="new 0 0 890.5 890.5" version="1.1" viewBox="0 0 890.5 890.5"
                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		            <path fill="#fff"
                          d="m208.1 180.56l355-96.9-18.8-38c-12.3-24.7-42.3-34.9-67-22.6l-317.8 157.5h48.6z"/>
                    <path fill="#fff"
                          d="m673.3 86.46c-4.399 0-8.8 0.6-13.2 1.8l-83.399 22.8-254.7 69.5h415.1l-15.6-57.2c-6-22.3-26.2-36.9-48.2-36.9z"/>
                    <path fill="#fff"
                          d="m789.2 215.56h-739.1c-15.8 0-29.9 7.3-39.1 18.8-4.2 5.3-7.4 11.4-9.2 18.1-1.1 4.2-1.8 8.6-1.8 13.1v557.1c0 27.601 22.4 50 50 50h739.1c27.601 0 50-22.399 50-50v-139.5h-296.7c-46.9 0-85-38.1-85-85v-111.2c0-23 9.199-43.899 24.1-59.199 13.2-13.601 30.9-22.801 50.7-25.101 3.3-0.399 6.7-0.6 10.1-0.6h296.8v-136.5c0.1-27.6-22.3-50-49.9-50z"/>
                    <path fill="#fff"
                          d="m874.2 449.86c-5-4.6-10.9-8.1-17.5-10.4-5.101-1.699-10.5-2.699-16.2-2.699h-298.1c-27.601 0-50 22.399-50 50v111.3c0 27.6 22.399 50 50 50h298.1c5.7 0 11.1-1 16.2-2.7 6.6-2.2 12.5-5.8 17.5-10.4 10-9.1 16.3-22.3 16.3-36.899v-111.3c0-14.601-6.3-27.802-16.3-36.901zm-227.4 102.5c0 13.8-11.2 25-25 25h-16.6c-13.8 0-25-11.2-25-25v-16.6c0-8 3.7-15.101 9.6-19.601 4.3-3.3 9.601-5.399 15.4-5.399h16.6c13.8 0 25 11.199 25 25v16.6z"/>
                </svg>
            </div>
            <h6>Высокая доходность</h6>
            <span class="common_text">Доходность проекта позволит инвесторам увеличить свои инвестиции в 3.5 раза</span>
        </div>
    </div>
</section>
<section class="profit">
    <h1 class="title_style">Предполагаемая доходность проекта</h1>
    <div class="profit_content">
        <div class="profit_content__block">
            <div class="profit_content__block--info">
                <h1>Доход</h1>
                <h6>Выручка от реализации товаров</h6>
                <p class="amount">186 млн. руб. в месяц</p>
            </div>
            <div class="profit_content__block--info">
                <h1>Расходы</h1>
                <h6>Управленческие и коммерческие</h6>
                <p class="amount">95 млн. руб. в месяц</p>
            </div>
        </div>
        <div class="profit_content__block">
            <div class="profit_content__block--info pure_income">
                <h1>Чистая прибыль</h1>
                <h2>91 млн. руб. в месяц</h2>
                <p class="amount">IRR<br>130,1%</p>
            </div>
        </div>
        <svg class="top" viewBox="0 0 242 76" xmlns="http://www.w3.org/2000/svg">
            <path d="m1.674 46.292s34.69-12.268 102.26 16.745c67.574 29.013 136.77-49.349 136.77-49.349"
                  stroke="#E6E6E6"/>
        </svg>
        <svg class="bottom" viewBox="0 0 242 76" xmlns="http://www.w3.org/2000/svg">
            <path d="m1.674 46.292s34.69-12.268 102.26 16.745c67.574 29.013 136.77-49.349 136.77-49.349"
                  stroke="#E6E6E6"/>
        </svg>
    </div>
</section>
<section class="table">
    <div class="table_bg">
        <div class="table_bg_item"></div>
        <div class="table_bg_item"></div>
        <div class="table_bg_item"></div>
    </div>
    <div class="table_content">
        <div class="table_content_item">
            <div class="table_content_item_header">
                <h1 class="table_content_item_calc_title">Рассчитайте свой доход</h1>
                <h3 class="table_content_item_calc_title_secondary">при инвестировании в проект</h3>
                <div class="range_slider_number">
                    <span class="range_slider_number_text">Сумма Ваших инвестиций:</span>
                    <span> <span class="range_slider_input">1 370 000</span>
                            руб.</span>
                </div>
                <div class="range-slider-container">
                    <input type="range" class="range-slider"/>
                    <span id="range-value-bar"></span>
                    <span id="range-value"></span>
                </div>
            </div>
            <div class="table_content_item_body">
                <div class="table_content_item_body_wrap"></div>
                <div class="table_content_item_body_content">
                    <div class="table_content_calc_item">
                        <span class="table_content_calc_item_number"><span>30</span> <span>руб.</span></span>
                        <span class="table_calc_s_title">ваш доход от инвестирования</span>
                    </div>
                    <button class="main_section__styled_btn modal_trigger">Инвестировать в проект</button>
                </div>
            </div>
        </div>
        <div class="table_content_item"></div>
        <div class="table_content_item"></div>
    </div>
</section>
<section class="conditions">
    <h1 class="title_style">Предложение для инвестора</h1>
    <div class="conditions_content">
        <div class="conditions_content_item">
            <div class="vertical_line"></div>

            <div class="conditions_content_item--block">
                <svg class="dot" fill="none" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="m6 10c2.2091 0 4-1.7909 4-4s-1.7909-4-4-4-4 1.7909-4 4 1.7909 4 4 4z" clip-rule="evenodd"
                          fill="#fff" fill-rule="evenodd" stroke="#71AA27" stroke-width="3"/>
                </svg>
                <svg class="line" fill="none" viewBox="0 0 42 2" xmlns="http://www.w3.org/2000/svg">
                    <path d="m1 1h40" stroke="#E6E6E6" stroke-linecap="square"/>
                </svg>
                <div class="block--date">01.02.2019 - 01.04.2019</div>
                <p class="block--text">Заключение застрахованного договора инвестиционного займа.
                    Инвестиционный взнос от 600 тыс. рублей.</p>
            </div>

            <div class="conditions_content_item--block">
                <svg class="dot" fill="none" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="m6 10c2.2091 0 4-1.7909 4-4s-1.7909-4-4-4-4 1.7909-4 4 1.7909 4 4 4z" clip-rule="evenodd"
                          fill="#fff" fill-rule="evenodd" stroke="#71AA27" stroke-width="3"/>
                </svg>
                <svg class="line" fill="none" viewBox="0 0 42 2" xmlns="http://www.w3.org/2000/svg">
                    <path d="m1 1h40" stroke="#E6E6E6" stroke-linecap="square"/>
                </svg>
                <div class="block--date">01.08.2021 - 31.07.2022</div>
                <p class="block--text">Возврат вложенных инвестиций.</p>
            </div>

            <div class="conditions_content_item--block">
                <svg class="dot" fill="none" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="m6 10c2.2091 0 4-1.7909 4-4s-1.7909-4-4-4-4 1.7909-4 4 1.7909 4 4 4z" clip-rule="evenodd"
                          fill="#fff" fill-rule="evenodd" stroke="#71AA27" stroke-width="3"/>
                </svg>
                <svg class="line" fill="none" viewBox="0 0 42 2" xmlns="http://www.w3.org/2000/svg">
                    <path d="m1 1h40" stroke="#E6E6E6" stroke-linecap="square"/>
                </svg>
                <div class="block--date">01.08.2022 - 31.07.2027</div>
                <p class="block--text">Ежемесячные дивиденды в течение 5 лет в размере 50%* годовых от суммы
                    инвестиционного взноса.
                    <br>
                    <span class="block--addition">*от прибыли</span>
                    <br>
                    <span class="block--addition">**предложение ограничено. Чем ближе окончание строительства, тем будет ниже ставка
                    на дивиденды для новых инвесторов. Успейте инвестировать по самой выгодной ставке и получить
                    максимальный доход. Подробности уточняйте по телефону у менеджеров проекта</span></p>
            </div>
        </div>
        <div class="conditions_content_item">
            <div class="conditions_content_item_wrap"></div>
        </div>
    </div>
</section>
<section class="apply_section">
    <div class="apply_section_bg"></div>
    <div class="apply_content">
        <h1 class="title_style">Оставьте заявку на инвестирование</h1>
        <p>Заполните форму, и мы перезвоним Вам, чтобы обсудить все детали</p>
        <form action="/mail/index.php" method="post" class="apply_form">
            <input type="text" name="name" class="apply_form_input" id="masked_name_second"
                   placeholder="Введите Ваше имя" required>
            <input type="text" name="phone-number" class="apply_form_input phone-number" id="selector"
                   placeholder="Контактный телефон" required>
            <input type="submit" class="apply_form_input" value="Оставить заявку" readonly>
        </form>
    </div>
</section>
<section class="project_stage">
    <h2 class="title_style">Посмотреть историю этапов</h2>
    <div class="project_stage_content">
        <div class="project_stage_item">
            <div class="project_stage_item--info">
                <div class="info--number">1</div>
                <div class="info--text">Получение статуса резидента ТОСЭР</div>
            </div>
            <div class="project_stage_item--info">
                <div class="info--number">2</div>
                <div class="info--text">Подготовка территории для строительства в промышленном парке «Развитие»</div>
            </div>
            <div class="project_stage_item--info">
                <div class="info--number">3</div>
                <div class="info--text">Выбор и заказ высокотехнологичного оборудования в КНР</div>
            </div>
            <div class="project_stage_item--info">
                <div class="info--number">4</div>
                <div class="info--text">Установка онлайн трасляции стройки</div>
            </div>
            <div class="project_stage_item--info active">
                <div class="info--number">5</div>
                <div class="info--text">Строительство</div>
            </div>
            <div class="project_stage_item--info">
                <div class="info--number">6</div>
                <div class="info--text">Установка оборудования</div>
            </div>
            <div class="project_stage_item--info">
                <div class="info--number">7</div>
                <div class="info--text">Пуско-наладочные работы</div>
            </div>
            <div class="project_stage_item--info">
                <div class="info--number">8</div>
                <div class="info--text">Выход на производственную мощность</div>
            </div>
            <div class="project_stage_item--info">
                <div class="info--number">9</div>
                <div class="info--text">Возврат вложенных инвестиций</div>
            </div>
            <div class="project_stage_item--info">
                <div class="info--number">10</div>
                <div class="info--text">Выплата ежемесячных дивидендов инвесторам</div>
            </div>
        </div>
        <div class="project_stage_item">
            <div class="my-slider_satges">
                <div>
                    <div class="project_stage_item_img first"></div>
                </div>
                <div>
                    <div class="project_stage_item_img second"></div>
                </div>
                <div>
                    <div class="project_stage_item_img third"></div>
                </div>
                <div>
                    <div class="project_stage_item_img fourth"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="project_stage_play">
        <div class="text">Смотреть онлайн-трансляцию</div>
        <div class="play_icon">
            <svg fill="none" viewBox="0 0 74 74" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#a)">
                    <path d="m37 62c13.807 0 25-11.193 25-25s-11.193-25-25-25-25 11.193-25 25 11.193 25 25 25z"
                          clip-rule="evenodd" fill="#9FCD5E" fill-rule="evenodd"/>
                </g>
                <path d="m44.297 35.296l-10.21-7.1275c-0.3018-0.1991-0.6766-0.1659-0.9597-0.1659-1.1323 0-1.1273 0.9686-1.1273 1.2139v14.568c0 0.2075-5e-3 1.214 1.1273 1.214 0.2831 0 0.6579 0.0331 0.9597-0.166l10.21-7.1274c0.838-0.5525 0.6932-1.2045 0.6932-1.2045s0.1449-0.652-0.6931-1.2045z"
                      clip-rule="evenodd" fill="#fff" fill-rule="evenodd"/>
                <defs>
                    <filter id="a" x="0" y="0" width="74" height="74" color-interpolation-filters="sRGB"
                            filterUnits="userSpaceOnUse">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                        <feOffset/>
                        <feGaussianBlur stdDeviation="6"/>
                        <feColorMatrix values="0 0 0 0 0.623529 0 0 0 0 0.803922 0 0 0 0 0.368627 0 0 0 0.574049 0"/>
                        <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                </defs>
            </svg>
        </div>
    </div>
</section>
<section class="ecology">
    <h2 class="title_style">Включаясь в проект, Вы помогаете сохранять <br> природу нашей планеты</h2>
    <div class="ecology_content">
        <h3>Переработка 1 тонны макулатуры:</h3>
        <div class="ecology_flex">
            <div class="ecology_content_item">
                <div>
                    <svg version="1.1" viewBox="0 0 21 25">
                        <g fill="none" fill-rule="evenodd">
                            <g transform="translate(-153 -5907)" fill="#fff" fill-rule="nonzero">
                                <g transform="translate(0 5525)">
                                    <g transform="translate(130 361)">
                                        <g transform="translate(23 21)">
                                            <path d="m12.158 10.362c0-3.8909-6.0789-10.362-6.0789-10.362s-6.0789 6.471-6.0789 10.362c0 3.8909 2.0028 6.2171 6.0789 6.2171 4.0762 0 6.0789-2.3262 6.0789-6.2171zm-6.5132 4.5799c-0.010855 0.22278-0.20082 0.39375-0.43421 0.39375h-0.043421c-1.1507-0.062171-2.2145-0.59062-2.9255-1.4558-1.384-1.7252-0.94984-4.3053-0.93355-4.4141 0.043421-0.2176 0.26595-0.36785 0.49934-0.3264 0.23339 0.036266 0.39079 0.2435 0.35822 0.46628-0.0054276 0.020724-0.38536 2.3418 0.77072 3.7769 0.5699 0.67352 1.4112 1.088 2.3176 1.1294 0.22796 0.020724 0.40164 0.20724 0.39079 0.43002z"/>
                                            <path d="m17.684 7.7368s-3.3158 3.5645-3.3158 6.0202c0 2.4558 1.0932 3.9271 3.3158 3.9271 2.2226 0 3.3158-1.4714 3.3158-3.9271 0-2.4558-3.3158-6.0202-3.3158-6.0202zm1.6164 7.8284c-0.53363 0.54918-1.2641 0.86521-2.0309 0.87558-0.22796 0-0.41447-0.18651-0.41447-0.41447s0.18651-0.41447 0.41447-0.41447c0.52327-0.010362 1.0258-0.2176 1.3988-0.58544 0.29531-0.40929 0.39375-0.93257 0.26423-1.4196-0.031086-0.22278 0.11916-0.43002 0.34194-0.46628 0.22278-0.036266 0.4352 0.1088 0.47664 0.33158 0.17615 0.73051 0.010362 1.5025-0.45074 2.0931z"/>
                                            <path d="m9.9474 21.307c0 1.8053 0.66316 3.0088 2.2105 3.0088 1.5474 0 2.2105-1.2035 2.2105-3.0088 0-1.8053-2.2105-4.7281-2.2105-4.7281s-2.2105 2.9228-2.2105 4.7281zm2.2013 1.3862c-0.036842 0.19342-0.18882 0.33311-0.35921 0.33311-0.055263 0-0.11513-0.016118-0.16579-0.042982-0.29013-0.15581-0.51118-0.44594-0.6125-0.80055s-0.073684-0.74145 0.07829-1.0692c0.092105-0.21491 0.31316-0.30088 0.49276-0.19342 0.18421 0.10746 0.25789 0.36535 0.16579 0.57489-0.064474 0.12357-0.07829 0.27401-0.041447 0.41371 0.041447 0.13969 0.12895 0.24715 0.24408 0.30088 0.15658 0.091338 0.23487 0.29013 0.19803 0.48355z"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <p>экономит 20 000 л воды</p>
            </div>
            <div class="ecology_content_item">
                <div>
                    <svg version="1.1" viewBox="0 0 16 29">
                        <g fill="none" fill-rule="evenodd">
                            <g transform="translate(-456 -5905)" fill="#fff">
                                <g transform="translate(0 5525)">
                                    <g transform="translate(430 361)">
                                        <g>
                                            <g transform="translate(26 19)">
                                                <path d="m0.99996 28.817l8.9607-9.3246c0.36756-0.38072 0.10504-1.0304-0.4142-1.0304h-0.71464c-0.48709 0-0.76131-0.5832-0.45793-0.979l4.7516-6.2063c0.30336-0.39583 0.032115-0.979-0.45795-0.979h-2.3889c-0.48129 0-0.75548-0.56806-0.46671-0.96691l6.0701-8.3637c0.28877-0.39885 0.014585-0.96691-0.46671-0.96691h-9.5995c-0.22171 0-0.4259 0.12993-0.52213 0.3354l-4.6933 9.8353c-0.19252 0.40187 0.090424 0.87324 0.52213 0.87324h2.1643c0.4317 0 0.71464 0.47137 0.52213 0.87324l-3.2086 6.7261c-0.19252 0.4019 0.090424 0.87324 0.52213 0.87324h2.0389c0.4317 0 0.7117 0.46532 0.52504 0.86717l-3.6228 7.7444c-0.28877 0.61335 0.47254 1.1723 0.93633 0.68889z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <p>экономит 1 000 кВТ энергии</p>
            </div>
            <div class="ecology_content_item">
                <div>
                    <svg version="1.1" viewBox="0 0 32 23">
                        <g fill="none" fill-rule="evenodd">
                            <g transform="translate(-781 -5907)" fill="#fff">
                                <g transform="translate(0 5525)">
                                    <g transform="translate(765 361)">
                                        <g transform="translate(16 21)">
                                            <path d="m17.492 13c-0.99437 0-1.4917 0.28675-1.4917 0.86007v2.2797c0 0.5735 0.49736 0.86024 1.4917 0.86024 1.0057 0 1.5083-0.28675 1.5083-0.86024v-2.2797c0-0.57332-0.50253-0.86007-1.5083-0.86007z"/>
                                            <path d="m30.472 12.139c-0.75732-0.90388-1.6814-1.5744-2.7515-1.9976 0.17432-0.48634 0.26245-0.99939 0.26245-1.5299 0-1.3091-0.48926-2.4426-1.4546-3.3684-0.9624-0.92303-2.1399-1.3909-3.4993-1.3909-0.81152 0-1.5635 0.17023-2.24 0.50714-0.677-1.1431-1.6106-2.1104-2.78-2.8783-1.4963-0.98237-3.1858-1.4805-5.0215-1.4805-2.4629 0-4.5957 0.84784-6.3394 2.5196-1.7461 1.6739-2.6313 3.7233-2.6313 6.0916 0 0.033337 2.4413e-4 0.068565 0.0012207 0.10616-1.1099 0.60266-2.0347 1.4441-2.7507 2.5036-0.84082 1.2434-1.2671 2.6331-1.2671 4.1307 0 2.0983 0.7876 3.9174 2.3411 5.4069 1.5508 1.4872 3.4434 2.2414 5.6255 2.2414h17.071c1.9104 0 3.5654-0.65775 4.9192-1.9555 1.356-1.2999 2.0432-2.8913 2.0432-4.73-2.441e-4 -1.5619-0.5144-2.967-1.5283-4.1758zm-20.184 5.4523c0.22144 0 0.40552-0.034046 0.552-0.10237 0.14648-0.068328 0.25122-0.17259 0.3147-0.31303 0.063232-0.14044 0.10474-0.25629 0.12476-0.34732 0.019531-0.091026 0.037354-0.2161 0.053223-0.37569 0.031494-0.35654 0.33643-0.53481 0.91406-0.53481 0.34033 0 0.58179 0.058871 0.72412 0.17638 0.14258 0.11774 0.21387 0.33975 0.21387 0.66579 0 0.73625-0.27905 1.3169-0.83691 1.7418-0.55811 0.4251-1.2725 0.63742-2.1428 0.63742-0.84692 0-1.5334-0.2161-2.0598-0.64877-0.52637-0.43267-0.78931-1.1117-0.78931-2.0378v-3.0166c0-0.92586 0.26294-1.6051 0.78931-2.0378 0.52637-0.43243 1.2129-0.64877 2.0598-0.64877 0.87036 0 1.5847 0.2012 2.1428 0.60337 0.55786 0.40241 0.83691 0.95613 0.83691 1.6621 0 0.32627-0.071289 0.54828-0.21387 0.66579-0.14233 0.11774-0.37988 0.17638-0.71216 0.17638-0.59351 0-0.90234-0.17803-0.92603-0.53481-0.023682-0.68305-0.37598-1.0247-1.0566-1.0247-0.71216 0-1.0684 0.37971-1.0684 1.1384v3.0166c0 0.75918 0.36011 1.1384 1.0803 1.1384zm10.043-1.1384c0 0.9261-0.26514 1.6054-0.79541 2.0378-0.53027 0.43267-1.2388 0.649-2.125 0.649-0.87842 0-1.583-0.21633-2.113-0.649-0.53027-0.43243-0.79541-1.1117-0.79541-2.0378v-3.0166c0-0.92586 0.26514-1.6051 0.79541-2.0376 0.53003-0.43267 1.2346-0.649 2.113-0.649 0.88623 0 1.5947 0.21633 2.125 0.649 0.53027 0.43243 0.79541 1.1117 0.79541 2.0376v3.0166zm4.4236 1.6746c0.092285 0 0.17212 0.04634 0.24023 0.13878 0.068115 0.092681 0.10205 0.2012 0.10205 0.32627 0 0.12484-0.033691 0.23572-0.10132 0.33289-0.067627 0.097173-0.14722 0.14588-0.23877 0.14588h-2.5759c-0.11108 0-0.2207-0.032628-0.32935-0.097882-0.1084-0.065019-0.16284-0.14422-0.16284-0.23738v-0.67714c0-0.20026 0.077637-0.40028 0.23242-0.60053 0.15479-0.20002 0.34204-0.37924 0.56152-0.53741l0.66431-0.47712c0.22974-0.15888 0.42407-0.32486 0.58276-0.49792 0.15894-0.17307 0.23828-0.34141 0.23828-0.50525 0-0.13098-0.046387-0.2466-0.13916-0.34732-0.093018-0.10048-0.23242-0.15084-0.41797-0.15084-0.16138 0-0.29321 0.043503-0.396 0.1298-0.10254 0.086534-0.15405 0.22319-0.15405 0.41044 0 0.11041-0.053467 0.20664-0.16064 0.28821-0.10718 0.081569-0.24854 0.12223-0.4248 0.12223-0.33325 0-0.49976-0.18725-0.49976-0.562 0-0.40241 0.16187-0.72513 0.48608-0.96795 0.32422-0.24281 0.70483-0.36434 1.1418-0.36434 0.45044 0 0.84546 0.12696 1.1846 0.38065 0.33911 0.25369 0.50879 0.59557 0.50879 1.0261 0 0.28064-0.077637 0.54497-0.23267 0.79275-0.15503 0.24778-0.3418 0.45608-0.55981 0.62418-0.21802 0.16858-0.4375 0.32296-0.65796 0.46317-0.22046 0.1402-0.40894 0.2771-0.56543 0.41044-0.15649 0.13335-0.23462 0.25605-0.23462 0.36812v0.063127h1.9082z"
                                                  fill-rule="nonzero"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <p>сокращает выброс углекислого <br>
                    газа в атмосферу до 1 700 кг</p>
            </div>
            <div class="ecology_content_item">
                <div>
                    <svg version="1.1" viewBox="0 0 20 23">
                        <g fill="none" fill-rule="evenodd">
                            <g transform="translate(-1144 -5907)" fill="#fff" fill-rule="nonzero">
                                <g transform="translate(0 5525)">
                                    <g transform="translate(1122 361)">
                                        <g transform="translate(22 21)">
                                            <path d="m19.381 6.809c0-1.7451-1.3129-3.1805-2.9968-3.3568-0.47259-1.2855-1.6957-2.2036-3.135-2.2036-0.63002 0-1.2172 0.17891-1.7201 0.48419-0.57198-1.0332-1.6654-1.7328-2.9221-1.7328-1.6661 0-3.0441 1.23-3.2998 2.838-0.13598-0.016761-0.27343-0.028337-0.41386-0.028337-1.8479 0-3.3463 1.5111-3.3463 3.3754 0 0.091326 0.0066464 0.18078 0.013679 0.27024-0.93707 0.59824-1.5608 1.6501-1.5608 2.8514 0 1.0619 0.48705 2.0079 1.2471 2.6266-0.0033232 0.060767-0.0092355 0.1211-0.0092355 0.18265 0 1.864 1.498 3.3754 3.3463 3.3754 0.5539 0 1.0749-0.1379 1.535-0.37793 0.6374 0.46181 1.5501 1.0395 1.992 0.92437 0 0 0.16442 2.5689 0.12895 3.2211-0.067624 1.2412-0.43677 2.6229-0.69652 3.7411h4.0233s-0.59308-2.4928-0.61897-3.3251c-0.025852-0.83234 0.25794-2.365 0.25794-2.365l1.3957-1.4562c0.53724 0.37049 1.1861 0.58109 1.886 0.58109 1.73 0 3.1531-1.3277 3.3279-3.0262 1.2744-0.4767 2.1846-1.7138 2.1846-3.1656 0-0.85728-0.31926-1.637-0.84105-2.2326 0.14116-0.37353 0.22208-0.77754 0.22208-1.2013zm-12.489 7.7471c0.26825-0.25831 0.49331-0.56019 0.66511-0.89529l0.65699 1.3884c-3.4778e-4 3.9e-5 -0.35767 0.15919-1.3221-0.49311zm2.4566 0.85728c-0.33997 0.062248-0.91899-0.99371-1.3299-1.8521 0.45563 0.23445 0.96999 0.3694 1.5169 0.3694 0.14043 0 0.27826-0.011538 0.41424-0.028688-0.10569 0.68695-0.2919 1.4544-0.60119 1.5114zm1.4444 0.67576c-0.78637 0.22027-0.31559-1.4227-0.090191-2.3739 0.16299-0.061118 0.32077-0.13303 0.47078-0.21843 0.090538 0.69326 0.38909 1.3187 0.83142 1.8133-0.38321 0.34336-0.82443 0.67058-1.212 0.77906z"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <p>помогает сберечь <br>
                    жизнь 18-20 деревьям</p>
            </div>
        </div>
    </div>
</section>
<section class="project_head">
    <h1 class="title_style">Наша команда</h1>
    <div class="project_head_slider">
        <div class="head_slider">
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_1.jpeg);"></div>
                <div class="project_head__item_cover">
                    <h3>Хуснутдинов Ильдус Рифович</h3>
                    <span>Инициатор проекта</span>
                    <p>Опыт в бумажной промышленности <br>
                        4 года</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_2.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Сабиров Ильмир Ильязович</h3>
                    <span>Генеральный директор</span>
                    <p>Опыт в бумажной промышленности <br>
                        4 года</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_5.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Хуснутдинова Анастасия Леонидовна</h3>
                    <span>Учредитель</span>
                    <p>Опыт в бумажной промышленности <br>
                        4 года</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_3.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Батаев Алексей Григорьевич</h3>
                    <span>Исполнительный директор</span>
                    <p>Опыт в финансовой сфере <br>
                        10 лет</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_4.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Андрощук Алексей Сергеевич </h3>
                    <span>Главный технолог</span>
                    <p>Опыт в бумажном производстве <br>
                        16 лет</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_6.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Рышкова Елена Викторовна</h3>
                    <span>Руководитель по связям с общественностью</span>
                    <p>-</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_7.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Мирхазиянов Ильдар Тагирович</h3>
                    <span>Главный архитектор</span>
                    <p>-</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_8.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Тагиров Рафаил Салимьянович</h3>
                    <span>Главный инженер</span>
                    <p>-</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_9.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Зайнуллин Роберт Рафисович</h3>
                    <span>Инженер-проектировщик</span>
                    <p>-</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_10.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Кузьмина Мария Любиковна</h3>
                    <span>Менеджер проекта</span>
                    <p>-</p>
                </div>
            </div>
            <div class="project_head__item">
                <div class="project_head__item_img" style="background-image: url(../img/project_head_11.jpg);"></div>
                <div class="project_head__item_cover">
                    <h3>Таривердиева Гульназ Хамбалевна</h3>
                    <span>Бухгалтер</span>
                    <p>-</p>
                </div>
            </div>
        </div>
    </div>
    <div class="project_head_content">
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_1.jpeg);"></div>
            <div class="project_head__item_cover">
                <h3>Хуснутдинов Ильдус Рифович</h3>
                <span>Инициатор проекта</span>
                <p>Опыт в бумажной промышленности <br>
                    4 года</p>
            </div>
        </div>
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_2.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Сабиров Ильмир Ильязович</h3>
                <span>Генеральный директор</span>
                <p>Опыт в бумажной промышленности <br>
                    4 года</p>
            </div>
        </div>
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_5.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Хуснутдинова Анастасия Леонидовна</h3>
                <span>Учредитель</span>
                <p>Опыт в бумажной промышленности <br>
                    4 года</p>
            </div>
        </div>
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_3.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Батаев Алексей Григорьевич</h3>
                <span>Исполнительный директор</span>
                <p>Опыт в финансовой сфере <br>
                    10 лет</p>
            </div>
        </div>
    </div>
    <div class="project_head_content">
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_4.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Андрощук Алексей Сергеевич </h3>
                <span>Главный технолог</span>
                <p>Опыт в бумажном производстве <br>
                    16 лет</p>
            </div>
        </div>
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_6.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Рышкова Елена Викторовна</h3>
                <span>Руководитель по связям с общественностью</span>
                <p>-</p>
            </div>
        </div>
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_7.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Мирхазиянов Ильдар Тагирович</h3>
                <span>Главный архитектор</span>
                <p>-</p>
            </div>
        </div>
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_8.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Тагиров Рафаил Салимьянович</h3>
                <span>Главный инженер</span>
                <p>-</p>
            </div>
        </div>
    </div>
    <div class="project_head_content">
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_9.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Зайнуллин Роберт Рафисович</h3>
                <span>Инженер-проектировщик</span>
                <p>-</p>
            </div>
        </div>
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_10.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Кузьмина Мария Любиковна</h3>
                <span>Менеджер проекта</span>
                <p>-</p>
            </div>
        </div>
        <div class="project_head__item">
            <div class="project_head__item_img" style="background-image: url(../img/project_head_11.jpg);"></div>
            <div class="project_head__item_cover">
                <h3>Таривердиева Гульназ Хамбалевна</h3>
                <span>Бухгалтер</span>
                <p>-</p>
            </div>
        </div>
    </div>
</section>
<section class="experts_view">
    <h2 class="title_style">Экспертиза проекта</h2>
    <div class="fake_slide"></div>
    <div class="fake_slide"></div>
    <div class="experts_view_content">
        <div class="experts_view_content_item">
            <div id="expert_view_first_img" class="experts_view_content_item_img"
                 style="background-image: url(../img/755508371534043.jpg)"></div>
            <div class="experts_view_content_item_info">
                <h3>Сергей Майоров</h3>
                <span>Председатель правления Машиностроительного кластера РТ</span>
                <p>"Президент республики поручил региональному Агентству инвестиционного развития оказать
                    предпринимателям содействие в привлечении инвесторов. Проект рассчитан, в том числе на венчурные
                    инвестиции, с высокой доходностью. Срок окупаемости 2 года. Проект картонно-бумажной фабрики не
                    подходит ни для одной из существующих федеральных программ господдержки, поэтому рассматривается
                    либо частный инвестор, либо венчурное финансирование. «Набережночелнинская картонно-бумажная
                    фабрика» намерена наладить выпуск остродефицитной продукции. Бумаги для гофрирования не хватает по
                    всей стране.
                    Это хорошо, что новое производство собираются открыть на базе уже действующего предприятия. Оно
                    увеличит собственные мощности, доведя оборот до 1,5 млрд рублей. Это новые рабочие места, налоговые
                    поступления, а также обеспечение сырьем близлежащих регионов, как минимум, Приволжского ФО"
                </p>
            </div>
        </div>
        <div class="experts_view_content_item invisible_item">
            <div id="expert_view_second_img" class="experts_view_content_item_img"
                 style="background-image: url(../img/expert_2.jpeg)"></div>
            <div class="experts_view_content_item_info">
                <h3>Эльдар Тимергалиев</h3>
                <span>Заместитель главы исполкома Набережных Челнов по вопросам развития ТОСЭР </span>
                <p>"Проект «Набережночелнинской картонно-бумажной фабрики» видится мне перспективным. Малый бизнес
                    обладает набором преимуществ. Многие компании предпочитают работать с субъектом МСП, который более
                    клиенториентирован, способен поставить любой объем продукции и готов пойти навстречу партнеру в
                    плане сроков"</p>
            </div>
        </div>
    </div>
    <div class="expert_view_pagination">
        <div class="expert_view_prev">
            <div class="expert_view_prev_wrap"></div>
            <svg enable-background="new 0 0 86.001 86.001" version="1.1" viewBox="0 0 86.001 86.001"
                 xml:space="preserve">
                    <path d="m5.907 21.004c-1.352-1.338-3.542-1.338-4.894 0-1.35 1.336-1.352 3.506 0 4.844l39.54 39.15c1.352 1.338 3.542 1.338 4.894 0l39.54-39.15c1.351-1.338 1.352-3.506 0-4.844s-3.542-1.338-4.894-2e-3l-37.093 35.705-37.093-35.703z"
                          fill="#3f4954"/>
                </svg>
        </div>
        <div class="expert_pagination_bullet expert_view_pagination_activ"></div>
        <div class="expert_pagination_bullet"></div>
        <div class="expert_pagination_bullet"></div>
        <div class="expert_pagination_bullet"></div>
        <div class="expert_view_next">
            <div class="expert_view_next_wrap"></div>
            <svg enable-background="new 0 0 86.001 86.001" version="1.1" viewBox="0 0 86.001 86.001"
                 xml:space="preserve">
                    <path d="m5.907 21.004c-1.352-1.338-3.542-1.338-4.894 0-1.35 1.336-1.352 3.506 0 4.844l39.54 39.15c1.352 1.338 3.542 1.338 4.894 0l39.54-39.15c1.351-1.338 1.352-3.506 0-4.844s-3.542-1.338-4.894-2e-3l-37.093 35.705-37.093-35.703z"
                          fill="#3f4954"/>
                </svg>
        </div>
    </div>
</section>
<section class="news">
    <h1 class="title_style">Новости</h1>
    <a class='main_section__styled_btn link_to_news' href="/news">Все новости</a>
    <div class="news_all_content">
        <div class="news_content">
            <?= ViewGenerator::getNewsMain() ?>
        </div>
    </div>
</section>
<section class="submit">
    <div class="table_content">
        <div class="table_content_item">
            <div class="table_bg">
                <div class="table_bg_item"></div>
                <div class="table_bg_item"></div>
                <div class="table_bg_item"></div>
            </div>
            <div class="apply_content">
                <h1 class="title_style">Оставьте заявку</h1>
                <p>Заполните форму, и мы перезвоним Вам, чтобы обсудить все детали</p>
                <form action="/mail/index.php" method="post" class="apply_form">
                    <input type="text" name="name" class="apply_form_input"
                           placeholder="Введите Ваше имя" required>
                    <input type="text" name="phone-number" class="apply_form_input phone-number"
                           placeholder="Контактный телефон" required>
                    <input type="submit" class="apply_form_input" value="Оставить заявку" readonly>
                </form>
            </div>
        </div>
        <div class="table_content_item"></div>
        <div class="table_content_item"></div>
    </div>
</section>
<section class="footer_contacts_section">
    <div class="footer_item">
        <div class="footer_links">
            <a href="/" class="footer_logo_link">
                <div class="footer_logo"></div>
            </a>
            <div class="footer_links_container">
                <div class="links">
                    <a href="/" class="footer_info_link">Проект</a>
                    <a href="/faq" class="footer_info_link">Вопросы</a>
                    <a href="/news" class="footer_info_link">Новости</a>
                    <a href="/login" class="footer_info_link">Личный кабинет</a>
                </div>
                <div class="social_media">
                    <a href="https://vk.com/nch_kbf" target="_blank">
                        <svg enable-background="new 0 0 548.358 548.358" version="1.1" viewBox="0 0 548.358 548.358"
                             xml:space="preserve">
                        <path fill="#77a103"
                              d="m545.45 400.3c-0.664-1.431-1.283-2.618-1.858-3.569-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571-0.284-0.28-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415-5.91-7.614-7.234-15.321-4.004-23.13 2.282-5.9 10.854-18.36 25.696-37.397 7.807-10.089 13.99-18.175 18.556-24.267 32.931-43.78 47.208-71.756 42.828-83.939l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712-4.764-1.427-10.853-1.663-18.278-0.712l-82.224 0.568c-1.332-0.472-3.234-0.428-5.712 0.144-2.475 0.572-3.713 0.859-3.713 0.859l-1.431 0.715-1.136 0.859c-0.952 0.568-1.999 1.567-3.142 2.995-1.137 1.423-2.088 3.093-2.848 4.996-8.952 23.031-19.13 44.444-30.553 64.238-7.043 11.803-13.511 22.032-19.418 30.693-5.899 8.658-10.848 15.037-14.842 19.126-4 4.093-7.61 7.372-10.852 9.849-3.237 2.478-5.708 3.525-7.419 3.142-1.715-0.383-3.33-0.763-4.859-1.143-2.663-1.714-4.805-4.045-6.42-6.995-1.622-2.95-2.714-6.663-3.285-11.136-0.568-4.476-0.904-8.326-1-11.563-0.089-3.233-0.048-7.806 0.145-13.706 0.198-5.903 0.287-9.897 0.287-11.991 0-7.234 0.141-15.085 0.424-23.555 0.288-8.47 0.521-15.181 0.716-20.125 0.194-4.949 0.284-10.185 0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137-1.335-2.95-3.289-5.232-5.853-6.852-2.569-1.618-5.763-2.902-9.564-3.856-10.089-2.283-22.936-3.518-38.547-3.71-35.401-0.38-58.148 1.906-68.236 6.855-3.997 2.091-7.614 4.948-10.848 8.562-3.427 4.189-3.905 6.475-1.431 6.851 11.422 1.711 19.508 5.804 24.267 12.275l1.715 3.429c1.334 2.474 2.666 6.854 3.999 13.134 1.331 6.28 2.19 13.227 2.568 20.837 0.95 13.897 0.95 25.793 0 35.689-0.953 9.9-1.853 17.607-2.712 23.127s-2.143 9.993-3.855 13.418c-1.715 3.426-2.856 5.52-3.428 6.28-0.571 0.76-1.047 1.239-1.425 1.427-2.474 0.948-5.047 1.431-7.71 1.431-2.667 0-5.901-1.334-9.707-4-3.805-2.666-7.754-6.328-11.847-10.992-4.093-4.665-8.709-11.184-13.85-19.558-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267-4.952-10.185-9.329-20.037-13.134-29.554-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427-2.095-0.859-4.281-1.475-6.567-1.854l-78.229 0.568c-7.994 0-13.418 1.811-16.274 5.428l-1.143 1.711c-0.571 0.953-0.859 2.475-0.859 4.57 0 2.094 0.571 4.664 1.714 7.707 11.42 26.84 23.839 52.725 37.257 77.659s25.078 45.019 34.973 60.237c9.897 15.229 19.985 29.602 30.264 43.112 10.279 13.515 17.083 22.176 20.412 25.981 3.333 3.812 5.951 6.662 7.854 8.565l7.139 6.851c4.568 4.569 11.276 10.041 20.127 16.416 8.853 6.379 18.654 12.659 29.408 18.85 10.756 6.181 23.269 11.225 37.546 15.126 14.275 3.905 28.169 5.472 41.684 4.716h32.834c6.659-0.575 11.704-2.669 15.133-6.283l1.136-1.431c0.764-1.136 1.479-2.901 2.139-5.276 0.668-2.379 1-5 1-7.851-0.195-8.183 0.428-15.558 1.852-22.124 1.423-6.564 3.045-11.513 4.859-14.846 1.813-3.33 3.859-6.14 6.136-8.418 2.282-2.283 3.908-3.666 4.862-4.142 0.948-0.479 1.705-0.804 2.276-0.999 4.568-1.522 9.944-0.048 16.136 4.429 6.187 4.473 11.99 9.996 17.418 16.56 5.425 6.57 11.943 13.941 19.555 22.124 7.617 8.186 14.277 14.271 19.985 18.274l5.708 3.426c3.812 2.286 8.761 4.38 14.853 6.283 6.081 1.902 11.409 2.378 15.984 1.427l73.087-1.14c7.229 0 12.854-1.197 16.844-3.572 3.998-2.379 6.373-5 7.139-7.851 0.764-2.854 0.805-6.092 0.145-9.712-0.677-3.611-1.344-6.136-2.008-7.563z"/>
                    </svg>
                    </a>
                    <a href="https://instagram.com/kbf_chelny?utm_source=ig_profile_share&igshid=1ol8jegej1vxi"
                       target="_blank">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#77a103"
                                  d="M11.984 16.815c2.596 0 4.706-2.111 4.706-4.707 0-1.409-.623-2.674-1.606-3.538-.346-.303-.735-.556-1.158-.748-.593-.27-1.249-.421-1.941-.421s-1.349.151-1.941.421c-.424.194-.814.447-1.158.749-.985.864-1.608 2.129-1.608 3.538 0 2.595 2.112 4.706 4.706 4.706zm.016-8.184c1.921 0 3.479 1.557 3.479 3.478 0 1.921-1.558 3.479-3.479 3.479s-3.479-1.557-3.479-3.479c0-1.921 1.558-3.478 3.479-3.478zm5.223.369h6.777v10.278c0 2.608-2.114 4.722-4.722 4.722h-14.493c-2.608 0-4.785-2.114-4.785-4.722v-10.278h6.747c-.544.913-.872 1.969-.872 3.109 0 3.374 2.735 6.109 6.109 6.109s6.109-2.735 6.109-6.109c.001-1.14-.327-2.196-.87-3.109zm2.055-9h-12.278v5h-1v-5h-1v5h-1v-4.923c-.346.057-.682.143-1 .27v4.653h-1v-4.102c-1.202.857-2 2.246-2 3.824v3.278h7.473c1.167-1.282 2.798-2 4.511-2 1.722 0 3.351.725 4.511 2h7.505v-3.278c0-2.608-2.114-4.722-4.722-4.722zm2.722 5.265c0 .406-.333.735-.745.735h-2.511c-.411 0-.744-.329-.744-.735v-2.53c0-.406.333-.735.744-.735h2.511c.412 0 .745.329.745.735v2.53z"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/kbfchelny/"
                       target="_blank">
                        <svg viewBox="0 0 10 18" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <clipPath id="a">
                                    <rect x="-1222" y="-9330" width="1440" height="9762" clip-rule="evenodd"/>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)">
                                <path d="m9.6234 0.0037452l-2.3986-0.0037452c-2.6947 0-4.4361 1.7387-4.4361 4.4298v2.0424h-2.4116c-0.20839 0-0.37715 0.16441-0.37715 0.36722v2.9593c0 0.20284 0.16895 0.36704 0.37715 0.36704h2.4116v7.4672c0 0.2028 0.16875 0.367 0.37715 0.367h3.1465c0.20839 0 0.37715-0.1644 0.37715-0.367v-7.4672h2.8198c0.2084 0 0.37715-0.1642 0.37715-0.36704l0.00116-2.9593c0-0.09738-0.03984-0.19063-0.11046-0.25955-0.07061-0.06891-0.16683-0.10767-0.26688-0.10767h-2.8207v-1.7314c0-0.83218 0.20377-1.2546 1.3177-1.2546l1.6158-5.6e-4c0.20821 0 0.37696-0.16442 0.37696-0.36703v-2.7479c0-0.20243-0.16856-0.36666-0.37657-0.36703z"
                                      fill="#77a103"/>
                            </g>
                        </svg>
                    </a>
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
                    <span>
                        <a href="tel:+7 (917) 261-44-44">+7 (917) 261-44-44</a>
                        <br>
                        <a href="tel:+7 (987) 222-22-11">+7 (987) 222-22-11</a>
                        <br>
                        <a href="tel:+7 (987) 222-22-88">+7 (987) 222-22-88</a>
                    </span>
                </div>
                <div class="footer_contact_item_piece">
                    <div>

                        <svg viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <clipPath id="d">
                                    <rect x="-357" y="-9497" width="1440" height="9762" clip-rule="evenodd"/>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#d)">
                                <path transform="translate(1.0769 5.5557)"
                                      d="m6.4615 1.4815l-1.6395-1.4815-4.822 4.1482c0.19288 0.19753 0.38576 0.29629 0.67509 0.29629h11.573c0.2893 0 0.4822-0.09876 0.6751-0.29629l-4.8221-4.1482-1.6395 1.4815z"
                                      fill="#71aa27"/>
                            </g>
                            <defs>
                                <clipPath id="c">
                                    <rect x="-357" y="-9497" width="1440" height="9762" clip-rule="evenodd"/>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#c)">
                                <path transform="translate(1.0769)"
                                      d="M12.9231 0.277778C12.7302 0.0925926 12.5373 0 12.248 0L0.675086 0C0.385763 0 0.192882 0.0925926 0 0.277778L6.46154 5.55556L12.9231 0.277778Z"
                                      fill="#71aa27"/>
                            </g>
                            <defs>
                                <clipPath id="b">
                                    <rect x="-357" y="-9497" width="1440" height="9762" clip-rule="evenodd"/>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#b)">
                                <path transform="translate(0 1.1113)" d="M0 0L0 7.77778L4.30769 3.93574L0 0Z"
                                      fill="#71aa27"/>
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <rect x="-357" y="-9497" width="1440" height="9762" clip-rule="evenodd"/>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)">
                                <path transform="translate(9.6924 1.1113)"
                                      d="m0 3.9357l4.3077 3.842v-7.7778l-4.3077 3.9357z" fill="#71aa27"/>
                            </g>
                        </svg>
                    </div>
                    <span><a href="mailto:info@nkbf.biz">info@nkbf.biz</a></span>
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
                    <span> Промышленный парк «Развитие»<br>г. Набережные Челны, промышленная площадка на пересечении<br>ул. Металлургическая и ул. Техническая</span>
                </div>
                <a class="main_section__styled_btn link_to_news"
                   href="https://yandex.ru/maps/?um=constructor%3Ad909cafd767e9d0b3e1ade5483ae098518ca6fb85261a0601eb75be59e295123&source=constructorLink"
                   target="_blank">Показать на карте</a>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="politics">
        <span>Все права защищены. © Набережночелнинская картонно-бумажная Фабрика 2018</span>
        <a href="./politikaconf.pdf" target="_blank">Политика конфиденциальности</a>
    </div>
    <div class="creator">
        <a href="http://drim.agency/">
            <div class="creator_logo"></div>
        </a>
        <span>Разработка сайта</span>
    </div>
</footer>
<div class="overlay invisible_item"></div>
<div class="hidden_slider invisible_item">
    <div id="close_btn_slider" class="close_btn slider_btn"></div>
    <div class="invisible-slider">
        <div>
            <img src="./img/hidden_slider/plan1.png" alt="">
        </div>
        <div>
            <img src="./img/hidden_slider/plan2.png" alt="">
        </div>
        <div>
            <img src="./img/hidden_slider/plan3.png" alt="">
        </div>
        <div>
            <img src="./img/hidden_slider/plan4.png" alt="">
        </div>
        <div>
            <img src="./img/hidden_slider/plan5.png" alt="">
        </div>
        <div>
            <img src="./img/hidden_slider/plan6.png" alt="">
        </div>
        <div>
            <img src="./img/hidden_slider/plan7.png" alt="">
        </div>
    </div>
</div>
<section class="modal_window_first invisible_item">
    <div class="modal_img_container">
        <div class="modal_img">
            <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512" xml:space="preserve"
                 xmlns="http://www.w3.org/2000/svg">
                    <path d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z"
                          fill="#71aa27"/>
                </svg>
        </div>
    </div>
    <span class="modal_title">Заявка принята</span>
    <p class="modal_text">Мы свяжемся с Вами в ближайшее время </p>
    <div id="modal_thanx_btn" class="close_btn modal_thanx_btn">
    </div>
</section>
<section class="modal_window_second invisible_item">
    <h2 class="modal_title">Оставьте заявку на инвестирование</h2>
    <p class="modal_text">Заполните форму, и мы перезвоним Вам, <br>
        чтобы обсудить все детали </p>
    <div id="modal_btn" class="close_btn modal_btn">
    </div>
    <form id="prompt-form" method="post" action="/mail/index.php">
        <input class="modal_window_input" id="masked_name" name="name" type="text" placeholder="Введите Ваше имя"
               required>
        <input class="modal_window_input phone-number" id="selector_second" name="phone-number" type="text"
               placeholder="Контактный телефон" required>
        <button class="modal_window_submit_btn" name="modal_btn" type="submit">Оставить заявку</button>
    </form>
    <p class="modal_agreement">Отправляя заявку, вы подтверждаете свое согласие с <a href="./politikaconf.pdf"
                                                                                     target="_blank">политикой
            конфиденциальности</a></p>
</section>
<section class="modal_window_third invisible_item">
    <h2 class="modal_title">Оставьте заявку</h2>
    <p class="modal_text">Заполните форму и получите презентацию. <br> В презентации расписана общая финансовая
        модель <br> со всеми категориями расходов и доходов.</p>
    <div id="third_modal_btn" class="close_btn modal_btn">
    </div>
    <form id="prompt-form" method="post" action="/mail/index.php">
        <input class="modal_window_input" id="masked_name_third_window" name="name" type="text"
               placeholder="Введите Ваше имя" required>
        <input class="modal_window_input phone-number" id="selector_third" name="phone-number" type="text"
               placeholder="Контактный телефон" required>
        <button class="modal_window_submit_btn" name="modal_btn" type="submit">Оставить заявку</button>
    </form>
    <p class="modal_agreement">Отправляя заявку, вы подтверждаете свое согласие с <a href="./politikaconf.pdf"
                                                                                     target="_blank">политикой
            конфиденциальности</a></p>
</section>
<section class="hidden_video invisible_item">
    <div id="close_btn_video" class="close_btn"></div>
    <iframe id="video" src="https://www.youtube.com/embed/SB-qEYVdvXA" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</section>
<div class="modal_window_done"></div>


<script src="https://unpkg.com/imask"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/min/tiny-slider.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="./paper.js/paper.js"></script>
<script>
    $(document).ready(function () {
        var paused = false;

        $(window).on('scroll', function () {
            if (window.pageYOffset >= window.outerHeight * 0.25) {
                if (!paused) {
                    createChart(
                        [2013, 2014, 2015, 2016, 2017],
                        [65.9, 74.2, 96.9, 126.5, 141.2]
                    );
                    paused = true;
                }
            }
        });

        $("#play").on('click', function (e) {
            $("#video_2")[0].play();
            $("#hover").css("display", "none");
            $("#play").css("display", "none");
            $(".quote__video--label").css("display", "none");
        });

        $("#video_2").on("click", function (e) {
            $("#video_2")[0].pause();
            $("#hover").css("display", "block");
            $("#play").css("display", "block");
            $(".quote__video--label").css("display", "block");
        });
    });
</script>
</body>

</html>