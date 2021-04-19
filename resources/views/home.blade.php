@extends('layouts.app')

@section('title')
    MBARGO
@endsection


@section('content')
    <!-- modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <modal></modal>
    <thanks v-if='isThanks'></thanks>


        <section class="section main">
            <div class="main__water"><img src="img/index/water.png" alt="water"></div>
            <div class="main__container cotainer">
                <h1 class="main__title">
                    <span class="main__title__span">Мужской</span>
                    <span class="main__title__span main__title__effect--1 main__title__effect">
                        БАР-SPA
                        <span class="main__title__effect main__title__effect--2">БАР-SPA</span>
                        <span class="main__title__effect main__title__effect--3">БАР-SPA</span>
                    </span>
                    <span class="main__title__span">в центре Самары</span>
                </h1>
                <p class="main__text">В твоих руках неограниченная власть — распоряжайся ею правильно. Мы будем полностью в твоем распоряжении.</p>
                <p class="main__text--bottom">Только отдай приказ</p>
                <button class="button main__button index__button" data-modal>Подробнее</button>
            </div>
            <a href="#next" class="main__inner">
                <p class="main__inner__text">войти внутрь</p>
                <img src="img/index/arrow.png" alt="arow">
            </a>
        </section>
        <!-- /.section main -->

        <section id="next" class="section prog">
            <div class="container">
                <h3 class="section__title prog__title">Вы ищите, где расслабиться после трудного дня в Самаре?</h3>
                <p class="prog__subtitle">Студия «Эмбарго» - это нежный и расслабляющий отдых в Самаре. Подарите себе незабываемый день в студии, куда точно захочется вернуться.</p>
                <p class="section__text prog__text">Мы предложим тебе на выбор 10 качественных spa-программ. Обратите внимание на программу «Бурлеск» с пенным джакузи и продолжительностью 120 минут, а также на «Инфинити», где ты сам можешь составить себе индивидуальную программу.</p>
            </div>
            <div class="prog__wrap">
                <a href="./services.html" class="button prog__button index__button">Все программы</a>
            </div>
        </section>
        <!-- /.section prog -->

        <section class="section master">
            <div class="container">
                <h3 class="section__title master__title">Наши мастера</h3>
                <p class="section__text master__text">Все мастера студии уникальные, прошедшие отбор на изумительную красоту, где каждая девушка имеет свой стиль и свою изюминку, посмотрите анкеты и узнайте больше о наших мастерах.</p>
                <div class="master__wrap">
                    <a href="./questionnaires.html" class="button master__button index__button">Посмотреть анкеты</a>
                </div>
            </div>
        </section>
        <!-- /.section master -->


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

    <div class="modal-success modal-success--age">
        <div class="modal-success__dialog modal-success__dialog--age">
            <p class="modal-success__close modal-success__close--age">&#10006;</p>
            <p class="modal-success__text">Для посещения сайта <br> Вам должно быть более 21 года.</p>
        </div>
    </div>
    <!-- /.modal-success -->

    <a href="tel:+78463794114" class="phone">
        <img src="./img/logo/phone.png" alt="phone">
    </a>

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

{{--@push('scripts')--}}
{{--    <script src="{{ mix('js/main.js') }}" defer></script>--}}
{{--@endpush--}}
