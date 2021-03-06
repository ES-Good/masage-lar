@extends('layouts.app')

@section('title')
    Сервис
@endsection

@section('content')
<main>

    <section class="section services-Main questMain">
        <div class="container questMain__container">
            <h3 class="section__title questMain__title services-Main__title">Программы приватной студии</h3>
            <p class="section__text questMain__text services-Main__text">В нашем салоне мужчинам делают самые разные массажи в зависимости от их собственных вкусов и предпочтений. Мы готовы предложить вам широкий спектр возможностей, чтобы провести свой отдых по-особенному.</p>
        </div>
        <a href="#next" class="questMain__arrow">
            <img class="questMain__arrow--1" src="img/quest/logo/arrow.png" alt="arrow">
            <img class="questMain__arrow--2" src="img/quest/logo/arrow1.png" alt="arrow">
        </a>
    </section>
    <!-- /.section questMain -->

    <section id="next" class="section services-species services-species--1">

        <div class="services-species__row">
            <div class="services-species__img">
                <img src="img/services/img.jpg" alt="photo">
                <img src="img/services/img-m.jpg" alt="photo">
            </div>

            <div class="services-species__box">
                <div class="services-species__wrap">
                    <h3 class="services-species__title">Пенный восторг</h3>
                    <div class="services-species__wrap--text">
                        <p class="services-species__text">Самое быстрое наслаждение, заряженное на все 100.</p>
                        <p class="services-species__text">Начни рабочий день с небольшого отдыха.</p>
                        <p class="services-species__text">Тропический душ ипрекрасной девушкой  наполнит жизненной силой и энергией.</p>
                    </div>
                    <p class="services-species__title--small">Что входит в программу:</p>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Аква-пенный массаж</p>
                    </div>
                    <div class="row--center services-species__row--heart services-species__row--heart--last jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Эротика в душе</p>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">30 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">1800 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                </div>
                <div class="services-species__wrap--button">
                    <button data-modal class="button services-species__button">Записаться</button>
                </div>
            </div>
        </div>

    </section>
    <!-- /.section services-species services-species--1 -->

    <section class="section services-species services-species--2">

        <div class="services-species__row">
            <div class="services-species__img">
                <img src="img/services/img1.jpg" alt="photo">
                <img src="img/services/img1-m.jpg" alt="photo">
            </div>

            <div class="services-species__box">
                <div class="services-species__wrap">
                    <h3 class="services-species__title">Искушение</h3>
                    <div class="services-species__wrap--text">
                        <p class="services-species__text">Самые расслабляющие техники тайского массажа, незаметно переходящие в эротизм массажа лингама, подарит новые ощущения. Незабываемый опыт обеспечен. Активные ласки только в Вашу сторону.</p>
                    </div>
                    <p class="services-species__title--small">Что входит в программу:</p>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Совместный душ</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Тайский массаж</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Боди массаж</p>
                    </div>
                    <div class="row--center services-species__row--heart services-species__row--heart--last jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Массаж лингам</p>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">60 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">3200 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                </div>
                <div class="services-species__wrap--button">
                    <button data-modal class="button services-species__button">Записаться</button>
                </div>
            </div>
        </div>

    </section>
    <!-- /.section services-species services-species--2 -->

    <section class="section services-species services-species--3">

        <div class="services-species__row">
            <div class="services-species__img">
                <img src="img/services/img2.jpg" alt="photo">
                <img src="img/services/img2-m.jpg" alt="photo">
            </div>

            <div class="services-species__box">
                <div class="services-species__wrap">
                    <h3 class="services-species__title">Трактат желаний</h3>
                    <div class="services-species__wrap--text">
                        <p class="services-species__text">Воплоти страсти в любой позе Камасутры. Получи удовольствие в понравившейся позе. От классически до самых удивительных. Не устоит даже самый искушённый.</p>
                    </div>
                    <p class="services-species__title--small">Что входит в программу:</p>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Совместный душ, джакузи</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Силовой массаж</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Боди массаж</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Эротическая часть с имитациями секса</p>
                    </div>
                    <div class="row--center services-species__row--heart services-species__row--heart--last jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Взаимные ласки</p>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">60 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">5500 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">90 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">6600 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                </div>
                <div class="services-species__wrap--button">
                    <button data-modal class="button services-species__button">Записаться</button>
                </div>
            </div>
        </div>

    </section>
    <!-- /.section services-species services-species--3 -->

    <section class="section services-species services-species--4">

        <div class="services-species__row">
            <div class="services-species__img">
                <img src="img/services/img3.jpg" alt="infinity">
                <img src="img/services/img3-m.jpg" alt="infinity">
            </div>

            <div class="services-species__box">
                <div class="services-species__wrap">
                    <h3 class="services-species__title">Неслучайность</h3>
                    <div class="services-species__wrap--text">
                        <p class="services-species__text">Чувственная и нежная программа. В шаге от соблазнительных поцелуев и нежных покусываний по телу до стретты оральных удовольствий.</p>
                    </div>
                    <p class="services-species__title--small">Что входит в программу:</p>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Совместный душ, джакузи</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Расслабляющий массаж</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Боди массаж</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Поцелуи по телу</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Эротическая часть с имитациями оральных ласк </p>
                    </div>
                    <div class="row--center services-species__row--heart services-species__row--heart--last jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Взаимные ласки</p>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">60 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">4500 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                    <div class="row--center jc-start services-species__row--items">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">90 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">5600 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                </div>
                <div class="services-species__wrap--button">
                    <button data-modal class="button services-species__button">Записаться</button>
                </div>
            </div>
        </div>

    </section>
    <!-- /.section services-species services-species--4 -->

    <section class="section services-species services-species--5">

        <div class="services-species__row">
            <div class="services-species__img">
                <img src="img/services/img4.jpg" alt="infinity">
                <img src="img/services/img4-m.jpg" alt="infinity">
            </div>

            <div class="services-species__box">
                <div class="services-species__wrap">
                    <h3 class="services-species__title">Инфинити</h3>
                    <div class="services-species__wrap--text">
                        <p class="services-species__text">Каждый знает об этой программе, потому что составляет её сам. Только лучшие техники на твой выбор. Программа для на томящих ценителей эротического массажа. Самая насыщенная программа-исполни все свои тайные желания.</p>
                    </div>
                    <p class="services-species__title--small">Что входит в программу:</p>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Совместный душ, джакузи</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Любой вид массажа</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Поцелуи, дыхание по телу</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Имитации секса и оральных ласк</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Индивидуально любой фетиш</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Неограниченное количество финалов</p>
                    </div>
                    <div class="row--center services-species__row--heart services-species__row--heart--last jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Взаимные ласки</p>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">60 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">6500 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                    <div class="row--center jc-start services-species__row--items">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">90 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">8000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                    <div class="row--center jc-start services-species__row--items">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">120 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">9500 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                </div>
                <div class="services-species__wrap--button">
                    <button data-modal class="button services-species__button">Записаться</button>
                </div>
            </div>
        </div>

    </section>
    <!-- /.section services-species services-species--5 -->

    <section class="section services-species services-species--6">

        <div class="services-species__row">
            <div class="services-species__img">
                <img src="img/services/img5.jpg" alt="photo">
                <img src="img/services/img5-m.jpg" alt="photo">
            </div>

            <div class="services-species__box">
                <div class="services-species__wrap">
                    <h3 class="services-species__title">Сирены</h3>
                    <div class="services-species__wrap--text">
                        <p class="services-species__text">Чувствуешь как они манят тебя? Две девушки,с какой дойти до конца, решать только тебе.</p>
                    </div>
                    <p class="services-species__title--small">Что входит в программу:</p>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Две девушки по очереди</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Совместный душ, джакузи</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Расслабляющий массаж </p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Боди массаж</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Поцелуи по телу</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Яркая эротическая часть</p>
                    </div>
                    <div class="row--center services-species__row--heart services-species__row--heart--last jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Два финала</p>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">90 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">8000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 2 девушками</p>
                        </div>
                    </div>
                    <div class="row--center jc-start services-species__row--items">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">120 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">10000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 2 девушками</p>
                        </div>
                    </div>
                </div>
                <div class="services-species__wrap--button">
                    <button data-modal class="button services-species__button">Записаться</button>
                </div>
            </div>
        </div>

    </section>
    <!-- /.section services-species services-species--6 -->

    <section class="section services-species services-species--7">

        <div class="services-species__row">
            <div class="services-species__img">
                <img src="img/services/img6.jpg" alt="photo">
                <img src="img/services/img6-m.jpg" alt="photo">
            </div>

            <div class="services-species__box">
                <div class="services-species__wrap">
                    <h3 class="services-species__title">Мы сошли с ума</h3>
                    <div class="services-species__wrap--text">
                        <p class="services-species__text">Мои подружки-лесбиянки.</p>
                        <p class="services-species__text">Попробуешь стать их другом?</p>
                    </div>
                    <p class="services-species__title--small">Что входит в программу:</p>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Две девушки одновременно </p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Совместный душ, джакузи</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Расслабляющий массаж в четыре руки</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Яркая эротическая часть</p>
                    </div>
                    <div class="row--center services-species__row--heart services-species__row--heart--last jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Лесби-шоу</p>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">60 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">10000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 2 девушками</p>
                        </div>
                    </div>
                    <div class="row--center jc-start services-species__row--items">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">90 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">12000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 2 девушками</p>
                        </div>
                    </div>
                    <div class="row--center jc-start services-species__row--items">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">120 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">14000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 2 девушками</p>
                        </div>
                    </div>
                </div>
                <div class="services-species__wrap--button">
                    <button data-modal class="button services-species__button">Записаться</button>
                </div>
            </div>
        </div>

    </section>
    <!-- /.section services-species services-species--7 -->

    <section class="section services-species services-species--8">

        <div class="services-species__row">
            <div class="services-species__img">
                <img src="img/services/img7.jpg" alt="photo">
                <img src="img/services/img7-m.jpg" alt="photo">
            </div>

            <div class="services-species__box">
                <div class="services-species__wrap">
                    <h3 class="services-species__title">Соло </h3>
                    <div class="services-species__wrap--text">
                        <p class="services-species__text">Стань режиссёром фильма, где девушка ласкает себя игрушками, не забывая о тебе.</p>
                    </div>
                    <p class="services-species__title--small">Что входит в программу:</p>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Совместный душ, джакузи</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Массаж девушке</p>
                    </div>
                    <div class="row--center services-species__row--heart services-species__row--heart--last jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Пип-шоу с участием</p>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">60 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">7000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                    <div class="row--center jc-start services-species__row--items">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">90 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">8000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                </div>
                <div class="services-species__wrap--button">
                    <button data-modal class="button services-species__button">Записаться</button>
                </div>
            </div>
        </div>

    </section>
    <!-- /.section services-species services-species--8 -->

    <section class="section services-species services-species--9">

        <div class="services-species__row">
            <div class="services-species__img">
                <img src="img/services/img8.jpg" alt="infinity">
                <img src="img/services/img8-m.jpg" alt="infinity">
            </div>

            <div class="services-species__box">
                <div class="services-species__wrap">
                    <h3 class="services-species__title">Укрощение строптивого</h3>
                    <div class="services-species__wrap--text">
                        <p class="services-species__text">Ты пробовал совместить боль и ласку, унижение и уважение? Госпожа знает подход к Боссу.</p>
                    </div>
                    <p class="services-species__title--small">Что входит в программу:</p>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Совместный душ, джакузи</p>
                    </div>
                    <div class="row--center services-species__row--heart jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Взрослые игры</p>
                    </div>
                    <div class="row--center services-species__row--heart services-species__row--heart--last jc-start">
                        <img class="services-species__heart" src="img/services/heart.png" alt="heart">
                        <p class="services-species__text">Эротическая часть в наезднице</p>
                    </div>
                    <div class="row--center services-species__row--items jc-start">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">60 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">7000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                    <div class="row--center jc-start services-species__row--items">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">90 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">9000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                    <div class="row--center jc-start services-species__row--items">
                        <div class="services-species__item">
                            <img src="img/services/clock.png" alt="clock">
                            <p class="services-species__item__text">120 минут</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/money.png" alt="money">
                            <p class="services-species__item__text">1000 ₽</p>
                        </div>
                        <div class="services-species__item">
                            <img src="img/services/value.png" alt="value">
                            <p class="services-species__item__text">С 1 девушкой</p>
                        </div>
                    </div>
                </div>
                <div class="services-species__wrap--button">
                    <button data-modal class="button services-species__button">Записаться</button>
                </div>
            </div>
        </div>

    </section>
    <!-- /.section services-species services-species--9 -->

</main>

<footer class="footer section">
    <div class="container">
        <div class="footer__row row">
            <a href="./index.html" class="footer__logo"><img src="img/logo/logoFooter.png" alt="logo"></a>
            <div class="footer__box footer__box--left">
                <p class="footer__title">Разделы сайта</p>
                <div class="footer__box__inner">
                    <div class="footer__wrap">
                        <a href="./index.html" class="footer__link">Главная</a>
                        <a href="./questionnaires.html" class="footer__link">Девушки</a>
                        <a href="./services.html" class="footer__link">Услуги</a>
                    </div>
                    <div class="footer__wrap">
                        <a href="./interior.html" class="footer__link">Интерьер</a>
                        <a href="./stocks.html" class="footer__link">Акции</a>
                        <a href="./contacts.html" class="footer__link">Контакты</a>
                    </div>
                </div>
            </div>
            <div class="footer__box footer__box--right">
                <p class="footer__text">Данные, размещенные на сайте, представляют собой лишь информационный характер. Администрация сайта не преследует цели оскорбить честь и достоинство посетителей сайта.</p>
                <p class="footer__text">Copyright © MEN'S CLUB, 2018. Все права защищены.</p>
                <p class="footer__text">Несанкционированное копирование материалов сайта запрещено.</p>
                <p class="footer__text">Сайт имеет возрастное ограничение 18+.</p>
            </div>
        </div>
    </div>
</footer>
<!-- /.footer section -->

<div class="modal">
    <form action="#" class="modal__dialog">
        <p class="modal__close">&#10006;</p>
        <p class="modal__title">Закажите услугу</p>
        <p class="modal__subtitle">Наш менеджер свяжется с вами в ближайшее время</p>
        <div class="modal__input-group">
            <input type="text" placeholder="Имя" name="name" class="modal__input modal__input--name">
            <span class="modal__input__invalid">Заполните поле</span>
        </div>
        <div class="modal__input-group">
            <input type="tel" placeholder="+7 (___) ___-__-__" name="tel" class="modal__input">
            <span class="modal__input__invalid">Заполните поле</span>
        </div>
        <button class="button modal__button">Заказать</button>
        <label for="check" class="modal__label">
            Ваш телефон необходим только для связи с Вами. Он ни в коем случае не будет передан третьим лицам.
            <input checked name="check" id="check" class="modal__check" type="checkbox">
            <span class="modal__ok"></span>
            <span class="modal__check__invalid">Согласитесь с обработкой данных</span>
        </label>
    </form>
</div>
<!-- /.modal -->

<div class="modal-success">
    <div class="modal-success__dialog">
        <p class="modal-success__close">&#10006;</p>
        <p class="modal-success__text">Наш менеджер свяжется <br> с вами в ближайшее время!</p>
    </div>
</div>
<!-- /.modal-success -->

<a href="tel:+78463794114" class="phone">
    <img src="./img/logo/phone.png" alt="phone">
</a>

<div class="modal-success modal-success--age">
    <div class="modal-success__dialog modal-success__dialog--age">
        <p class="modal-success__close modal-success__close--age">&#10006;</p>
        <p class="modal-success__text">Для посещения сайта <br> Вам должно быть более 21 года.</p>
    </div>
</div>
<!-- /.modal-success -->

<div class="age age--visible">
    <div class="age__dialog">
        <p class="age__title">Проверка возраста</p>
        <p class="age__text">Сайт содержит информацию, предназначенную для лиц старше 21 год</p>
        <button class="button age__button age__button--yes">Мне старше 21 года</button>
        <button class="button age__button age__button--no">Мне нет 21 года</button>
    </div>
</div>
<!-- /.age -->
@endsection