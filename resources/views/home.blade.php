@extends('layouts.app')

@section('content')
    <!-- modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <modal></modal>
    <thanks v-if='isThanks'></thanks>

    <!-- modal -->


    <section class="navigation">
        <p class="header-text-top" data-toggle="modal" data-target="#staticBackdrop">
            Помощь в получении кредита в Казани
        </p>

        <div class="container-fluid px-0 fixed-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="#"><img src="./img/header/logo.svg" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="./img/header/burger.png" alt="menu">
                    </button>

                    <div class="collapse navbar-collapse d-print-flex d-md-flex align-items-center align-items-md-start" id="navbarSupportedContent">
                        <ul class="header__list-item align-items-center justify-content-center flex-column flex-md-row d-md-flex">
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#arrange">Преимущества</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#get">Условия</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#info">О компании</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#check">Как получить</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#faster">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#back">Отзывы</a>
                            </li>
                        </ul>
                        <!-- <a class="header__mobile d-block d-md-none" href="tel:8 800 800 80 80">8 800 800 80 80</a> -->
                    </div>

                    <!-- <a class="header__mobile d-none d-md-block" href="tel:8 800 800 80 80">8 800 800 80 80</a> -->
                </nav>
            </div>
        </div>

    </section>
    <section class="header">
        <div class="container">
            <div class="percent position-relative align-items-center align-items-md-start flex-column flex-md-row d-flex justify-content-center justify-content-md-between px-2">
                <!-- <img class="woman-money position-absolute" src="./img/header/woman-money.png" alt="woman"> -->
                <div class="percent-left-block">
                    <div class="percent-left-block__subblock">
                        <h1 class="percent__one-hundrerd">Получите <span>100%</span></h1>
                        <h2 class="percent__six mb-2">одобрение по ставке от <span>4%</span></h2>
                        <p class="percent__history">Даже с испорченной кредитной <br> историей!</p>
                        <button class="percent__apply" data-toggle="modal" data-target="#staticBackdrop">Подать заявку</button>
                    </div>
                    <!-- <img class="woman-money " src="./img/header/woman-money.png" alt="woman"> -->
                </div>
                <img class="money-mobile d-block d-md-none" src="./img/header/money-mobile.png" alt="money">
                <img class="woman-money" src="./img/header/woman-money.png" alt="woman">
                <div class="percent-right-block">
                    <p class="percent__information mb-4"><span>Без проверки кредитной истории</span> <br> Нам не важно на сколько плохая у Вас кредитная история</p>
                    <p class="percent__information mb-4"><span>Без официального трудоустройства</span> <br> У нас вы можете оформить от 100 тыс. до 5 млн. руб.</p>
                    <p class="percent__information"><span>Кредит на любые цели</span> <br> Кредит на выгодных условиях и без дополнительных услуг</p>
                </div>
                <div class="percent-fixed position-fixed d-flex d-sm-none">
                    <button class="percent__apply d-block mr-2" data-toggle="modal" data-target="#staticBackdrop">Подать заявку</button>
                    <!-- <div class="btn-phone__number">
                        <a class="" href="tel:8 800 800 80 80"><img src="./img/header/phone-btn-mobile.png" alt="phone"></a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="calc">

        <div class="container">
            <div class="row calc__row">
                <div class="calc__box calc__card-box">
                    <div class="calc__card calc__card--blue">
                        <div class="calc__img"><img src="img/calc/money.png" alt="money"></div>
                        <p class="calc__text">Помогли взять </br> более <strong>15 МЛН РУБЛЕЙ</strong></p>
                    </div>
                    <!-- /.calc__card -->
                    <div class="calc__card calc__card--green">
                        <div class="calc__img"><img src="img/calc/bank.png" alt="bank"></div>
                        <p class="calc__text">Более <strong>50 БАНКОВ</strong></br> партнеров </p>
                    </div>
                    <!-- /.calc__card -->
                    <div class="calc__card calc__card--yellow">
                        <div class="calc__img"><img src="img/calc/error.png" alt="error"></div>
                        <p class="calc__text">Одобрения даже с <strong>ПЛОХОЙ </br> ИСТОРИЕЙ</strong> кредита </p>
                    </div>
                    <!-- /.calc__card -->
                    <div class="calc__card calc__card--red">
                        <div class="calc__img"><img src="img/calc/woman.png" alt="woman"></div>
                        <p class="calc__text"><strong>БЕЗ СПРАВОК</strong> </br> и поручителей </p>
                    </div>
                    <!-- /.calc__card -->
                </div>
                <!-- /.calc__box -->
                <div class="calc__box calc__calc">
                    <div class="row row-input">
                        <div class="calc__calc-approval">
                            <h3 class="calc__calc-percent">95%</h3>
                            <p class="calc__calc-text">Процент одобрения кредита</p>
                        </div>
                        <div class="calc__calc-input-group">
                            <label class="calc__calc-label" for="calc__calc-input">Сумма кредита до 20 млн ₽</label>
                            <input id="calc__calc-input" type="text" class="calc__calc-input">
                        </div>
                    </div>

                    <div class="calc__calc-text calc__calc-text--time">Выберите срок</div>
                    <div class="row row-calc-card">
                        <div data-period="1" class="calc__calc-card">1 год</div>
                        <div data-period="2" class="calc__calc-card">2 года</div>
                        <div data-period="3" class="calc__calc-card">3 года</div>
                        <div data-period="4" class="calc__calc-card">4 года</div>
                        <div data-period="5" class="calc__calc-card">5 лет</div>
                        <div data-period="6" class="calc__calc-card">6 лет</div>
                        <div data-period="7" class="calc__calc-card">7 лет</div>
                        <div data-period="8" class="calc__calc-card">8 лет</div>
                        <div data-period="9" class="calc__calc-card">9 лет</div>
                        <div data-period="10" class="calc__calc-card">10 лет</div>
                        <p class="calc__calc-card-text">Расчет калькулятора произведен по ставкам, действующим при условии оформления финансовой защиты к кредиту.</br> Не является публичной офертой.</p>
                    </div>
                    <p class="calc__calc-offer">Наше предложение</p>
                    <div class="row row-payment">
                        <div class="calc__calc-bet-wrap">
                            <div class="calc__select-wrap">
                                <select name="calc__select" id="calc__select" class="calc__select">
                                    <option value=""></option>
                                    <option value="1">1 год</option>
                                    <option value="2">2 года</option>
                                    <option value="3">3 года</option>
                                    <option value="4">4 года</option>
                                    <option value="5">5 лет</option>
                                    <option value="6">6 лет</option>
                                    <option value="7">7 лет</option>
                                    <option value="8">8 лет</option>
                                    <option value="9">9 лет</option>
                                    <option value="10">10 лет</option>
                                </select>
                            </div>
                            <div class="calc__calc-bet"><span>Процентная ставка</span>
                                <p>4%</p>
                            </div>
                        </div>
                        <div class="calc__calc-payment">
                            <span>Ежемесячный платеж</span>
                            <div class="calc__calc-payment-box">
                                <p class="calc__calc-sum">0</p>
                                <p class="card__card-rouble">₽</p>
                            </div>
                        </div>
                        <button class="button calc__button" data-toggle="modal" data-target="#staticBackdrop">Заполнить заявку</button>
                    </div>
                </div>
                <!-- /.calc__box -->

            </div>

        </div>

    </section>
    <section id="arrange" class="arrange">
        <div class="container">

            <h2 class="medium-title arrange-title pl-md-2 pl-xl-0">
                <span>Оформим кредит </span>на выгодных условиях
            </h2>

            <div class="arrange-block d-flex justify-content-center justify-content-xl-between flex-wrap">

                <div class="arrange-section mx-md-auto mx-xl-0 mb-5 mb-xl-0">

                    <div class="arrange-section__card mb-3 ">
                        <h4 class="arange-title">Автокредитование</h4>
                        <div class="arrange-secton--subblock d-flex">
                            <img class="arrange-images" src="./img/arrange/arrange-car.png" alt="car">
                            <ul class="arrange-section--list">
                                <li>На новый автомобиль</li>
                                <li>Автомобиль в лизинг</li>
                                <li>На б\у автомобиль</li>
                            </ul>
                        </div>
                    </div>
                    <div class="arrange-section__card">
                        <h4 class="arange-title">Кредит для бизнеса</h4>
                        <div class="arrange-secton--subblock d-flex">
                            <img class="arrange-images" src="./img/arrange/arrange-bag.png" alt="car">
                            <ul class="arrange-section--list">
                                <li>На открытие бизнеса</li>
                                <li>На развитие бизнеса</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="arrange-section mx-md-auto mx-xl-0 mb-5 mb-xl-0">

                    <div class="arrange-section__card mb-3">
                        <h4 class="arange-title">Ипотечный кредит</h4>
                        <div class="arrange-secton--subblock d-flex">
                            <img class="arrange-images" src="./img/arrange/arrange-house.png" alt="car">
                            <ul class="arrange-section--list">
                                <li>На новую квартиру</li>
                                <li>На вторичный рынок</li>
                            </ul>
                        </div>
                    </div>
                    <div class="arrange-section__card">
                        <h4 class="arange-title">Потребительский кредит</h4>
                        <div class="arrange-secton--subblock d-flex">
                            <img class="arrange-images" src="./img/arrange/arrange-money.png" alt="car">
                            <ul class="arrange-section--list">
                                <li>На любые цели наличными</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="arrange-section mx-md-auto mx-xl-0">

                    <div class="arrange-section__card mb-3">
                        <h4 class="arange-title">Рефинансирование</h4>
                        <div class="arrange-secton--subblock d-flex">
                            <img class="arrange-images" src="./img/arrange/arrange-bank.png" alt="car">
                            <ul class="arrange-section--list">
                                <li>С просроченными кредитами</li>
                                <li>С ипотеками</li>
                                <li>С автокредитами</li>
                                <li>С залогами</li>
                            </ul>
                        </div>
                    </div>
                    <div class="arrange-section__card">
                        <h4 class="arange-title">Кредит на строительство</h4>
                        <div class="arrange-secton--subblock d-flex">
                            <img class="arrange-images" src="./img/arrange/arrange-car.png" alt="car">
                            <ul class="arrange-section--list">
                                <li>На строительство дома</li>
                                <li>На строительство коттеджа</li>
                                <li>На строительство дачи</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            <div class="arrange-slider__block d-none">
                <div class="single-item">

                    <div class="arrange-section__card mb-3 ">
                        <img class="arrange-images" src="./img/arrange/arrange-car.png" alt="car">
                        <h4 class="arange-title pl-0 pt-0">Автокредитование</h4>
                        <ul class="arrange-section--list">
                            <li>На новый автомобиль</li>
                            <li>Автомобиль в лизинг</li>
                            <li>На б\у автомобиль</li>
                        </ul>

                    </div>
                    <div class="arrange-section__card">
                        <img class="arrange-images" src="./img/arrange/arrange-bag.png" alt="car">
                        <h4 class="arange-title pl-0 pt-0">Кредит для бизнеса</h4>
                        <ul class="arrange-section--list">
                            <li>На открытие бизнеса</li>
                            <li>На развитие бизнеса</li>
                        </ul>
                    </div>
                    <div class="arrange-section__card mb-3">
                        <img class="arrange-images" src="./img/arrange/arrange-house.png" alt="car">
                        <h4 class="arange-title pl-0 pt-0">Ипотечный кредит</h4>
                        <ul class="arrange-section--list">
                            <li>На новую квартиру</li>
                            <li>На вторичный рынок</li>
                        </ul>
                    </div>
                    <div class="arrange-section__card">
                        <img class="arrange-images" src="./img/arrange/arrange-money.png" alt="car">
                        <h4 class="arange-title pl-0 pt-0">Потребительский кредит</h4>
                        <ul class="arrange-section--list">
                            <li>На любые цели наличными</li>
                        </ul>
                    </div>
                    <div class="arrange-section__card mb-3">
                        <img class="arrange-images" src="./img/arrange/arrange-bank.png" alt="car">
                        <h4 class="arange-title pl-0 pt-0">Рефинансирование</h4>
                        <ul class="arrange-section--list">
                            <li>С просроченными кредитами</li>
                            <li>С ипотеками</li>
                            <li>С автокредитами</li>
                            <li>С залогами</li>
                        </ul>
                    </div>
                    <div class="arrange-section__card">
                        <img class="arrange-images" src="./img/arrange/arrange-car.png" alt="car">
                        <h4 class="arange-title pl-0 pt-0">Кредит на строительство</h4>
                        <ul class="arrange-section--list">
                            <li>На строительство дома</li>
                            <li>На строительство коттеджа</li>
                            <li>На строительство дачи</li>
                        </ul>
                    </div>

                </div>
                <div class="info__slider-progress">
                    <p class="info__slider-text">Листай влево</p>
                    <div class="progress arrange__progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="get" class="get">
        <div class="container">
            <h2 class="medium-title get-title pl-md-2 pl-xl-0">
                <span>Поможем получить кредит, </span>даже если у вас:
            </h2>

            <div class="get-block d-flex flex-column position-relative">

                <div class="get-block__top d-flex justify-content-center flex-wrap mb-3 mb-xl-5">
                    <div class="get--card mx-auto mx-xl-0 d-flex justify-content-center align-items-center">
                        <img src="./img/get/blank.png" alt="">
                        <p class="get--text">Плохая кредитная история</p>
                    </div>
                    <div class="get--card mb-3 mb-xl-0 mx-auto d-flex justify-content-center align-items-center">
                        <img src="./img/get/calendar.png" alt="">
                        <p class="get--text">Кредит с просрочками</p>
                    </div>
                    <div class="get--card mx-auto d-flex justify-content-center align-items-center">
                        <img src="./img/get/baG.png" alt="">
                        <p class="get--text">Кредит без официального трудоустройства</p>
                    </div>
                    <div class="get--card mx-auto mx-xl-0 d-flex justify-content-center align-items-center">
                        <img src="./img/get/little-car.png" alt="">
                        <p class="get--text">Помощь в получении автокредита</p>
                    </div>
                </div>

                <div class="get-block__bottom d-flex justify-content-center flex-wrap">
                    <div class="get--card mx-auto mx-xl-0 d-flex justify-content-center align-items-center">
                        <img src="./img/get/hand.png" alt="">
                        <p class="get--text">Отказали банки</p>
                    </div>
                    <div class="get--card mb-3 mb-xl-0 mx-auto d-flex justify-content-center align-items-center">
                        <img src="./img/get/get-bank.png" alt="">
                        <p class="get--text">Кредит под залог</p>
                    </div>
                    <div class="get--card mx-auto d-flex justify-content-center align-items-center">
                        <img src="./img/get/hand-money.png" alt="">
                        <p class="get--text">Помощь в получении ипотеки</p>
                    </div>
                    <div class="get--card mx-auto mx-xl-0 d-flex justify-content-center align-items-center">
                        <img src="./img/get/women.png" alt="">
                        <p class="get--text">Другое</p>
                    </div>
                </div>
                <img class="dengi position-absolute" src="./img/get/denga.png" alt="">
            </div>
        </div>
    </section>
    <section id="info" class="info">
        <div class="info-money"><img src="img/information/money.jpg" alt="money"></div>
        <div class="container info__info-container">

            <h2 class="medium-title infor-title pl-md-2 pl-xl-0">
                <span>Немного </span><br>о нашей компании
            </h2>

            <div class="info__info">
                <div class="row info__info-row">
                    <div class="info__info-box">
                        <p class="info__info-text">Компания <strong>«Одобрение»</strong> работает исключительно в Ваших интересах, на результат в одобрение и выдаче кредитов своим клиентам. Обратившись к нам, вы в первую очередь получаете консультацию от ведущих профессионалов
                            рынка, так как у нас работают люди исключительно с финансовым и экономическим образованием, бывшие сотрудники банков в городе Москва, которые имеют огромный опыт и знания банковской системы изнутри.</p>
                        <div class="info__info-img-box">
                            <div><img src="img/information/certificate.png" alt="certificate"></div>
                            <div><img src="img/information/certificate.png" alt="certificate"></div>
                            <div><img src="img/information/certificate.png" alt="certificate"></div>
                        </div>
                    </div>
                    <div class="info__info-img"><img src="img/information/bank.jpg" alt="bank"></div>
                </div>
                <div class="info__slider-wrap">
                    <div class="info__slider variable-width">
                        <div><img src="img/information/certificate.png" alt="certificate"></div>
                        <div><img src="img/information/certificate.png" alt="certificate"></div>
                        <div><img src="img/information/certificate.png" alt="certificate"></div>
                    </div>
                    <div class="info__slider-progress">
                        <p class="info__slider-text">Листай влево</p>
                        <div class="progress info__progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="slider__label"></div>
                </div>
            </div>
        </div>

        <div class="info__help-wrap">
            <div class="info__help">

                <div class="info__help-img--mobile"><img src="img/information/money2.png" alt="money"></div>

                <div class="info__help-box">
                    <h3 class="info__help-title">НУЖНА ПОМОЩЬ</h3>
                    <p class="info__help-subtitle">В ПОЛУЧЕНИИ КРЕДИТА В МОСКВЕ?</p>
                    <p class="info__help-text">С нами вы получите одобрение по кредиту <span class="info__help-text--first"><span class="info__help-text--second">по ставке от 4%,</span> даже с плохой кредитной историей</span>
                    </p>
                    <div class="row info__help-connection">
                        <button class="info__help-connection-button">Жмите “Подать заявку”</button>
                       <!-- <div class="info__help-connection-or">или</div>
                        <a href="tel:8 800 800 80 80" class="info__help-connection-img"><img src="img/information/tel.svg" alt="phone"></a> -->
                    </div>
                </div>
                <!-- /.info__help-box -->

                <div class="info__help-img"><img src="img/information/money1.png" alt="money"></div>

                <button class="button info__help-button" data-toggle="modal" data-target="#staticBackdrop">Заполнить заявку</button>

            </div>
        </div>
        <!-- /.info__help -->

        <div id="check" class="container">
            <h2 class="medium-title infor-title pl-md-2 pl-xl-0">
                <span>Просто </span><br>как "раз-два-три"
            </h2>

            <div class="row row-card">
                <div class="info__card">
                    <div class="row">
                        <div class="info__card-box info__card-box--left">
                            <p class="info__card-step">Шаг 1</p>
                            <div class="info__card-img"><img src="img/information/logo.png" alt="logo"></div>
                        </div>

                        <div class="info__card-box">
                            <h4 class="info__card-title">Оставляете заявку</h4>
                            <p class="info__card-text">перезвоним в течение 15 минут, проведем анализ Вашей ситуации</p>
                        </div>
                    </div>
                </div>
                <!-- /.info__card -->
                <div class="info__card">
                    <div class="row">
                        <div class="info__card-box info__card-box--left">
                            <p class="info__card-step">Шаг 2</p>
                            <div class="info__card-img"><img src="img/information/logo.png" alt="logo"></div>
                        </div>

                        <div class="info__card-box">
                            <h4 class="info__card-title">Встреча в офисе</h4>
                            <p class="info__card-text">заключаем договор, подбор оптимальной программы кредитования</p>
                        </div>
                    </div>
                </div>
                <!-- /.info__card -->
                <div class="info__card">
                    <div class="row">
                        <div class="info__card-box info__card-box--left">
                            <p class="info__card-step">Шаг 3</p>
                            <div class="info__card-img"><img src="img/information/logo.png" alt="logo"></div>
                        </div>

                        <div class="info__card-box">
                            <h4 class="info__card-title">Получаете деньги</h4>
                            <p class="info__card-text">быстрое и выгодное одобрение, выдача кредита в банке</p>
                        </div>
                    </div>
                </div>
                <!-- /.info__card -->
            </div>
        </div>

    </section>
    <section id="click" class="poll mb-5">
        <quiz></quiz>
    </section>
    <section id="faster" class="faster">
        <div class="faster__ellipse"><img src="img/faster/Ellipse.png" alt="ellipse"></div>
        <div class="container faster__container">
            <div class="section-title faster__title">
                <h3>Быстрее, лучше, выгоднее</h3>
            </div>

            <div class="row faster__row">

                <div class="faster__money--1"><img src="img/faster/money.png" alt="money"></div>
                <div class="faster__money--2"><img src="img/faster/money1.png" alt="money"></div>
                <div class="faster__money--3"><img src="img/faster/money2.png" alt="money"></div>

                <div class="faster__col faster__col--pink">
                    <h4 class="faste__col-title faste__col-title--red">ВЫ ОБРАТИЛИСЬ В БАНК</h4>
                    <p class="faster__col-text">Потратили на это 2-3 дня, оставили много времени и сил в банках на оформление необходимых документов. Получили отказы</p>
                    <ul class="faster__ul">
                        <li>Одобренная сумма - <strong>600 000</strong> руб.</li>
                        <li>Ставка- <strong>19%</strong> годовых</li>
                        <li>Страховка - <strong>10%</strong> от суммы</li>
                        <li>Получили на руки - <strong>540 000</strong> руб.</li>
                        <li>Платеж - <strong>17 600</strong> рублей</li>
                    </ul>
                </div>
                <!-- /.faster__col -->
                <div class="faster__col faster__col--green">
                    <h4 class="faste__col-title faste__col-title--gren">ВЫ ОБРАТИЛИСЬ К НАМ</h4>
                    <p class="faster__col-text">Мы оформляем все документы. За один день мы получаем положительные решения банков партнеров и Вы выбираете из них выгодное предложение</p>
                    <ul class="faster__ul">
                        <li>Одобренная сумма - <strong>600 000</strong> руб.</li>
                        <li>Ставка- <strong>4%</strong> годовых</li>
                        <li>Страховка - <strong>0%</strong> от суммы</li>
                        <li>Получили на руки - <strong>600 000</strong> руб.</li>
                        <li>Платеж - <strong>9 500</strong> рублей</li>
                    </ul>
                </div>
                <!-- /.faster__col -->

                <div class="faster__col-img"><img src="img/faster/Shape.jpg" alt="shape"></div>
            </div>
            <!-- /.row -->
        </div>

        <div class="questions">
            <div class="questions__container">
                <div class="row">
                    <div class="questions__img"><img src="img/faster/money_girl.png" alt="money girl"></div>

                    <div class="questions__box">
                        <div class="section-title question__title">
                            <h3>Остались вопросы?</h3>
                        </div>

                        <div class="questions__accordion">
                            <div class="questions__question">
                                <div class="questions__question-header questions__question-header--active">Как мне получить скидку на услуги?</div>
                                <div class="questions__question-content questions__question-content--active">Если Вы повторно обращаетесь к нам или даёте рекомендацию знакомым, то получаете скидку 10% на наши услуги</div>
                            </div>
                            <div class="questions__question">
                                <div class="questions__question-header">Какие документы необходимы для получения кредита?</div>
                                <div class="questions__question-content">Нам необходим только паспорт. Справка 2-НДФЛ не обязательна</div>
                            </div>
                            <div class="questions__question">
                                <div class="questions__question-header">Какие требования к заемщику?</div>
                                <div class="questions__question-content">Только ваше желание</div>
                            </div>
                            <div class="questions__question">
                                <div class="questions__question-header">Нужно ли оплачивать Ваши услуги при отрицательном решении банка?</div>
                                <div class="questions__question-content">Нет, наши услуги оплачиваются только в случае положительного решения банка и после получения денежных средств</div>
                            </div>
                            <div class="questions__question">
                                <div class="questions__question-header">У меня плоха кредитная история, постоянно отказывают банки, вы можете мне помочь?</div>
                                <div class="questions__question-content">Да, выдача кредитов с плохой кредитной историей это наш профиль, все ситуации решаются индивидуально.</div>
                            </div>
                        </div>
                        <!-- /.question__accordion -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.faster-questions -->

    </section>
    <section id="back" class="video-reviews overflow-hidden">
        <div class="container px-0">

            <div class="general-block d-flex justify-content-between align-items-start">

                <h2 class="medium-title reviews-title pl-2 pl-xl-0">
                    <span>Отзывы </span><br>о нашей компании
                </h2>


                <div class="desctop-reviews__block d-flex justify-content-center mx-auto flex-wrap">

                    <div class="video-block--beneral position-relative overflow-hidden mx-2 my-2">
                        <a data-fancybox="certificates" class="block--slider__link" href="video/first-ot.mp4" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10">
                            <img class="block--slider__card" src="img/poster/prev-1.jpg" alt="картинка">
                        </a>
                        <img src="./img/reviews/play-vidio.png" class="play-vidio position-absolute" alt="">
                        <div class="blur-filter position-absolute d-flex flex-column py-3 pl-3">
                            <h3 class="title-blur mb-2">Валерий Павлов</h3>
                            <p class="date-blur">5 декабря 2020 г.</p>
                        </div>
                    </div>

                    <div class="video-block--beneral position-relative overflow-hidden mx-2 my-2">
                        <a data-fancybox="certificates" class="block--slider__link" href="video/second-ot.mp4" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10">
                            <img class="block--slider__card" src="img/poster/prev-2.jpg" alt="картинка">
                        </a>
                        <img src="./img/reviews/play-vidio.png" class="play-vidio position-absolute" alt="">
                        <div class="blur-filter position-absolute d-flex flex-column py-3 pl-3">
                            <h3 class="title-blur mb-2">Евгений Степанов</h3>
                            <p class="date-blur">20 декабря 2020 г.</p>
                        </div>
                    </div>

                    <div class="video-block--beneral position-relative overflow-hidden mx-2 my-2">
                        <a data-fancybox="certificates" class="block--slider__link" href="video/thirt-ot.mp4" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10">
                            <img class="block--slider__card " src="img/poster/prev-3.jpg" alt="картинка">
                        </a>
                        <img src="./img/reviews/play-vidio.png" class="play-vidio position-absolute" alt="">
                        <div class="blur-filter position-absolute d-flex flex-column py-3 pl-3">
                            <h3 class="title-blur mb-2">Анастасия Борисова</h3>
                            <p class="date-blur">12 января 2021 г.</p>
                        </div>
                    </div>

                    <div class="video-block--beneral position-relative overflow-hidden mx-2 my-2">
                        <a data-fancybox="certificates" class="block--slider__link" href="video/fours-ot.mp4" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10">
                            <img class="block--slider__card " src="img/poster/prev-4.jpg" alt="картинка">
                        </a>
                        <img src="./img/reviews/play-vidio.png" class="play-vidio position-absolute" alt="">
                        <div class="blur-filter position-absolute d-flex flex-column py-3 pl-3">
                            <h3 class="title-blur mb-2">Елена Потапова</h3>
                            <p class="date-blur">5 декабря 2019 г.</p>
                        </div>
                    </div>
                </div>

                <div class="info__slider-wrap">

                    <div class="info__slider variable-width d-block d-md-none mb-0">

                        <div class="video-block--beneral position-relative">
                            <a data-fancybox="certificates" class="block--slider__link" href="video/first-ot.mp4" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10">
                                <img class="block--slider__card " src="img/poster/prev-1.jpg" alt="картинка">
                            </a>
                            <img src="./img/reviews/play-vidio.png" class="play-vidio position-absolute" alt="">
                            <div class="blur-filter position-absolute d-flex flex-column py-3 pl-3">
                                <h3 class="title-blur mb-2">Валерий Павлов</h3>
                                <p class="date-blur">5 декабря 2020 г.</p>
                            </div>
                        </div>

                        <div class="video-block--beneral position-relative">
                            <a data-fancybox="certificates" class="block--slider__link" href="video/second-ot.mp4" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="">
                                <img class="block--slider__card " src="img/poster/prev-2.jpg" alt="картинка">
                            </a>
                            <img src="./img/reviews/play-vidio.png" class="play-vidio position-absolute" alt="">
                            <div class="blur-filter position-absolute d-flex flex-column py-3 pl-3">
                                <h3 class="title-blur mb-2">Евгений Степанов</h3>
                                <p class="date-blur">20 декабря 2020 г.</p>
                            </div>
                        </div>

                        <div class="video-block--beneral position-relative">
                            <a data-fancybox="certificates" class="block--slider__link" href="video/thirt-ot.mp4" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="">
                                <img class="block--slider__card " src="img/poster/prev-3.jpg" alt="картинка">
                            </a>
                            <img src="./img/reviews/play-vidio.png" class="play-vidio position-absolute" alt="">
                            <div class="blur-filter position-absolute d-flex flex-column py-3 pl-3">
                                <h3 class="title-blur mb-2">Анастасия Борисова</h3>
                                <p class="date-blur">12 января 2021 г.</p>
                            </div>
                        </div>

                        <div class="video-block--beneral position-relative">
                            <a data-fancybox="certificates" class="block--slider__link" href="video/fours-ot.mp4" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10">
                                <img class="block--slider__card " src="img/poster/prev-4.jpg" alt="картинка">
                            </a>
                            <img src="./img/reviews/play-vidio.png" class="play-vidio position-absolute" alt="">
                            <div class="blur-filter position-absolute d-flex flex-column py-3 pl-3">
                                <h3 class="title-blur mb-2">Елена Потапова</h3>
                                <p class="date-blur">5 декабря 2019 г.</p>
                            </div>
                        </div>

                    </div>

                    <div class="info__slider-progress px-4">
                        <p class="info__slider-text">Листай влево</p>
                        <div class="progress info__progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="slider__label "></div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">

            <div class="footer-big--block">

                <div class="footer-main">
                    <div class="footer-main__top">
                        <img src="./img/footer/logo-white.svg" alt="">
                        <ul class="main__top--list">
                            <li><a href="#arrange">Преимущества</a></li>
                            <li><a href="#get">Условия</a></li>
                            <li><a href="#info">О компании</a></li>
                            <li><a href="#check">Как получить</a></li>
                            <li><a href="#faster">FAQ</a></li>
                            <li><a href="#back">Отзывы</a></li>
                        </ul>
                    </div>

                    <div class="footer-main__bottom">
                        <div class="schedule">
                            <p class=" mb-3">График работы:</p>
                            <p class="schedule--time">ПН - СБ 8:00 - 21:00
                            </p>
                        </div>
                        <p class="schedule--address">
                            г. Москва, ул. Кремлевская, д. 12, оф. 512
                        </p>
                    </div>
                </div>

                <div class="footer-text">
                    <p class="text-footer mb-4">Не является публичной офертой </p>
                    <p class="text-footer__bottom">Не является публичной офертой Подбор кредитно-финансовых услуг, квалифицированная помощь юристов</p>
                </div>
            </div>
        </div>
    </section>
@endsection
