@extends('layouts.app')

@section('title')
    Акции
@endsection

@section('content')
<main>

    <section class="section stocks">
        <div class="stocks__container container">
            <h3 class="section__title stocks__title">Акции spa-салона</h3>
            <div class="stocks__box">

                <div class="stocks__card">
                    <div class="stocks__card__box">
                        <p class="stocks__card__title">Будь первым!</p>
                        <p class="stocks__card__text">Скидка 25% на первое посещение</p>
                    </div>
                    <button data-modal class="button stocks__button">Записаться</button>
                </div>

                <div class="stocks__card">
                    <div class="stocks__card__box stocks__card__box--2">
                        <p class="stocks__card__title">Лучшие друзья</p>
                        <p class="stocks__card__text">Прийди в салон с друзьями, получи скидку 20% на общий чек</p>
                    </div>
                    <button data-modal class="button stocks__button">Записаться</button>
                </div>

                <div class="stocks__card">
                    <div class="stocks__card__box stocks__card__box--3">
                        <p class="stocks__card__title">Vip - такси</p>
                        <p class="stocks__card__text">При заказе любой программы, за тобой приезжает дорогой автомобиль, в салоне которого будет ожидать соблазнительный водитель</p>
                    </div>
                    <button data-modal class="button stocks__button">Записаться</button>
                </div>

                <div class="stocks__card">
                    <div class="stocks__card__box stocks__card__box--4">
                        <p class="stocks__card__title">Именинник?</p>
                        <p class="stocks__card__text">Скидка равна возрасту! Действует на все программы от 6000 руб. 7 дней до и 7 дней после дня рождения</p>
                    </div>
                    <button data-modal class="button stocks__button">Записаться</button>
                </div>

                <div class="stocks__card">
                    <div class="stocks__card__box stocks__card__box--5">
                        <p class="stocks__card__title">Дым</p>
                        <p class="stocks__card__text">Приятный бонус за ожидание более 15 минут</p>
                    </div>
                    <button data-modal class="button stocks__button">Получить скидку</button>
                </div>

                <div class="stocks__card">
                    <div class="stocks__card__box stocks__card__box--6">
                        <p class="stocks__card__title">Каждый вторник</p>
                        <p class="stocks__card__text">Скидка - эксклюзив 30%</p>
                    </div>
                    <button data-modal class="button stocks__button">Прийти</button>
                </div>

            </div>
                <div class="stocks__card stocks__card--last">
                    <div class="stocks__card__box stocks__card__box--6">
                        <p class="stocks__card__title">Каждый вторник</p>
                        <p class="stocks__card__text">Скидка - эксклюзив 30%</p>
                    </div>
                    <button data-modal class="button stocks__button">Получить скидку</button>
                </div>
            <div class="stocks__wrap">
                <p class="stocks__text">Мы работаем для Вас, предоставляя обслуживание на высшем уровне.</p>
                <p class="stocks__text">Салон не оказывает услуг интимного характера. Посещая наш салон вы соглашаетесь с правилами нашего заведения.</p>
            </div>
        </div>
    </section>
    <!-- /.section stocks -->

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