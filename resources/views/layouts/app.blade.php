<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Помощь в получении кредита в Новосибирске</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/other_script.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header section">
        <div class="header__container container">
            <div class="row--center">
                <div class="header__burger">
                    <div class="header__burger__line"></div>
                    <div class="header__burger__line"></div>
                    <div class="header__burger__line"></div>
                </div>
                <a href="./index.html" class="header__logo"><img src="img/logo/logo.png" alt="mbar.go"></a>
                <nav class="header__nav">
                    <a href="/" class="header__nav__link">Главная</a>
                    <a href="/questionnaires" class="header__nav__link">Девушки</a>
                    <a href="/services" class="header__nav__link">Услуги</a>
                    <a href="/interior" class="header__nav__link">Интерьер</a>
                    <a href="/stocks" class="header__nav__link">Акции</a>
                    <a href="/contacts" class="header__nav__link">Контакты</a>
                </nav>
                <a href="tel:+78463794114" class="header__button">+7 (846) 379-41-14</a>
                <a href="tel:+78463794114" class="header__tel"><img src="img/logo/tel.png" alt="tel"></a>
            </div>
        </div>
        <div class="header__menu">
            <p class="header__menu__close">&#10006;</p>
            <div class="header__menu__wrap">
                <a href="/" class="header__menu__link">Главная</a>
                <a href="/questionnaires" class="header__menu__link">Девушки</a>
                <a href="/services" class="header__menu__link">Услуги</a>
                <a href="/interior" class="header__menu__link">Интерьер</a>
                <a href="/stocks" class="header__menu__link">Акции</a>
                <a href="/contacts" class="header__menu__link">Контакты</a>
            </div>
            <a href="tel:+78463794114" class="header__menu__tel">
                <img src="img/logo/telMenu.png" alt="tel">
                <p class="header__menu__tel__text">+7(846) 379-41-14</p>
            </a>
        </div>
    </header>
    <div id="app">
            @yield('content')
    </div>
    @include('layouts._counters', [
        'counters' => [
            'facebook' =>[],
            'yandexMetrika' => [71486155],
            'google' => []
            ]
            ])
</body>
</html>
