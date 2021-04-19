@extends('layouts.app')

@section('title')
    Мастера
@endsection

@section('content')
<main>

    <section class="section questMain">
        <div class="container questMain__container">
            <h3 class="section__title questMain__title">Наши мастера</h3>
            <p class="section__text questMain__text">Чуткие мастера с нежными руками развеют будничную скуку, а также подарят эмоциональную и физическую разрядку. По-настоящему жаркая, раскованная девушка готова воплотить все твои фантазии</p>
        </div>
        <a href="#next" class="questMain__arrow">
            <img class="questMain__arrow--1" src="img/quest/logo/arrow.png" alt="arrow">
            <img class="questMain__arrow--2" src="img/quest/logo/arrow1.png" alt="arrow">
        </a>
    </section>
    <!-- /.section questMain -->

    <section id="next" class="section questSl questSl--1">
        <div class="container">
            <div class="questSl__row row">
                <div class="questSl__box-wrap">
                    <div class="questSl__box--left">
                        <div class="questSl__arrow__prev questSl__arrow__prev--1 questSl__arrow">
                            <img src="img/quest/prev.png" alt="prev">
                            <img src="img/quest/prevMobile.png" alt="prev">
                        </div>
                        <div class="questSl__arrow__next questSl__arrow__next--1 questSl__arrow">
                            <img src="img/quest/next.png" alt="next">
                            <img src="img/quest/nextMobile.png" alt="next">
                        </div>
                        <div class="questSl__cube questSl__cube--1 questSl__cube--big">
                            <div class="questSl__img"><img src="img/quest/questGirl/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--2--big"><img src="img/quest/questGirl/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--3--big"><img src="img/quest/questGirl/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--4--big"><img src="img/quest/questGirl/photo.jpg" alt="photo"></div>
                        </div>
                    </div>
                </div>

                <div class="questSl__box--right">
                    <p class="questSl__name">Агния</p>

                    <div class="db">
                        <img class="questSl__src questSl__src--1" src="img/quest/questGirl/photo.jpg" alt="girl">
                        <img class="questSl__src questSl__src--1" src="img/quest/questGirl/photo1.jpg" alt="girl">
                        <img class="questSl__src questSl__src--1" src="img/quest/questGirl/photo2.jpg" alt="girl">
                    </div>

                    <div class="questSl__text">Жаркая блондинка. Её умения сразят самого искушённого, докажет, что «это лучше чем, секс».</div>
                    <div class="questSl__param row">
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">27</p>
                            <p class="questSl__param__text">Возраст</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">169</p>
                            <p class="questSl__param__text">Рост</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">55</p>
                            <p class="questSl__param__text">Вес</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">3</p>
                            <p class="questSl__param__text">Грудь</p>
                        </div>
                    </div>

                    <div class="questSl__row--wrap row">
                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--1 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl/photo1.jpg" alt="photo"></div>
                            </div>
                        </div>

                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--1 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl/photo2.jpg" alt="photo"></div>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="questSl__form">
                        <div class="questSl__row--form row">
                            <div class="questSl__input-group">
                                <input name="questSlInput" class="questSl__input" placeholder="+7 (___) ___-__-__" type="tel">
                                <span class="modal__input__invalid questSl__input__invalid">Заполните поле</span>
                            </div>
                            <button class="button questSl__button">Записаться</button>
                        </div>
                        <label for="questSlCheck--1" class="questSl__label">
                            Ваш телефон необходим только для связи с Вами. <br> Он ни в коем случае не будет передан третьим лицам.
                            <input name="questSlCheck--1" id="questSlCheck--1" checked type="checkbox" class="questSl__check">
                            <span class="questSl__ok"></span>
                            <span class="modal__check__invalid">Согласитесь с обработкой данных</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.secion questSl questSl--1 -->

    <section class="section questSl questSl--2">
        <div class="container">
            <div class="questSl__row row">
                <div class="questSl__box-wrap">
                    <div class="questSl__box--left">
                        <div class="questSl__arrow__prev questSl__arrow__prev--2 questSl__arrow">
                            <img src="img/quest/prev.png" alt="prev">
                            <img src="img/quest/prevMobile.png" alt="prev">
                        </div>
                        <div class="questSl__arrow__next questSl__arrow__next--2 questSl__arrow">
                            <img src="img/quest/next.png" alt="next">
                            <img src="img/quest/nextMobile.png" alt="next">
                        </div>
                        <div class="questSl__cube questSl__cube--2 questSl__cube--big">
                            <div class="questSl__img"><img src="img/quest/questGirl1/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--2--big"><img src="img/quest/questGirl1/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--3--big"><img src="img/quest/questGirl1/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--4--big"><img src="img/quest/questGirl1/photo.jpg" alt="photo"></div>
                        </div>
                    </div>
                </div>

                <div class="questSl__box--right">
                    <p class="questSl__name">Алсу</p>

                    <div class="db">
                        <img class="questSl__src questSl__src--2" src="img/quest/questGirl1/photo.jpg" alt="girl">
                        <img class="questSl__src questSl__src--2" src="img/quest/questGirl1/photo1.jpg" alt="girl">
                        <img class="questSl__src questSl__src--2" src="img/quest/questGirl1/photo2.jpg" alt="girl">
                    </div>

                    <div class="questSl__text">Самая раскрепощённая, яркая и эксцентричная девушка с восточной внешностью.</div>
                    <div class="questSl__param row">
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">24</p>
                            <p class="questSl__param__text">Возраст</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">180</p>
                            <p class="questSl__param__text">Рост</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">56</p>
                            <p class="questSl__param__text">Вес</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">1</p>
                            <p class="questSl__param__text">Грудь</p>
                        </div>
                    </div>

                    <div class="questSl__row--wrap row">
                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--2 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl1/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl1/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl1/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl1/photo1.jpg" alt="photo"></div>
                            </div>
                        </div>

                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--2 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl1/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl1/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl1/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl1/photo2.jpg" alt="photo"></div>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="questSl__form">
                        <div class="questSl__row--form row">
                            <div class="questSl__input-group">
                                <input name="questSlInput" class="questSl__input" placeholder="+7 (___) ___-__-__" type="tel">
                                <span class="modal__input__invalid questSl__input__invalid">Заполните поле</span>
                            </div>
                            <button class="button questSl__button">Записаться</button>
                        </div>
                        <label for="questSlCheck--2" class="questSl__label">
                            Ваш телефон необходим только для связи с Вами. <br> Он ни в коем случае не будет передан третьим лицам.
                            <input name="questSlCheck--2" id="questSlCheck--2" checked type="checkbox" class="questSl__check">
                            <span class="questSl__ok"></span>
                            <span class="modal__check__invalid">Согласитесь с обработкой данных</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.secion questSl questSl--2 -->

    <section class="section questSl questSl--3">
        <div class="container">
            <div class="questSl__row row">
                <div class="questSl__box-wrap">
                    <div class="questSl__box--left">
                        <div class="questSl__arrow__prev questSl__arrow__prev--3 questSl__arrow">
                            <img src="img/quest/prev.png" alt="prev">
                            <img src="img/quest/prevMobile.png" alt="prev">
                        </div>
                        <div class="questSl__arrow__next questSl__arrow__next--3 questSl__arrow">
                            <img src="img/quest/next.png" alt="next">
                            <img src="img/quest/nextMobile.png" alt="next">
                        </div>
                        <div class="questSl__cube questSl__cube--3 questSl__cube--big">
                            <div class="questSl__img"><img src="img/quest/questGirl2/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--2--big"><img src="img/quest/questGirl2/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--3--big"><img src="img/quest/questGirl2/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--4--big"><img src="img/quest/questGirl2/photo.jpg" alt="photo"></div>
                        </div>
                    </div>
                </div>

                <div class="questSl__box--right">
                    <p class="questSl__name">Аня</p>

                    <div class="db">
                        <img class="questSl__src questSl__src--3" src="img/quest/questGirl2/photo.jpg" alt="girl">
                        <img class="questSl__src questSl__src--3" src="img/quest/questGirl2/photo1.jpg" alt="girl">
                        <img class="questSl__src questSl__src--3" src="img/quest/questGirl2/photo2.jpg" alt="girl">
                    </div>

                    <div class="questSl__text">Чувственная и нежная, ее руки будут для тебя самыми родными.</div>
                    <div class="questSl__param row">
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">20</p>
                            <p class="questSl__param__text">Возраст</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">168</p>
                            <p class="questSl__param__text">Рост</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">58</p>
                            <p class="questSl__param__text">Вес</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">2</p>
                            <p class="questSl__param__text">Грудь</p>
                        </div>
                    </div>

                    <div class="questSl__row--wrap row">
                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--3 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl2/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl2/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl2/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl2/photo1.jpg" alt="photo"></div>
                            </div>
                        </div>

                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--3 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl2/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl2/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl2/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl2/photo2.jpg" alt="photo"></div>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="questSl__form">
                        <div class="questSl__row--form row">
                            <div class="questSl__input-group">
                                <input name="questSlInput" class="questSl__input" placeholder="+7 (___) ___-__-__" type="tel">
                                <span class="modal__input__invalid questSl__input__invalid">Заполните поле</span>
                            </div>
                            <button class="button questSl__button">Записаться</button>
                        </div>
                        <label for="questSlCheck--3" class="questSl__label">
                            Ваш телефон необходим только для связи с Вами. <br> Он ни в коем случае не будет передан третьим лицам.
                            <input name="questSlCheck--3" id="questSlCheck--3" checked type="checkbox" class="questSl__check">
                            <span class="questSl__ok"></span>
                            <span class="modal__check__invalid">Согласитесь с обработкой данных</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.secion questSl questSl--3 -->

    <section class="section questSl questSl--4">
        <div class="container">
            <div class="questSl__row row">
                <div class="questSl__box-wrap">
                    <div class="questSl__box--left">
                        <div class="questSl__arrow__prev questSl__arrow__prev--4 questSl__arrow">
                            <img src="img/quest/prev.png" alt="prev">
                            <img src="img/quest/prevMobile.png" alt="prev">
                        </div>
                        <div class="questSl__arrow__next questSl__arrow__next--4 questSl__arrow">
                            <img src="img/quest/next.png" alt="next">
                            <img src="img/quest/nextMobile.png" alt="next">
                        </div>
                        <div class="questSl__cube questSl__cube--4 questSl__cube--big">
                            <div class="questSl__img"><img src="img/quest/questGirl3/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--2--big"><img src="img/quest/questGirl3/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--3--big"><img src="img/quest/questGirl3/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--4--big"><img src="img/quest/questGirl3/photo.jpg" alt="photo"></div>
                        </div>
                    </div>
                </div>

                <div class="questSl__box--right">
                    <p class="questSl__name">Софа</p>

                    <div class="db">
                        <img class="questSl__src questSl__src--4" src="img/quest/questGirl3/photo.jpg" alt="girl">
                        <img class="questSl__src questSl__src--4" src="img/quest/questGirl3/photo1.jpg" alt="girl">
                        <img class="questSl__src questSl__src--4" src="img/quest/questGirl3/photo2.jpg" alt="girl">
                    </div>

                    <div class="questSl__text">Ангел во плоти, веселая и любящая риск.</div>
                    <div class="questSl__param row">
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">22</p>
                            <p class="questSl__param__text">Возраст</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">175</p>
                            <p class="questSl__param__text">Рост</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">60</p>
                            <p class="questSl__param__text">Вес</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">1</p>
                            <p class="questSl__param__text">Грудь</p>
                        </div>
                    </div>

                    <div class="questSl__row--wrap row">
                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--4 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl3/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl3/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl3/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl3/photo1.jpg" alt="photo"></div>
                            </div>
                        </div>

                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--4 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl3/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl3/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl3/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl3/photo2.jpg" alt="photo"></div>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="questSl__form">
                        <div class="questSl__row--form row">
                            <div class="questSl__input-group">
                                <input name="questSlInput" class="questSl__input" placeholder="+7 (___) ___-__-__" type="tel">
                                <span class="modal__input__invalid questSl__input__invalid">Заполните поле</span>
                            </div>
                            <button class="button questSl__button">Записаться</button>
                        </div>
                        <label for="questSlCheck--4" class="questSl__label">
                            Ваш телефон необходим только для связи с Вами. <br> Он ни в коем случае не будет передан третьим лицам.
                            <input name="questSlCheck--4" id="questSlCheck--4" checked type="checkbox" class="questSl__check">
                            <span class="questSl__ok"></span>
                            <span class="modal__check__invalid">Согласитесь с обработкой данных</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.secion questSl questSl--4 -->

    <section class="section questSl questSl--5">
        <div class="container">
            <div class="questSl__row row">
                <div class="questSl__box-wrap">
                    <div class="questSl__box--left">
                        <div class="questSl__arrow__prev questSl__arrow__prev--5 questSl__arrow">
                            <img src="img/quest/prev.png" alt="prev">
                            <img src="img/quest/prevMobile.png" alt="prev">
                        </div>
                        <div class="questSl__arrow__next questSl__arrow__next--5 questSl__arrow">
                            <img src="img/quest/next.png" alt="next">
                            <img src="img/quest/nextMobile.png" alt="next">
                        </div>
                        <div class="questSl__cube questSl__cube--5 questSl__cube--big">
                            <div class="questSl__img"><img src="img/quest/questGirl4/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--2--big"><img src="img/quest/questGirl4/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--3--big"><img src="img/quest/questGirl4/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--4--big"><img src="img/quest/questGirl4/photo.jpg" alt="photo"></div>
                        </div>
                    </div>
                </div>

                <div class="questSl__box--right">
                    <p class="questSl__name">Ника</p>

                    <div class="db">
                        <img class="questSl__src questSl__src--5" src="img/quest/questGirl4/photo.jpg" alt="girl">
                        <img class="questSl__src questSl__src--5" src="img/quest/questGirl4/photo1.jpg" alt="girl">
                        <img class="questSl__src questSl__src--5" src="img/quest/questGirl4/photo2.jpg" alt="girl">
                    </div>

                    <div class="questSl__text">Скромная и тихая, но не наедине,ты захочешь вернуться к ней снова.</div>
                    <div class="questSl__param row">
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">19</p>
                            <p class="questSl__param__text">Возраст</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">170</p>
                            <p class="questSl__param__text">Рост</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">60</p>
                            <p class="questSl__param__text">Вес</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">2</p>
                            <p class="questSl__param__text">Грудь</p>
                        </div>
                    </div>

                    <div class="questSl__row--wrap row">
                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--5 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl4/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl4/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl4/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl4/photo1.jpg" alt="photo"></div>
                            </div>
                        </div>

                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--5 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl4/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl4/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl4/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl4/photo2.jpg" alt="photo"></div>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="questSl__form">
                        <div class="questSl__row--form row">
                            <div class="questSl__input-group">
                                <input name="questSlInput" class="questSl__input" placeholder="+7 (___) ___-__-__" type="tel">
                                <span class="modal__input__invalid questSl__input__invalid">Заполните поле</span>
                            </div>
                            <button class="button questSl__button">Записаться</button>
                        </div>
                        <label for="questSlCheck--5" class="questSl__label">
                            Ваш телефон необходим только для связи с Вами. <br> Он ни в коем случае не будет передан третьим лицам.
                            <input name="questSlCheck--5" id="questSlCheck--5" checked type="checkbox" class="questSl__check">
                            <span class="questSl__ok"></span>
                            <span class="modal__check__invalid">Согласитесь с обработкой данных</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.secion questSl questSl--5 -->

    <section class="section questSl questSl--6">
        <div class="container">
            <div class="questSl__row row">
                <div class="questSl__box-wrap">
                    <div class="questSl__box--left">
                        <div class="questSl__arrow__prev questSl__arrow__prev--6 questSl__arrow">
                            <img src="img/quest/prev.png" alt="prev">
                            <img src="img/quest/prevMobile.png" alt="prev">
                        </div>
                        <div class="questSl__arrow__next questSl__arrow__next--6 questSl__arrow">
                            <img src="img/quest/next.png" alt="next">
                            <img src="img/quest/nextMobile.png" alt="next">
                        </div>
                        <div class="questSl__cube questSl__cube--6 questSl__cube--big">
                            <div class="questSl__img"><img src="img/quest/questGirl5/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--2--big"><img src="img/quest/questGirl5/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--3--big"><img src="img/quest/questGirl5/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--4--big"><img src="img/quest/questGirl5/photo.jpg" alt="photo"></div>
                        </div>
                    </div>
                </div>

                <div class="questSl__box--right">
                    <p class="questSl__name">Саша</p>

                    <div class="db">
                        <img class="questSl__src questSl__src--6" src="img/quest/questGirl5/photo.jpg" alt="girl">
                        <img class="questSl__src questSl__src--6" src="img/quest/questGirl5/photo1.jpg" alt="girl">
                        <img class="questSl__src questSl__src--6" src="img/quest/questGirl5/photo2.jpg" alt="girl">
                    </div>

                    <div class="questSl__text">Твоя госпожа, властная и требовательная, не смотря на миловидность.</div>
                    <div class="questSl__param row">
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">23</p>
                            <p class="questSl__param__text">Возраст</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">175</p>
                            <p class="questSl__param__text">Рост</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">60</p>
                            <p class="questSl__param__text">Вес</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">3</p>
                            <p class="questSl__param__text">Грудь</p>
                        </div>
                    </div>

                    <div class="questSl__row--wrap row">
                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--6 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl5/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl5/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl5/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl5/photo1.jpg" alt="photo"></div>
                            </div>
                        </div>

                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--6 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl5/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl5/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl5/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl5/photo2.jpg" alt="photo"></div>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="questSl__form">
                        <div class="questSl__row--form row">
                            <div class="questSl__input-group">
                                <input name="questSlInput" class="questSl__input" placeholder="+7 (___) ___-__-__" type="tel">
                                <span class="modal__input__invalid questSl__input__invalid">Заполните поле</span>
                            </div>
                            <button class="button questSl__button">Записаться</button>
                        </div>
                        <label for="questSlCheck--6" class="questSl__label">
                            Ваш телефон необходим только для связи с Вами. <br> Он ни в коем случае не будет передан третьим лицам.
                            <input name="questSlCheck--6" id="questSlCheck--6" checked type="checkbox" class="questSl__check">
                            <span class="questSl__ok"></span>
                            <span class="modal__check__invalid">Согласитесь с обработкой данных</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.secion questSl questSl--6 -->

    <section class="section questSl questSl--7">
        <div class="container">
            <div class="questSl__row row">
                <div class="questSl__box-wrap">
                    <div class="questSl__box--left">
                        <div class="questSl__arrow__prev questSl__arrow__prev--7 questSl__arrow">
                            <img src="img/quest/prev.png" alt="prev">
                            <img src="img/quest/prevMobile.png" alt="prev">
                        </div>
                        <div class="questSl__arrow__next questSl__arrow__next--7 questSl__arrow">
                            <img src="img/quest/next.png" alt="next">
                            <img src="img/quest/nextMobile.png" alt="next">
                        </div>
                        <div class="questSl__cube questSl__cube--7 questSl__cube--big">
                            <div class="questSl__img"><img src="img/quest/questGirl6/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--2--big"><img src="img/quest/questGirl6/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--3--big"><img src="img/quest/questGirl6/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--4--big"><img src="img/quest/questGirl6/photo.jpg" alt="photo"></div>
                        </div>
                    </div>
                </div>

                <div class="questSl__box--right">
                    <p class="questSl__name">Ева</p>

                    <div class="db">
                        <img class="questSl__src questSl__src--7" src="img/quest/questGirl6/photo.jpg" alt="girl">
                        <img class="questSl__src questSl__src--7" src="img/quest/questGirl6/photo1.jpg" alt="girl">
                        <img class="questSl__src questSl__src--7" src="img/quest/questGirl6/photo2.jpg" alt="girl">
                    </div>

                    <div class="questSl__text">Стервозная и неподвластная, любит индивидуальные подходы к каждому.</div>
                    <div class="questSl__param row">
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">25</p>
                            <p class="questSl__param__text">Возраст</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">158</p>
                            <p class="questSl__param__text">Рост</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">50</p>
                            <p class="questSl__param__text">Вес</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">2</p>
                            <p class="questSl__param__text">Грудь</p>
                        </div>
                    </div>

                    <div class="questSl__row--wrap row">
                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--7 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl6/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl6/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl6/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl6/photo1.jpg" alt="photo"></div>
                            </div>
                        </div>

                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--7 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl6/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl6/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl6/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl6/photo2.jpg" alt="photo"></div>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="questSl__form">
                        <div class="questSl__row--form row">
                            <div class="questSl__input-group">
                                <input name="questSlInput" class="questSl__input" placeholder="+7 (___) ___-__-__" type="tel">
                                <span class="modal__input__invalid questSl__input__invalid">Заполните поле</span>
                            </div>
                            <button class="button questSl__button">Записаться</button>
                        </div>
                        <label for="questSlCheck--7" class="questSl__label">
                            Ваш телефон необходим только для связи с Вами. <br> Он ни в коем случае не будет передан третьим лицам.
                            <input name="questSlCheck--7" id="questSlCheck--7" checked type="checkbox" class="questSl__check">
                            <span class="questSl__ok"></span>
                            <span class="modal__check__invalid">Согласитесь с обработкой данных</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.secion questSl questSl--7 -->

    <section class="section questSl questSl--8">
        <div class="container">
            <div class="questSl__row row">
                <div class="questSl__box-wrap">
                    <div class="questSl__box--left">
                        <div class="questSl__arrow__prev questSl__arrow__prev--8 questSl__arrow">
                            <img src="img/quest/prev.png" alt="prev">
                            <img src="img/quest/prevMobile.png" alt="prev">
                        </div>
                        <div class="questSl__arrow__next questSl__arrow__next--8 questSl__arrow">
                            <img src="img/quest/next.png" alt="next">
                            <img src="img/quest/nextMobile.png" alt="next">
                        </div>
                        <div class="questSl__cube questSl__cube--8 questSl__cube--big">
                            <div class="questSl__img"><img src="img/quest/questGirl7/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--2--big"><img src="img/quest/questGirl7/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--3--big"><img src="img/quest/questGirl7/photo.jpg" alt="photo"></div>
                            <div class="questSl__img questSl__img--4--big"><img src="img/quest/questGirl7/photo.jpg" alt="photo"></div>
                        </div>
                    </div>
                </div>

                <div class="questSl__box--right">
                    <p class="questSl__name">Лера</p>

                    <div class="db">
                        <img class="questSl__src questSl__src--8" src="img/quest/questGirl7/photo.jpg" alt="girl">
                        <img class="questSl__src questSl__src--8" src="img/quest/questGirl7/photo1.jpg" alt="girl">
                        <img class="questSl__src questSl__src--8" src="img/quest/questGirl7/photo2.jpg" alt="girl">
                    </div>

                    <div class="questSl__text">Воплощение юной любви, с восхищением и блеском в глазах, готовая ради тебя на все.</div>
                    <div class="questSl__param row">
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">20</p>
                            <p class="questSl__param__text">Возраст</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">170</p>
                            <p class="questSl__param__text">Рост</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">52</p>
                            <p class="questSl__param__text">Вес</p>
                        </div>
                        <div class="questSl__param__item">
                            <p class="questSl__param__dig">3</p>
                            <p class="questSl__param__text">Грудь</p>
                        </div>
                    </div>

                    <div class="questSl__row--wrap row">
                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--8 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl7/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl7/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl7/photo1.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl7/photo1.jpg" alt="photo"></div>
                            </div>
                        </div>

                        <div class="questSl__wrap">
                            <div class="questSl__cube questSl__cube--8 questSl__cube--small">
                                <div class="questSl__img"><img src="img/quest/questGirl7/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--2--small"><img src="img/quest/questGirl7/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--3--small"><img src="img/quest/questGirl7/photo2.jpg" alt="photo"></div>
                                <div class="questSl__img questSl__img--4--small"><img src="img/quest/questGirl7/photo2.jpg" alt="photo"></div>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="questSl__form">
                        <div class="questSl__row--form row">
                            <div class="questSl__input-group">
                                <input name="questSlInput" class="questSl__input" placeholder="+7 (___) ___-__-__" type="tel">
                                <span class="modal__input__invalid questSl__input__invalid">Заполните поле</span>
                            </div>
                            <button class="button questSl__button">Записаться</button>
                        </div>
                        <label for="questSlCheck--8" class="questSl__label">
                            Ваш телефон необходим только для связи с Вами. <br> Он ни в коем случае не будет передан третьим лицам.
                            <input name="questSlCheck--8" id="questSlCheck--8" checked type="checkbox" class="questSl__check">
                            <span class="questSl__ok"></span>
                            <span class="modal__check__invalid">Согласитесь с обработкой данных</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.secion questSl questSl--8 -->

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
@endsection