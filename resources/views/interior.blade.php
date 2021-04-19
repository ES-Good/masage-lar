@extends('layouts.app')

@section('title')
    Интерьер
@endsection

@section('content')
<main>

    <section class="section interior">
        <div class="container">
            <h3 class="interior__title section__title">Наш интерьер</h3>
            <p class="section__text interior__text">Легкая музыка, приглушенный свет, тонкий аромат благовоний, изысканное постельное белье, а рядом с вами красивая и нежная девушка – разве не о такой атмосфере мечтает любой мужчина?</p>
            <div class="interior__box">
                <div class="interior__img"><img src="img/interior/img.jpg" alt="interior"></div>
                <div class="interior__img"><img src="img/interior/img1.jpg" alt="interior"></div>
                <div class="interior__img"><img src="img/interior/img2.jpg" alt="interior"></div>
                <div class="interior__img"><img src="img/interior/img3.jpg" alt="interior"></div>
            </div>
        </div>
    </section>
    <!-- /.section interior -->

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