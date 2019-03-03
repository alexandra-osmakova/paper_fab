<?php
require __DIR__."/../../app/util/ViewGenerator.php";

use App\Util\ViewGenerator;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="В 2018 году в г. Набережные Челны начал строиться завод по производству гофрокартона. Проект инвестиционный - это значит, что каждый может вложиться в проект и получать дивиденды после начала функционирования завода.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../paper.css/reset.css">
    <link rel="stylesheet" href="../paper.css/paper.css">
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
                    <a href="/">Проект</a>
                    <a href="/faq">Вопросы</a>
                    <a href="/news" class="active">Новости</a>
                </div>
                <div class="hidden_menu_item">
                        <span class="hidden_menu_text">ООО «Фабрика картона» <br>
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
        <a href="/" class="header_info_link">Проект</a>
        <a href="/faq" class="header_info_link">Вопросы</a>
        <a href="/news" class="header_info_link active">Новости</a>
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
    <section class="navigation">
        <nav>
            <a href="/"><span class="nav_link">Главная</span></a>
            <a href="/news"><span class="last_nav_title">Новости</span></a>
        </nav>
    </section>
    <section class="news_block">
        <div class="news_block_item">
            <h1 class="title_style">Все новости</h1>
            <div class="news_block_item_content">
                <div class="main_news">
                    <div class="main_news_wrap"></div>
                    <div class="rec_sign">
                        <div class="rec_dot"></div>
                        <span>LIVE</span>
                    </div>
                    <div class="play_container">
                        <div class="play">
                            <svg enable-background="new 0 0 232.153 232.153" version="1.1" viewBox="0 0 232.15 232.15"
                                xml:space="preserve">
                                <path fill="#ffffff" d="m203.79 99.628-154.48-97.334c-4.567-2.719-10.238-2.266-14.521-2.266-17.132 0-17.056 13.227-17.056 16.578v198.94c0 2.833-0.075 16.579 17.056 16.579 4.283 0 9.955 0.451 14.521-2.267l154.48-97.333c12.68-7.545 10.489-16.449 10.489-16.449s2.192-8.904-10.488-16.448z"
                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="video_date">
                        <span class="video_date_title">Онлайн-трансляция</span>
                        <span class="video_day">21 ноября в 17:05</span>
                    </div>
                </div>
                <div class="all_news">
                    <?=ViewGenerator::getNews(1)?>
                </div>
                <input type="hidden" id="count" value="1">
                <button class="more_news modal_window_submit_btn" onclick="moreNews()">
                    Показать еще
                    <svg enable-background="new 0 0 155.724 155.723" version="1.1" viewBox="0 0 155.72 155.72"
                        xml:space="preserve">
                        <path class="more_news_icon" d="m42.735 121.52c-12.77-10.273-20.942-26.025-20.942-43.691 0-26.114 17.882-47.992 42.051-54.23v-14.446c-31.99 6.492-56.068 34.773-56.068 68.676 0 20.951 9.199 39.738 23.767 52.578 11.276 10.503 18.284-3.514 11.192-8.887zm80.854-96.775c-7.18-6.485-17.693 4.028-10.801 9.236 12.888 10.27 21.143 26.097 21.143 43.848 0 26.118-17.885 48-42.052 54.234v14.449c31.99-6.499 56.068-34.776 56.068-68.684 0-21.227-9.445-40.233-24.358-53.083zm-53.552 10.961 22.813-13.661c3.319-1.988 3.326-5.226 0.018-7.228l-23.024-13.935c-3.312-1.999-5.985-0.49-5.969 3.381l0.124 28.035c0.01 3.869 2.715 5.396 6.038 3.408zm15.846 84.322-23.027 13.935c-3.311 2.002-3.304 5.239 0.019 7.228l22.811 13.662c3.319 1.984 6.03 0.462 6.047-3.412l0.12-28.034c0.012-3.868-2.665-5.378-5.97-3.379z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="news_block_item">
            <div class="subscribe_content fixed_content_all_news">
                <h3 class='subscribe_title'>Подписаться <br> на рассылку</h3>
                <section class="subscribe">
                    <form id="prompt-form" method="post" action="/thanx_page.php">
                        <input class="modal_window_input" name="name" type="email" id="masked_email" placeholder="Введите Ваш E-mail" pattern='[A-Za-z]^[ 0-9]+$\D [^0-9]' required>
                        <button class="modal_window_submit_btn" name="modal_btn" type="submit">Подписаться</button>
                    </form>
                </section>
            </div>
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
                        <a href="tel:8 (917) 261-44-44">8 (917) 261-44-44</a>
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
                                    <path transform="translate(1.0769 5.5557)" d="m6.4615 1.4815l-1.6395-1.4815-4.822 4.1482c0.19288 0.19753 0.38576 0.29629 0.67509 0.29629h11.573c0.2893 0 0.4822-0.09876 0.6751-0.29629l-4.8221-4.1482-1.6395 1.4815z" fill="#71aa27"/>
                                </g>
                                <defs>
                                    <clipPath id="c">
                                        <rect x="-357" y="-9497" width="1440" height="9762" clip-rule="evenodd"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#c)">
                                    <path transform="translate(1.0769)" d="M12.9231 0.277778C12.7302 0.0925926 12.5373 0 12.248 0L0.675086 0C0.385763 0 0.192882 0.0925926 0 0.277778L6.46154 5.55556L12.9231 0.277778Z" fill="#71aa27"/>
                                </g>
                                <defs>
                                    <clipPath id="b">
                                        <rect x="-357" y="-9497" width="1440" height="9762" clip-rule="evenodd"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#b)">
                                    <path transform="translate(0 1.1113)" d="M0 0L0 7.77778L4.30769 3.93574L0 0Z" fill="#71aa27"/>
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <rect x="-357" y="-9497" width="1440" height="9762" clip-rule="evenodd"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <path transform="translate(9.6924 1.1113)" d="m0 3.9357l4.3077 3.842v-7.7778l-4.3077 3.9357z" fill="#71aa27"/>
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
                    <a class="main_section__styled_btn link_to_news" href="/news">Показать на карте</a>
                </div>
            </div>
        </div>
    </section>
    <section class="modal_window_first invisible_item">
        <div class="modal_img_container">
            <div class="modal_img">
                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z"
                        fill="#71aa27" />
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
        <form id="prompt-form" method="post" action="thanks_window.php">
            <input class="modal_window_input" name="name" type="text" id="masked_name" placeholder="Введите Ваше имя">
            <input class="modal_window_input phone-number" id="selector" name="phone-number" type="text" placeholder="Контактный телефон"
                required="">
            <button class="modal_window_submit_btn" name="modal_btn" type="submit">Оставить заявку</button>
        </form>
        <p class="modal_agreement">Отправляя заявку, вы подтверждаете свое согласие с <a href="../politikaconf.pdf" target="_blank">политикой
                конфиденциальности</a></p>
    </section>
    <div class="overlay invisible_item"></div>
    <footer>
        <div class="politics">
            <span>Все права защищены. © Фабрика Картона 2018</span>
            <a href="../politikaconf.pdf" target="_blank">Политика конфиденциальности</a>
        </div>
        <div class="creator">
            <a href="http://drim.agency/"><div class="creator_logo"></div></a>
            <span>Разработка сайта</span>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/imask"></script>
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
        })
        window.addEventListener("scroll", hide_el);

        function hide_el() {
            var offset = window.pageYOffset || document.documentElement.scrollTop;
            var windowHeight = Math.max(
                document.body.scrollHeight, document.documentElement.scrollHeight,
                document.body.offsetHeight, document.documentElement.offsetHeight,
                document.body.clientHeight, document.documentElement.clientHeight
            );
            var item_to_scroll = document.getElementsByClassName('subscribe_content')[0];

            if (offset > (windowHeight * 0.6)) {
                item_to_scroll.classList.add('fade');

            } else {
                item_to_scroll.classList.remove('fade');
            }
        }

        var apply_modal = document.getElementsByClassName('modal_window_second')[0];
        var overlay = document.getElementsByClassName('overlay')[0];
        var modal_btn = document.getElementById('modal_btn');

        document.body.addEventListener('click', function (event) {
            var target = event.target;
            if (target.classList.contains('modal_trigger')) {
                apply_modal.classList.toggle('invisible_item');
                overlay.classList.toggle('invisible_item');
                document.documentElement.classList.add('no_scroll');
            }
        })

        modal_btn.addEventListener('click', function () {
            apply_modal.classList.toggle('invisible_item');
            overlay.classList.toggle('invisible_item');
            document.documentElement.classList.remove('no_scroll');
        })

        var phoneToMask = document.getElementById('selector');
        var maskOptions = {
            mask: '+{7}(000)000-00-00'
        };
        var mask = new IMask(phoneToMask, maskOptions);

        var name_mask = document.getElementById('masked_name');
        var patternMask = new IMask(name_mask, {
            mask: '[aaaaaaaaaaaaaaaaaa][ ][aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa]'
        });


        var masked_email = document.getElementById('masked_email');
        masked_email.addEventListener('input', function () {

            var reg = /[А-Яа-яЁё]/;
            if (masked_email.value.search(reg) != -1) {
                masked_email.value = masked_email.value.replace(reg, '');
            }

        })

        function moreNews() {
            var count = parseInt($("input#count").val());
            count++;
            $("input#count").val(count);

            $.ajax({
                url: "/news/get_news.php",
                type: "POST",
                data: {method: "getNews", count: count},
                success: function (data) {
                    console.log(data);
                    $("div.all_news").append($(data));
                }
            });
        }
    </script>
</body>

</html>