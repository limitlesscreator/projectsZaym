<?php
$phone = '8 (961) 331-39-44';
$tel = preg_replace(['/\D/', '/^[78]/'], ['', '+7'], $phone);
?>
<?php include_once __DIR__ . '/multi-regionality.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="yandex-verification" content="71149ceae4e3a8a8"/>
    <title>Кредит под залог ПТС <?= $in_city ?></title>
    <meta name="description" content="Автоломбард под залог ПТС   <?= $in_city ?>"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <meta property="og:type" content="website/">
    <meta property="og:url" content=""/>
    <meta property="og:locale" content="ru"/>
    <link rel="stylesheet" href="css-web/common.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Roboto+Condensed:wght@300;400;700&display=swap"
          rel="stylesheet">
    <link rel="shortcut icon" href="images/icon/favicon.png"/>
</head>

<body>

<a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>

<div title="взять кредит в залог автомобиля" class="bgImageAvto">

    <header class="header header-transparent ">
        <div class="header-top">
            <div class="container">
                <div class="inner-header">
                    <a class="inner-brand" href="/">
                        <img class="img-logo-top-onWhite " style="margin-top: -88px" src="images/bg/moskovBg.png"
                             alt="logo">
                    </a>
                </div>

                <div class="inner-navigation visible-on-wade">
                    <div class="inner-nav">
                        <div class="inner-block">
                            <div class="city-wrapper city-wrapper-main">
                                <div class="city-text">Выбрать регион</div>
                            </div>
                            <div class="header-phone"><a  href="tel:<?= $tel ?>"><?= $phone ?></a><br/></div>

                            <button type="button" class="btn btn-line-red" data-toggle="modal"
                                    data-target="#CallPhone-ver-2">
                                Обратный звонок
                            </button>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#CallPhone-ver-4">Оформить займ
                            </button>
                        </div>
                    </div>
                </div>
                <div class="extra-nav">
                    <ul>
                        <li class="icon-phone"><a href="tel:<?= $tel ?>"><span class="icon-item-span"></span></a></li>
                        <li>
                            <a class="off-canvas-open" href="#"><span></span><span class="menu-item-span"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="offer-bg-incline bg-2">
                            <div class="z-Index">
                                <h1 class="h1 padding-leftOnPc3">Займ под ПТС грузовых
                                                                       авто <?= $in_city ?></h1>

                                <div class="row">
                                    <div class="col-md-12 padding-leftOnPc">
                                        <div class="row">
                                            <div class="col-md-4 introduction" style="margin-bottom: 3px">
                                                <div class="introduction-image">
                                                    <img style="width: 44px; margin-bottom: 4px"
                                                         alt="procent  zalog pod pts"
                                                         src="images/forProject27/percentage.png">
                                                </div>
                                                Ставка <span>от 2% в мес.</span>
                                            </div>
                                            <div class="col-md-4 introduction">
                                                <div class="introduction-image">
                                                    <img style="width: 48px" alt="money  zalog pod pts"
                                                         src="images/forProject27/money.png">
                                                </div>
                                                Сумма <span>от 50 000 руб.</span>
                                            </div>
                                            <div class="col-md-4 introduction">
                                                <div class="introduction-image">
                                                    <img style="width: 48px" alt="calendar  zalog pod pts"
                                                         src="images/forProject27/calendar.png">
                                                </div>
                                                Срок займа <span>до 60 мес.</span>
                                            </div>
                                            <div class="col-md-4 introduction">
                                                <div class="introduction-image">
                                                    <img style="width: 48px" alt=" zalog pod pts"
                                                         src="images/forProject27/paper.png">
                                                </div>
                                                Без кредитной истории
                                            </div>
                                            <div class="col-md-4 introduction">
                                                <div class="introduction-image">
                                                    <img style="width: 48px" alt=" zalog pod pts"
                                                         src="images/forProject27/commission.png">
                                                </div>
                                                Без комиссий
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-danger magrin-leftButton" data-toggle="modal"
                                        data-target="#CallPhone-ver-4">Оформить заявку
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section id="calculate-3-2-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h1">
                        <span class="h1-span">Калькулятор займа</span>
                    </h3>
                </div>

                <div id="calculator" class="col-md-12">
                    <form action="thanks.php" method="POST">

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="calculate-item">
                                    <h6>Необходимая сумма</h6>
                                    <div class="calculate-steps">
                                        <div class="">
                                            <span class="amount-value" id="amount-thousands"></span>
                                            <span>₽</span>

                                        </div>
                                    </div>
                                    <div class="calculate-steps">
                                        <div class="steps-left for-thousands">30</div>
                                        <div class="steps-right for-thousands">3000</div>
                                    </div>
                                    <div id="slider-range-thousands">
                                        <span id="current-thousands">1000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="calculate-item">
                                    <h6>Срок займа</h6>
                                    <div class="calculate-steps">
                                        <div class="">
                                            <span class="amount-value" id="amount-months"></span>
                                            <span>мес.</span>
                                        </div>
                                    </div>
                                    <div class="calculate-steps">
                                        <div class="steps-left">2</div>
                                        <div class="steps-right">60</div>
                                    </div>
                                    <div id="slider-range-months"></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="result-container">
                                    <h6>Ежемесячный платеж</h6>
                                    <input id="revenue" type="text"
                                           class="form-control calculate-bottom-text-prices revenue" name="revenue"
                                           value="">
                                </div>
                            </div>
                            <div class="col-md-12 m-t-30">
                                <h3>Контактные данные клиента</h3>

                                <input type="hidden" name="_token" value=>
                                <input type="hidden" value="" name=>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcName">Ваше имя</label>
                                            <span class="error"></span>
                                            <input id="CalcName" required type="text" class="form-control" name="name"
                                                   placeholder="Как Вас зовут">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcNumber">Телефон</label>
                                            <span class="error"></span>
                                            <input type="text" required class="form-control type-phone" id="CalcNumber"
                                                   name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcNumber">Где Вы живёте</label>
                                            <span class="error"></span>
                                            <input type="text" required class="form-control type-phone" id="CalcNumber"
                                                   name="phone" placeholder="Местонахождение">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="calc-bottom">
                                                <button type="submit" class="btn btn-danger">Подать заявку</button>
                                            </div>
                                        </div>

                                        <div class="personal-data calc-bottom">Нажимая на кнопку, вы даёте своё согласие
                                            на
                                            обработку ваших <a target="_blank" href="privacy-policy.pdf">персональных
                                                данных</a>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
    <section id=products-3>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class=h1><span class="h1-span">Принимаем в залог любые </span>грузовики</h3>
                    <div class="visible-on-wade visible-on-tablet">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-template-bg">
                                    <div title="взять кредит в залог автомобиля" class="element-img grey" style="background-image: url(images/product/gazel3.jpg);"></div>
                                    <div class="element-title">Газели</div>
                                    <div class="element-text">грузовые, пассажирские</div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-template-bg">
                                    <div title="кредит под залог грузового автомобиля в банке" class="element-img grey" style="background-image: url(images/product/truck2.jpg);"></div>
                                    <div class="element-title">Грузовые авто</div>
                                    <div class="element-text">Газели, тягачи, фуры</div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-template-bg">
                                    <div title="кредит под залог птс спецтехники москва" class="element-img grey" style="background-image: url(images/product/tyagach2.jpg);"></div>
                                    <div class="element-title">Тягачи</div>
                                    <div class="element-text">отечественные и импортные</div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-template-bg">
                                    <div title="кредит под залог птс" class="element-img grey" style="background-image: url(images/product/pricep.jpg);"></div>
                                    <div class="element-title">Прицепы</div>
                                    <div class="element-text">Прицепы и полуприцепы</div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="visible-on-mobile">
                        <div class="owl-carousel owl-theme product">
                            <div class="product-template-bg">
                                <div class="element-img grey" style="background-image: url(images/product/gazel3.jpg);"></div>
                                <div class="element-title">Газели</div>
                                <div class="element-text">грузовые, пассажирские</div>

                            </div>

                            <div class="product-template-bg">
                                <div class="element-img grey" style="background-image: url(images/product/truck2.jpg);"></div>
                                <div class="element-title">Грузовые авто</div>
                                <div class="element-text">Газели, тягачи, фуры</div>

                            </div>

                            <div class="product-template-bg">
                                <div class="element-img grey" style="background-image: url(images/product/tyagach2.jpg);"></div>
                                <div class="element-title">Тягачи</div>
                                <div class="element-text">отечественные и импортные</div>

                            </div>

                            <div class="product-template-bg">
                                <div class="element-img grey" style="background-image: url(images/product/pricep.jpg);"></div>
                                <div class="element-title">Прицепы</div>
                                <div class="element-text">Прицепы и полуприцепы</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="advantages-1">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-7 bank">
                <h3 class="h1"><span style="display: inline-block" class="h1-span">Мы лояльнее </span>банков</h3>
            </div>

            <div class="col-xl-9 push-xl-2">
                <div class="visible-on-wade visible-on-tablet">
                    <ul class="get-list style-3">
                        <li>
                            <div class="get-item">
                                <img class="get-item-img" src="images/forProject27/car.png"
                                     alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                                <p class="get-item-title">Автомобиль остается у Вас</p>
                                <p class="get-item-text">После заключения договора, вы без ограничений продолжаете
                                    использовать авто</p>
                            </div>
                        </li>
                        <li>
                            <div class="get-item">
                                <img class="get-item-img" src="images/forProject27/like.png"
                                     alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                                <p class="get-item-title">Кредитная история не имеет значения</p>
                                <p class="get-item-text">Ваши долги не имеют значения, без поручителей и без справок о
                                    доходах</p>
                            </div>
                        </li>
                        <li>
                            <div class="get-item">
                                <img class="get-item-img" src="images/forProject27/documents.png"
                                     alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                                <p class="get-item-title">Требуется всего 3 документа</p>
                                <p class="get-item-text">Для получения займа, вам понадобится только паспорт РФ, ПТС и
                                    СТРС</p>
                            </div>
                        </li>
                        <li>
                            <div class="get-item">
                                <img class="get-item-img" src="images/forProject27/percentage.png"
                                     alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                                <p class="get-item-title">Нет комиссии при досрочном погашении</p>
                                <p class="get-item-text">При досрочном погашении вы не платите никаких дополнительных
                                    процентов</p>
                            </div>
                        </li>
                        <li>
                            <div class="get-item">
                                <img class="get-item-img" src="images/forProject27/note.png"
                                     alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                                <p class="get-item-title">Без записей в ПТС</p>
                                <p class="get-item-text">При заключении договора займа и залога никаких записей в ПТС не
                                    производится</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="visible-on-mobile">
                    <div class="owl-carousel owl-theme advantages-1">
                        <div class="get-item">
                            <img class="get-item-img" src="images/icon/icon_28.png"
                                 alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                            <p class="get-item-title">Автомобиль остается у Вас</p>
                            <p class="get-item-text">После заключения договора, вы без ограничений продолжаете
                                использовать авто</p>
                        </div>
                        <div class="get-item">
                            <img class="get-item-img" src="images/icon/icon_29.png"
                                 alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                            <p class="get-item-title">Кредитная история не имеет значения</p>
                            <p class="get-item-text">Ваши долги не имеют значения, без поручителей и без справок о
                                доходах</p>
                        </div>
                        <div class="get-item">
                            <img class="get-item-img" src="images/icon_2.png"
                                 alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                            <p class="get-item-title">Требуется всего 3 документа</p>
                            <p class="get-item-text">Для получения займа, вам понадобится только паспорт РФ, ПТС и
                                СТРС</p>
                        </div>
                        <div class="get-item">
                            <img class="get-item-img" src="images/icon_1.png"
                                 alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                            <p class="get-item-title">Нет комиссии при досрочном погашении</p>
                            <p class="get-item-text">При досрочном погашении вы не платите никаких дополнительных
                                процентов</p>
                        </div>
                        <div class="get-item">
                            <img class="get-item-img" src="images/icon/icon_30.png"
                                 alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
                            <p class="get-item-title">Без записей в ПТС</p>
                            <p class="get-item-text">При заключении договора займа и залога никаких записей в ПТС не
                                производится</p>
                        </div>
                    </div>
                </div>

                <div class="link-button"><a href="#" data-toggle="modal" data-target="#CallPhone-ver-4">Подать заявку
                    <span class="arrow"></span></a></div>
            </div>
        </div>
        <figure class="get-image"><img src="images/5000.png" alt="Авто займ Под птс для Юр. лиц в Екатеринбурге">
        </figure>
    </div>
</section>
<section id="documents-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 info-index">
                <div>
                    <h3 class="h1">Работаем в рамках закона</h3>
                    <ul class="list-ul">
                        <li>Широкая сеть более 100 регионов присутствия</li>
                        <li>Осуществляем деятельность в рамках ФЗ 353</li>
                        <li>Процентная ставка регулируется ЦБ РФ</li>
                    </ul>
                    <div class="link-button visible-on-tablet visible-on-wade m-b-30">
                        <a href="#">Подать заявку <span class="arrow"></span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="visible-on-wade visible-on-tablet">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 info-index">
                            <div class="text-info-index">
                                <div class="text-info-icon"><img style="width: 60px"
                                                                 src="images/forProject27/gerb.png"
                                                                 alt="Займы под ПТС в Ейске"/>
                                </div>
                                <div class="text-info-title">Соответствуем законодательству РФ</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 info-index">
                            <div>
                                <div class="text-info-index">
                                    <div class="text-info-icon"><img style="width: 60px"
                                                                     src="images/forProject27/years.png"
                                                                     alt="Займы под ПТС в Ейске"/>
                                    </div>
                                    <div class="text-info-title">10 лет успешной работы</div>
                                </div>
                                <div class="text-info-index">
                                    <div class="text-info-icon"><img style="width: 60px"
                                                                     src="images/forProject27/football.png"
                                                                     alt="Займы под ПТС в Ейске"/>
                                    </div>
                                    <div class="text-info-title">Участник лиги автоломбардов</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 visible-on-mobile">
                <div class="owl-carousel owl-theme documents-2">
                    <div class="text-info-index">
                        <div class="text-info-icon"><img style="width: 60px"
                                                         src="images/icon/project23/icon_22.png"
                                                         alt="Займы под ПТС в Ейске"/>
                        </div>
                        <div class="text-info-title">Соответствуем законодательству РФ</div>
                    </div>
                    <div class="text-info-index">
                        <div class="text-info-icon"><img style="width: 60px"
                                                         src="images/icon/project23/guarantee.png"
                                                         alt="Займы под ПТС в Ейске"/>
                        </div>
                        <div class="text-info-title">10 лет успешной работы</div>
                    </div>
                    <div class="text-info-index">
                        <div class="text-info-icon"><img style="width: 60px"
                                                         src="images/icon/project23/up-chevron.png"
                                                         alt="Займы под ПТС в Ейске"/>
                        </div>
                        <div class="text-info-title">Участник лиги автоломбардов</div>
                    </div>
                    <div class="link-button">
                        <a href="#">Подать заявку <span class="arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="requirements-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="image-max-height"
                     style="background-image: url(images/trackVertical.jpg); background-size: cover; background-repeat: no-repeat; background-position: -53px;"></div>
            </div>

            <div class="col-md-9 col-sm-8">
                <h3 class="h1"><span class="h1-span">Требования для получения кредита  </span>под залог ПТС <span
                        class="titleFirst3"></span></h3>

                <ul class="switcher-3 gorizontal-pieces" id="switcher-loan-3">
                    <li class="for_opening_view selected" data-modal-id="paymentsGrafModal" id="addClick2"
                        data-show-3="one">
                        <div class="title-switch">К автомобилю</div>
                    </li>
                    <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed" data-show-3="two">
                        <div class="title-switch">К заемщику</div>
                    </li>
                    <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed" data-show-3="three">
                        <div class="title-switch">К документам</div>
                    </li>
                </ul>
                <div class="switch-js-3">
                    <div class="opening_view" data-switch-3="one">
                        <ul class="list-ul">
                            <li>Авто в исправном техническом состоянии</li>
                            <li>Состоит на учете в ГИБДД</li>
                            <li>Не находится в залоге</li>
                        </ul>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">
                            Оформить займ
                        </button>
                    </div>

                    <div class="opening_view" data-switch-3="two">
                        <ul class="list-ul">
                            <li>Гражданство РФ и постоянная регистрация в регионе присутствия компании</li>
                            <li>От 18 до 65 полных лет на момент заключения договора</li>
                            <li>Кредитная история не требуется</li>
                            <li>Можно без трудоустройства</li>
                        </ul>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4"
                                id="ClickListeter1">Оформить займ
                        </button>
                    </div>

                    <div class="opening_view" data-switch-3="three">
                        <ul class="list-ul">
                            <li>Паспорт гражданина РФ</li>
                            <li>Паспорт технического средства (ПТС)</li>
                            <li>Свидетельство о регистрации транспортного средства (СРТС)</li>
                        </ul>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">
                            Оформить займ
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="receipt-of-money-2">
    <section id="repay-a-loan-1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="bg-grey-man">
                        <h3 class="h1">Погашение автозайма</h3>
                        <img src="images/p4298/bluetruck.png" alt="Займы под ПТС в Ейске"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="thank-answer-block">
                        <h2>Погашение автозайма может быть:</h2>
                        <div class="thank-answer">
                            <div class="thank-answer-img"><img src="images/forProject27/money.png"
                                                               alt="Займы под ПТС в Ейске"/></div>
                            <div class="thank-answer-text">
                                <h3>Наличными средствами</h3>
                                В кассах компании, офисах или магазинах
                            </div>
                        </div>
                        <div class="thank-answer">
                            <div class="thank-answer-img"><img src="images/forProject27/ruble.png"
                                                               alt="Займы под ПТС в Ейске"/></div>
                            <div class="thank-answer-text">
                                <h3>Электронными кошельками</h3>
                                Через платежные сервисы наших партнеров
                            </div>
                        </div>
                        <div class="thank-answer">
                            <div class="thank-answer-img"><img src="images/forProject27/credit-card.png"
                                                               alt="Займы под ПТС в Ейске"/></div>
                            <div class="thank-answer-text">
                                <h3>Банковской картой</h3>
                                Безналичный перевод в личном кабинете клиента
                            </div>
                        </div>
                        <div class="thank-answer">
                            <div class="thank-answer-img"><img src="images/forProject27/payment.png"
                                                               alt="Займы под ПТС в Ейске"/></div>
                            <div class="thank-answer-text">
                                <h3>Через терминалы</h3>
                                Мы сотрудничаем с многими банками
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <h3 class="h1 m-t-image"><span class="h1-span"><span
                                class="h1-span">Получение денег </span></span> <span class="yellow-text">под
                            залог ПТС</span></h3>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <img class="m-t-image" src="images/p4298/side.png"
                             alt="Автоломбард под залог ПТС"/>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-12">
                <ul class="switcher gorizontal-pieces" id="switcher-loan-1">
                    <li class="for_opening_view selected" data-modal-id="paymentsGrafModal" id="express"
                        data-show="one">
                        <div class="title-switch">Как получить займ</div>
                    </li>
                    <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed" data-show="two">
                        <div class="title-switch">Что нужно для оформления займа</div>
                    </li>
                    <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed" data-show="three">
                        <div class="title-switch">Оставьте заявку</div>
                    </li>
                </ul>

                <div class="switch-js">
                    <div class="opening_view" data-switch="one">
                        <div class="visible-on-wade visible-on-tablet">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img arrow-right"
                                             style="background-image: url(images/forProject27/documents.png);background-size:50px;"></div>
                                        <div class="list-icon-grey-item-title text">Оставьте заявку и получите одобрение
                                            по телефону
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img arrow-right"
                                             style="background-image: url(images/forProject27/car.png);background-size:50px;"></div>
                                        <div class="list-icon-grey-item-title text">Приезжаете в офис для оценки авто и
                                            заключения договора
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img"
                                             style="background-image: url(images/forProject27/note.png);background-size:50px;"></div>
                                        <div class="list-icon-grey-item-title text">Получаете деньги и продолжаете
                                            пользоваться своим авто
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="visible-on-mobile">
                            <div class="owl-carousel owl-theme receipt-of-money-2">
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img arrow-right"
                                             style="background-image: url(images/p4298/icon_41.png)"></div>
                                        <div class="list-icon-grey-item-title text">Оставьте заявку и получите одобрение
                                            по телефону
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img arrow-right"
                                             style="background-image: url(images/p4298/icon_26.png);background-size:50px;"></div>
                                        <div class="list-icon-grey-item-title text">Приезжаете в офис для оценки авто и
                                            заключения договора
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="list-icon-grey-item">
                                        <div class="list-icon-grey-item-img"
                                             style="background-image: url(images/p4298/icon_19.png);background-size:50px;"></div>
                                        <div class="list-icon-grey-item-title text">Получаете деньги и продолжаете
                                            пользоваться своим авто
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="opening_view" data-switch="two">
                        <ul class="list-number">
                            <li>Паспорт гражданина РФ</li>
                            <li>ПТС (Паспорт транспортного средства)</li>
                            <li>СТС (Свидетельство о регистрации транспортного средства)</li>
                        </ul>
                    </div>

                    <div class="opening_view" data-switch="three">
                        <div class="background-grey">
                            <form class="ajax_form" method="post" action="#/" onsubmit="">
                                <input type="hidden" name="_token" value=>
                                <input type="hidden" value="" name=>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcName">Ваше имя</label>
                                            <span class="error"></span>
                                            <input id="CalcName" required type="text" class="form-control" name="name"
                                                   placeholder="Как Вас зовут">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="CalcNumber">Телефон</label>
                                            <span class="error"></span>
                                            <input type="text" required class="form-control type-phone" id="CalcNumber"
                                                   name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-danger">Подать заявку</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
		<section id=transports-5>
			<div class="container">
				<div class=row>
					<div class=col-md-12>
						<div class=mini-slider>
							<span class=text-bold>Недавние сделки </span>
							<span id=deals></span>
						</div>
					</div>
				</div>
			</div>
		</section>
<section id="reviews-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1">Что говорят о нас</h3>

                <div class="owl-carousel owl-theme reviews-1">
                    <article class="review-bg-no">
                        <div class="review-text">Теперь в автоломбарде моего города появилась уникальная возможность взять займ под ПТС
                                                 грузового автомобиля. Если вы работаете в сфере перевозок, то знаете, что могут возникать
                                                 задержке в выплате зарплаты. В такой ситуации отличным решением будет обратиться в
                                                 надежную компанию, и взять деньги под небольшой процент.</div>
                        <div class="review-person">
                            <div class="review-name">Алексей</div>
                        </div>
                    </article>
                    <article class="review-bg-no">
                        <div class="review-text">После кризиса 2014 года моя кредитная история была просто ужасной. И сейчас, когда возникла
                                                 необходимость в деньгах – единственным вариантом для меня стал автоломбард. К счастью, в
                                                 семье у нас не только два личных авто, но и мое рабочее грузовое авто. Думал, что процент будет
                                                 высокий, да и вообще, что это не надежно. Оказалось все очень просто, быстро, под небольшой

                                                 процент. Есть возможность досрочного погашения даже при оформлении займа под залог
                                                 грузового автомобиля. Всем рекомендую!</div>
                        <div class="review-person">
                            <div class="review-name">Игорь</div>
                        </div>
                    </article>
                    <article class="review-bg-no">
                        <div class="review-text">Наверное, вы даже не слышали, что существует грузовой автоломбард с займами под залог ПТС. Я
                                                 недавно обратился в эту финансовую организацию, поскольку срочно понадобились деньги на
                                                 ремонт загородного дома. Меня удивил низкий процент, отсутствие очередей и возможность
                                                 получить деньги в день оформления займа.</div>
                        <div class="review-person">
                            <div class="review-name">Виктор</div>
                        </div>
                    </article>
                    <article class="review-bg-no">
                        <div class="review-text">Сейчас мне все чаще приходится искать подработки и способы, где бы найти деньги до
                                                 зарплаты. Когда ситуация стала совсем безвыходной, я решил обратится в местный автоломбард
                                                 грузовиков. Здесь принимают под залог не только личное авто, но и грузовой транспорт,
                                                 спецтехнику. Причем вы можете продолжать использовать грузовик, просто оставляете
                                                 документы на транспортное средство, и получаете нужную вам сумму.</div>
                        <div class="review-person">
                            <div class="review-name">Яков</div>
                        </div>
                    </article>
                    <article class="review-bg-no">
                        <div class="review-text">Автоломбард грузовых автомобилей в Ейске сейчас популярен, как никогда. Эта финансовая
                                                 организация принимает под залог обычные автомобили (отечественного и зарубежного
                                                 производства), грузовики и спецтехнику. Уже несколько моих друзей после меня оформили займы
                                                 под залог ПТС грузового авто. Это очень практично, быстро и надежно. Всем советую
                                                 попробовать!</div>
                        <div class="review-person">
                            <div class="review-name">Арсений</div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
<section id="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-sm-12">
                <h3 class="h1"><span class="h1-span">Ответы на часто </span>задаваемые вопросы</h3>

                <div class="accordion" id="accordion-requirments">

                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/babel">
    let data = [
        [{question: `Могу ли я вернуть деньги за грузовой автомобиль раньше условленного срока?`},
            {answer: `Да. При оформлении займа под ПТС грузовика указывается максимальный
                      срок. Вы можете выплатить долг раньше этого периода. В таком случае пени и
                      дополнительная комиссия не начисляются. Вы получите ПТС сразу после
                      выплаты всей суммы.`},
            {numId: '0'},
            {numIdText: 'Zero'}],

        [{question: `Переоформляется ли грузовое транспортное средство на ваш автоломбард?`},
            {answer: `Нет. При оформлении займа под ПТС грузового автомобиля он остается в
                      Вашей собственности. Автоломбард только выдает кредиты. На период
                      кредитования мы забираем только ПТС. Остальные документы, как и
                      транспортное средство, остаются у Вас.`},
            {numId: '1'},
            {numIdText: 'One'}],

        [{question: `Важен ли возраст грузовика в процессе кредитования?`},
            {answer: `Возраст транспортного средства является одним из критериев при выдаче займа
                      под залог ПТС грузового авто. Максимальный возраст отечественного
                      транспорта составляет 10 лет. Автоломбард принимает иностранные грузовые
                      автомобили возрастом до 20 лет.`},
            {numId: '2'},
            {numIdText: 'Two'}],


    ]
    ReactDOM.render(
        <div>
            {data.map((el) => {
                return (
                    <div className="card item">
                        <a className="collapser" href="#" data-toggle="collapse"
                           data-target={`#collapse-requirments-${el[2].numId}`} aria-expanded="false"
                           aria-controls={`collapse${el[3].numIdText}`}>
                            <div className="card-header question" id={`heading${el[3].numIdText}`}>
                                <div className="quation-item">{el[0].question}</div>
                                <div className="arrow down-arrow"></div>
                            </div>
                        </a>
                        <div id={`collapse-requirments-${el[2].numId}`} className="collapse answer"
                             aria-labelledby={`heading${el[3].numIdText}`}
                             data-parent="#accordion-requirments">
                            <div className="card-body">
                                <p>{el[1].answer}</p>
                            </div>
                        </div>
                    </div>
                )
            })}
        </div>
        ,
        document.getElementById('accordion-requirments')
    )
</script>

<section id="section-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1">Адреса и контакты</h3>

                <div class="visible-on-wade visible-on-tablet" action="#">
                    <div class="map_filter adresses-left" action="#">
                        <div id="addresses"
                             style="background-color: #3f0d12; background-image: linear-gradient(315deg, #3f0d12 0%, #a71d31 74%); "
                             class="mapOptions__addresses white">
                            <div class="map-text">
                                <a style="color: ghostwhite" href="tel:<?=$tel ?>"><?=$phone ?></a><br>
                                <div class="city-wrapper-main">
                                </div>
                            </div>

                            <div id="rootMap">
                            </div>
                        </div>
                    </div>
                    <script type="text/babel">

                        const dateMap = [
                            {
                                "undefined": "Азов пр. Зои Космодемьянской, 88",
                                "Longitude": 47.1006829,
                                "Latitude": 39.419822,
                                "Index": 346782,
                                "Column5": "Azov",
                                "Адреса": "пр. Зои Космодемьянской, 88",
                                "Город": "Азов"
                            },
                            {
                                "undefined": "Александров пер. Красный, 10",
                                "Longitude": 56.3907643,
                                "Latitude": 38.7154624,
                                "Index": 601655,
                                "Column5": "Alexandrov",
                                "Адреса": "пер. Красный, 10",
                                "Город": "Александров"
                            },
                            {
                                "undefined": "Алексин ул. Ленина, 14",
                                "Longitude": 54.50053399999999,
                                "Latitude": 37.067207,
                                "Index": 301361,
                                "Column5": "Aleksin",
                                "Адреса": "ул. Ленина, 14",
                                "Город": "Алексин"
                            },
                            {
                                "undefined": "Анапа ул. Гребенская, 196",
                                "Longitude": 44.88497419999999,
                                "Latitude": 37.3322368,
                                "Index": 353451,
                                "Column5": "Anapa",
                                "Адреса": "ул. Гребенская, 196",
                                "Город": "Анапа"
                            },
                            {
                                "undefined": "Анжеро-Судженск ул. Ленина, 12",
                                "Longitude": 56.0816585,
                                "Latitude": 86.0182979,
                                "Index": 652470,
                                "Column5": "Anzhero-Sudzhensk",
                                "Адреса": "ул. Ленина, 12",
                                "Город": "Анжеро-Судженск"
                            },
                            {
                                "undefined": "Апатиты ул. Бредова, 26А",
                                "Longitude": 67.5612761,
                                "Latitude": 33.4070875,
                                "Index": 184209,
                                "Column5": "Apatity",
                                "Адреса": "ул. Бредова, 26А",
                                "Город": "Апатиты"
                            },
                            {
                                "undefined": "Арсеньев Калининская ул., 2",
                                "Longitude": 44.1581321,
                                "Latitude": 133.2652146,
                                "Index": 692337,
                                "Column5": "Arsenyev",
                                "Адреса": "Калининская ул., 2",
                                "Город": "Арсеньев"
                            },
                            {
                                "undefined": "Асбест Ленинградская ул., 20",
                                "Longitude": 57.0118466,
                                "Latitude": 61.4618882,
                                "Index": 624272,
                                "Column5": "Asbest",
                                "Адреса": "Ленинградская ул., 20",
                                "Город": "Асбест"
                            },
                            {
                                "undefined": "Балашов ул. Карла Маркса, 79",
                                "Longitude": 51.54004459999999,
                                "Latitude": 43.1554527,
                                "Index": 412302,
                                "Column5": "Balashov",
                                "Адреса": "ул. Карла Маркса, 79",
                                "Город": "Балашов"
                            },
                            {
                                "undefined": "Белебей ул. Уфимская, 5",
                                "Longitude": 54.1028409,
                                "Latitude": 54.1228484,
                                "Index": 452001,
                                "Column5": "Belebey",
                                "Адреса": "ул. Уфимская, 5",
                                "Город": "Белебей"
                            },
                            {
                                "undefined": "Белово Юбилейная ул., 5",
                                "Longitude": 54.4111273,
                                "Latitude": 86.3110516,
                                "Index": 652612,
                                "Column5": "Belovo",
                                "Адреса": "Юбилейная ул., 5",
                                "Город": "Белово"
                            },
                            {
                                "undefined": "Белогорск ул. Победы, 18",
                                "Longitude": 50.9207853,
                                "Latitude": 128.4641117,
                                "Index": 676860,
                                "Column5": "Belogorsk",
                                "Адреса": "ул. Победы, 18",
                                "Город": "Белогорск"
                            },
                            {
                                "undefined": "Белорецк ул. Пушкина, 122",
                                "Longitude": 53.96450249999999,
                                "Latitude": 58.42244720000001,
                                "Index": 453507,
                                "Column5": "Beloretsk",
                                "Адреса": "ул. Пушкина, 122",
                                "Город": "Белорецк"
                            },
                            {
                                "undefined": "Белореченск Деповская ул., 63",
                                "Longitude": 44.7536411,
                                "Latitude": 39.8924925,
                                "Index": 352630,
                                "Column5": "Belorechensk",
                                "Адреса": "Деповская ул., 63",
                                "Город": "Белореченск"
                            },
                            {
                                "undefined": "Берёзовский пр. Ленина, 14",
                                "Longitude": 55.66849759999999,
                                "Latitude": 86.27637969999999,
                                "Index": 652420,
                                "Column5": null,
                                "Адреса": "пр. Ленина, 14",
                                "Город": "Берёзовский"
                            },
                            {
                                "undefined": "Биробиджан ул. Дзержинского, 9",
                                "Longitude": 48.7852085,
                                "Latitude": 132.940475,
                                "Index": 679016,
                                "Column5": "Birobidzhan",
                                "Адреса": "ул. Дзержинского, 9",
                                "Город": "Биробиджан"
                            },
                            {
                                "undefined": "Бор ул. Ленина, 111",
                                "Longitude": 56.359645,
                                "Latitude": 44.051531,
                                "Index": 606440,
                                "Column5": "Bor",
                                "Адреса": "ул. Ленина, 111",
                                "Город": "Бор"
                            },
                            {
                                "undefined": "Борисоглебск ул. Гагарина, 60",
                                "Longitude": 51.3595531,
                                "Latitude": 42.08261479999999,
                                "Index": 397160,
                                "Column5": "Borisoglebsk",
                                "Адреса": "ул. Гагарина, 60",
                                "Город": "Борисоглебск"
                            },
                            {
                                "undefined": "Бугульма ул. Георгия Добровольского, 100",
                                "Longitude": 54.5344737,
                                "Latitude": 52.8241081,
                                "Index": 423232,
                                "Column5": "Bugulma",
                                "Адреса": "ул. Георгия Добровольского, 100",
                                "Город": "Бугульма"
                            },
                            {
                                "undefined": "Будённовск 6-й микрорайон, 12",
                                "Longitude": 44.7982015,
                                "Latitude": 44.156838,
                                "Index": 356801,
                                "Column5": "Budyonnovsk",
                                "Адреса": "6-й микрорайон, 12",
                                "Город": "Будённовск"
                            },
                            {
                                "undefined": "Бузулук ул. Чапаева, 50",
                                "Longitude": 52.79409949999999,
                                "Latitude": 52.2640599,
                                "Index": 461040,
                                "Column5": "Buzuluk",
                                "Адреса": "ул. Чапаева, 50",
                                "Город": "Бузулук"
                            },
                            {
                                "undefined": "Буйнакск ул. Хизроева, 42",
                                "Longitude": 42.8179884,
                                "Latitude": 47.1137089,
                                "Index": 368220,
                                "Column5": "Buynaksk",
                                "Адреса": "ул. Хизроева, 42",
                                "Город": "Буйнакск"
                            },
                            {
                                "undefined": "Великие Луки пр. Ленина, 26\/12",
                                "Longitude": 56.3442467,
                                "Latitude": 30.5185711,
                                "Index": 182113,
                                "Column5": "Velikiye Luki",
                                "Адреса": "пр. Ленина, 26\/12",
                                "Город": "Великие Луки"
                            },
                            {
                                "undefined": "Верхняя Пышма Успенский пр., 42",
                                "Longitude": 56.97656259999999,
                                "Latitude": 60.5630366,
                                "Index": 624090,
                                "Column5": "Verkhnyaya Pyshma",
                                "Адреса": "Успенский пр., 42",
                                "Город": "Верхняя Пышма"
                            },
                            {
                                "undefined": "Видное пр. Ленинского Комсомола, 17к2",
                                "Longitude": 55.5448326,
                                "Latitude": 37.7087297,
                                "Index": 142701,
                                "Column5": "Vidnoye",
                                "Адреса": "пр. Ленинского Комсомола, 17к2",
                                "Город": "Видное"
                            },
                            {
                                "undefined": "Волжск ул. Ленина, 52Б",
                                "Longitude": 55.8644585,
                                "Latitude": 48.3640447,
                                "Index": 425000,
                                "Column5": "Volzhsk",
                                "Адреса": "ул. Ленина, 52Б",
                                "Город": "Волжск"
                            },
                            {
                                "undefined": "Вольск ул. Калинина, 47",
                                "Longitude": 52.0497081,
                                "Latitude": 47.3692266,
                                "Index": null,
                                "Column5": "Volsk",
                                "Адреса": "ул. Калинина, 47",
                                "Город": "Вольск"
                            },
                            {
                                "undefined": "Воркута ул. Ленина, 38",
                                "Longitude": 67.4959961,
                                "Latitude": 64.058322,
                                "Index": 169906,
                                "Column5": "Vorkuta",
                                "Адреса": "ул. Ленина, 38",
                                "Город": "Воркута"
                            },
                            {
                                "undefined": "Воскресенск Советская ул., 18А",
                                "Longitude": 55.3249346,
                                "Latitude": 38.6828005,
                                "Index": 140200,
                                "Column5": "Voskresensk",
                                "Адреса": "Советская ул., 18А",
                                "Город": "Воскресенск"
                            },
                            {
                                "undefined": "Воткинск ул. Мира, 5",
                                "Longitude": 57.0545893,
                                "Latitude": 53.9871116,
                                "Index": 427433,
                                "Column5": "Votkinsk",
                                "Адреса": "ул. Мира, 5",
                                "Город": "Воткинск"
                            },
                            {
                                "undefined": "Всеволожск ул. Коммуны, 31",
                                "Longitude": 60.01087979999999,
                                "Latitude": 30.6557702,
                                "Index": 188640,
                                "Column5": "Vsevolozhsk",
                                "Адреса": "ул. Коммуны, 31",
                                "Город": "Всеволожск"
                            },
                            {
                                "undefined": "Выборг пр. Ленина, 10",
                                "Longitude": 60.711778,
                                "Latitude": 28.74374,
                                "Index": 188800,
                                "Column5": "Vyborg",
                                "Адреса": "пр. Ленина, 10",
                                "Город": "Выборг"
                            },
                            {
                                "undefined": "Выкса ул. Островского, 22",
                                "Longitude": 55.32772319999999,
                                "Latitude": 42.1674849,
                                "Index": 607061,
                                "Column5": "Vyksa",
                                "Адреса": "ул. Островского, 22",
                                "Город": "Выкса"
                            },
                            {
                                "undefined": "Вязьма Советская площадь, 2",
                                "Longitude": 55.2111848,
                                "Latitude": 34.28435,
                                "Index": 215158,
                                "Column5": "Vyazma",
                                "Адреса": "Советская площадь, 2",
                                "Город": "Вязьма"
                            },
                            {
                                "undefined": "Гатчина пр. 25 Октября, 38",
                                "Longitude": 59.5732655,
                                "Latitude": 30.12538039999999,
                                "Index": 188300,
                                "Column5": "Gatchina",
                                "Адреса": "пр. 25 Октября, 38",
                                "Город": "Гатчина"
                            },
                            {
                                "undefined": "Геленджик ул. Кирова, 11",
                                "Longitude": 44.5554918,
                                "Latitude": 38.0759745,
                                "Index": 353460,
                                "Column5": "Gelendzhik",
                                "Адреса": "ул. Кирова, 11",
                                "Город": "Геленджик"
                            },
                            {
                                "undefined": "Георгиевск ул. Пушкина, 52",
                                "Longitude": 44.148423,
                                "Latitude": 43.4750092,
                                "Index": 357820,
                                "Column5": "Georgiyevsk",
                                "Адреса": "ул. Пушкина, 52",
                                "Город": "Георгиевск"
                            },
                            {
                                "undefined": "Глазов Парковая ул., 45А",
                                "Longitude": 58.1422705,
                                "Latitude": 52.6541619,
                                "Index": 427620,
                                "Column5": "Glazov",
                                "Адреса": "Парковая ул., 45А",
                                "Город": "Глазов"
                            },
                            {
                                "undefined": "Горно-Алтайск Коммунистический пр., 2",
                                "Longitude": 51.9588823,
                                "Latitude": 85.9674469,
                                "Index": 649000,
                                "Column5": "Gorno-Altaysk",
                                "Адреса": "Коммунистический пр., 2",
                                "Город": "Горно-Алтайск"
                            },
                            {
                                "undefined": "Губкин ул. Королева, 2",
                                "Longitude": 51.27856300000001,
                                "Latitude": 37.5097731,
                                "Index": 309180,
                                "Column5": "Gubkin",
                                "Адреса": "ул. Королева, 2",
                                "Город": "Губкин"
                            },
                            {
                                "undefined": "Гудермес ул. Кирова, 25",
                                "Longitude": 43.363431,
                                "Latitude": 46.0926935,
                                "Index": 366201,
                                "Column5": "Gudermes",
                                "Адреса": "ул. Кирова, 25",
                                "Город": "Гудермес"
                            },
                            {
                                "undefined": "Гуково ул. Колодезная, 70",
                                "Longitude": 48.0476664,
                                "Latitude": 39.9509902,
                                "Index": 347872,
                                "Column5": "Gukovo",
                                "Адреса": "ул. Колодезная, 70",
                                "Город": "Гуково"
                            },
                            {
                                "undefined": "Гусь-Хрустальный ул. Тверская, 44",
                                "Longitude": 55.6006479,
                                "Latitude": 40.656017,
                                "Index": 601507,
                                "Column5": "Gus-Khrustalny",
                                "Адреса": "ул. Тверская, 44",
                                "Город": "Гусь-Хрустальный"
                            },
                            {
                                "undefined": "Дзержинский ул. Спортивная, 4",
                                "Longitude": 55.6262286,
                                "Latitude": 37.8498568,
                                "Index": 140090,
                                "Column5": "Dzerzhinsky",
                                "Адреса": "ул. Спортивная, 4",
                                "Город": "Дзержинский"
                            },
                            {
                                "undefined": "Дмитров Профессиональная ул., 1А",
                                "Longitude": 56.3480853,
                                "Latitude": 37.51795329999999,
                                "Index": 141800,
                                "Column5": "Dmitrov",
                                "Адреса": "Профессиональная ул., 1А",
                                "Город": "Дмитров"
                            },
                            {
                                "undefined": "Донской Октябрьская ул., 44",
                                "Longitude": 53.96801259999999,
                                "Latitude": 38.3209714,
                                "Index": 301760,
                                "Column5": "Donskoy",
                                "Адреса": "Октябрьская ул., 44",
                                "Город": "Донской"
                            },
                            {
                                "undefined": "Дубна просп. Боголюбова, д. 15",
                                "Longitude": 56.7372976,
                                "Latitude": 37.1656963,
                                "Index": 141985,
                                "Column5": "Dubna",
                                "Адреса": "просп. Боголюбова, д. 15",
                                "Город": "Дубна"
                            },
                            {
                                "undefined": "Егорьевск ул. Карла Маркса, д. 90а",
                                "Longitude": 55.3787455,
                                "Latitude": 39.0455631,
                                "Index": 140300,
                                "Column5": "Yegoryevsk",
                                "Адреса": "ул. Карла Маркса, д. 90а",
                                "Город": "Егорьевск"
                            },
                            {
                                "undefined": "Елабуга пр. Нефтяников, 29",
                                "Longitude": 55.753524,
                                "Latitude": 52.02015549999999,
                                "Index": 423603,
                                "Column5": "Yelabuga",
                                "Адреса": "пр. Нефтяников, 29",
                                "Город": "Елабуга"
                            },
                            {
                                "undefined": "Железногорск ул. Гагарина, 26",
                                "Longitude": 52.339428,
                                "Latitude": 35.35453,
                                "Index": 307170,
                                "Column5": "Zheleznogorsk",
                                "Адреса": "ул. Гагарина, 26",
                                "Город": "Железногорск"
                            },
                            {
                                "undefined": "Жигулёвск ул. Победы, 8",
                                "Longitude": 53.4037169,
                                "Latitude": 49.4863693,
                                "Index": 445350,
                                "Column5": "Zhigulevsk",
                                "Адреса": "ул. Победы, 8",
                                "Город": "Жигулёвск"
                            },
                            {
                                "undefined": "Заречный пр. Мира, 5",
                                "Longitude": 53.1975945,
                                "Latitude": 45.1819075,
                                "Index": 442960,
                                "Column5": "Zarechny",
                                "Адреса": "пр. Мира, 5",
                                "Город": "Заречный"
                            },
                            {
                                "undefined": "Зеленогорск ул. Ленина, 20",
                                "Longitude": 56.10994119999999,
                                "Latitude": 94.5846894,
                                "Index": 663690,
                                "Column5": "Zelenogorsk",
                                "Адреса": "ул. Ленина, 20",
                                "Город": "Зеленогорск"
                            },
                            {
                                "undefined": "Ивантеевка ул. Дзержинского, д. 11а",
                                "Longitude": 55.973305,
                                "Latitude": 37.909428,
                                "Index": 141280,
                                "Column5": "Ivanteyevka",
                                "Адреса": "ул. Дзержинского, д. 11а",
                                "Город": "Ивантеевка"
                            },
                            {
                                "undefined": "Избербаш ул. Пролетрская, 134",
                                "Longitude": 42.5684986,
                                "Latitude": 47.875381,
                                "Index": null,
                                "Column5": "Izberbash",
                                "Адреса": "ул. Пролетрская, 134",
                                "Город": "Избербаш"
                            },
                            {
                                "undefined": "Искитим ул. Советская, д. 201",
                                "Longitude": 54.64349050000001,
                                "Latitude": 83.3083699,
                                "Index": 633209,
                                "Column5": "Iskitim",
                                "Адреса": "ул. Советская, д. 201",
                                "Город": "Искитим"
                            },
                            {
                                "undefined": "Ишим Иркутская ул., 20",
                                "Longitude": 56.1084841,
                                "Latitude": 69.512553,
                                "Index": 627754,
                                "Column5": "Ishim",
                                "Адреса": "Иркутская ул., 20",
                                "Город": "Ишим"
                            },
                            {
                                "undefined": "Ишимбай ул. Блохина, 12",
                                "Longitude": 53.4412561,
                                "Latitude": 56.0317061,
                                "Index": 453203,
                                "Column5": "Ishimbay",
                                "Адреса": "ул. Блохина, 12",
                                "Город": "Ишимбай"
                            },
                            {
                                "undefined": "Каменск-Шахтинский пер. Строителей, 22",
                                "Longitude": 48.3141177,
                                "Latitude": 40.2689543,
                                "Index": null,
                                "Column5": "Kamensk-Shakhtinsky",
                                "Адреса": "пер. Строителей, 22",
                                "Город": "Каменск-Шахтинский"
                            },
                            {
                                "undefined": "Канск ул. Пугачева, 34",
                                "Longitude": 56.2106839,
                                "Latitude": 95.7186511,
                                "Index": 663600,
                                "Column5": "Kansk",
                                "Адреса": "ул. Пугачева, 34",
                                "Город": "Канск"
                            },
                            {
                                "undefined": "Кинешма ул. Спортивная, 16",
                                "Longitude": 57.43140520000001,
                                "Latitude": 42.1610789,
                                "Index": 155813,
                                "Column5": "Kineshma",
                                "Адреса": "ул. Спортивная, 16",
                                "Город": "Кинешма"
                            },
                            {
                                "undefined": "Кириши Советская ул., д. 18",
                                "Longitude": 59.4485968,
                                "Latitude": 32.0147883,
                                "Index": 187110,
                                "Column5": "Kirishi",
                                "Адреса": "Советская ул., д. 18",
                                "Город": "Кириши"
                            },
                            {
                                "undefined": "Кирово-Чепецк Пожарный пер., 7",
                                "Longitude": 58.5569832,
                                "Latitude": 49.9912776,
                                "Index": 613049,
                                "Column5": "Kirovo-Chepetsk",
                                "Адреса": "Пожарный пер., 7",
                                "Город": "Кирово-Чепецк"
                            },
                            {
                                "undefined": "Киселёвск Советская ул., 14",
                                "Longitude": 54.0025673,
                                "Latitude": 86.6416991,
                                "Index": 652700,
                                "Column5": "Kiselyovsk",
                                "Адреса": "Советская ул., 14",
                                "Город": "Киселёвск"
                            },
                            {
                                "undefined": "Клин ул. Ленина, д. 14",
                                "Longitude": 56.33572299999999,
                                "Latitude": 36.72980099999999,
                                "Index": 141601,
                                "Column5": "Klin",
                                "Адреса": "ул. Ленина, д. 14",
                                "Город": "Клин"
                            },
                            {
                                "undefined": "Клинцы Октябрьская ул., 2",
                                "Longitude": 52.7457386,
                                "Latitude": 32.2395102,
                                "Index": 243140,
                                "Column5": "Klintsy",
                                "Адреса": "Октябрьская ул., 2",
                                "Город": "Клинцы"
                            },
                            {
                                "undefined": "Когалым Ленинградская ул., 19",
                                "Longitude": 62.2606592,
                                "Latitude": 74.4735275,
                                "Index": 628484,
                                "Column5": "Kogalym",
                                "Адреса": "Ленинградская ул., 19",
                                "Город": "Когалым"
                            },
                            {
                                "undefined": "Котельники 1-й Покровский проезд, 1",
                                "Longitude": 55.65711779999999,
                                "Latitude": 37.8471732,
                                "Index": 140055,
                                "Column5": "Kotelniki",
                                "Адреса": "1-й Покровский проезд, 1",
                                "Город": "Котельники"
                            },
                            {
                                "undefined": "Котлас пр. Мира, 33",
                                "Longitude": 61.24367470000001,
                                "Latitude": 46.6429266,
                                "Index": 165300,
                                "Column5": "Kotlas",
                                "Адреса": "пр. Мира, 33",
                                "Город": "Котлас"
                            },
                            {
                                "undefined": "Краснокаменск пр. Строителей,11",
                                "Longitude": 50.10141850000001,
                                "Latitude": 118.0409054,
                                "Index": 674674,
                                "Column5": "Krasnokamensk",
                                "Адреса": "пр. Строителей,11",
                                "Город": "Краснокаменск"
                            },
                            {
                                "undefined": "Краснокамск Комсомольский пр., 12",
                                "Longitude": 58.08200249999999,
                                "Latitude": 55.7521285,
                                "Index": 617060,
                                "Column5": "Krasnokamsk",
                                "Адреса": "Комсомольский пр., 12",
                                "Город": "Краснокамск"
                            },
                            {
                                "undefined": "Краснотурьинск ул. Ленина, 49",
                                "Longitude": 59.76254119999999,
                                "Latitude": 60.2113615,
                                "Index": 624449,
                                "Column5": "Krasnoturyinsk",
                                "Адреса": "ул. Ленина, 49",
                                "Город": "Краснотурьинск"
                            },
                            {
                                "undefined": "Кропоткин Красная ул., 25",
                                "Longitude": 45.4340941,
                                "Latitude": 40.5772088,
                                "Index": 352380,
                                "Column5": "Kropotkin",
                                "Адреса": "Красная ул., 25",
                                "Город": "Кропоткин"
                            },
                            {
                                "undefined": "Крымск ул. Маршала Гречко, 71",
                                "Longitude": 44.9217221,
                                "Latitude": 37.9995362,
                                "Index": 353385,
                                "Column5": "Krymsk",
                                "Адреса": "ул. Маршала Гречко, 71",
                                "Город": "Крымск"
                            },
                            {
                                "undefined": "Кстово пр. Победы, 3",
                                "Longitude": 56.1537593,
                                "Latitude": 44.2094798,
                                "Index": 607650,
                                "Column5": "Kstovo",
                                "Адреса": "пр. Победы, 3",
                                "Город": "Кстово"
                            },
                            {
                                "undefined": "Кузнецк ул. Кирова, 188",
                                "Longitude": 53.1145699,
                                "Latitude": 46.6073314,
                                "Index": 442530,
                                "Column5": "Kuznetsk",
                                "Адреса": "ул. Кирова, 188",
                                "Город": "Кузнецк"
                            },
                            {
                                "undefined": "Кумертау ул. Ломоносова, 31",
                                "Longitude": 52.7585786,
                                "Latitude": 55.8049304,
                                "Index": 453300,
                                "Column5": "Kumertau",
                                "Адреса": "ул. Ломоносова, 31",
                                "Город": "Кумертау"
                            },
                            {
                                "undefined": "Кунгур ул. Ленина, 42",
                                "Longitude": 57.43308219999999,
                                "Latitude": 56.93869549999999,
                                "Index": 617471,
                                "Column5": "Kungur",
                                "Адреса": "ул. Ленина, 42",
                                "Город": "Кунгур"
                            },
                            {
                                "undefined": "Лабинск ул. Свободы, 173",
                                "Longitude": 44.6426197,
                                "Latitude": 40.7242522,
                                "Index": 352502,
                                "Column5": "Labinsk",
                                "Адреса": "ул. Свободы, 173",
                                "Город": "Лабинск"
                            },
                            {
                                "undefined": "Лениногорск ул. Вахитова, 5",
                                "Longitude": 54.5954985,
                                "Latitude": 52.4473658,
                                "Index": 423252,
                                "Column5": "Leninogorsk",
                                "Адреса": "ул. Вахитова, 5",
                                "Город": "Лениногорск"
                            },
                            {
                                "undefined": "Ленинск-Кузнецкий пр. Кирова, 67",
                                "Longitude": 54.6718656,
                                "Latitude": 86.1741127,
                                "Index": 652515,
                                "Column5": "Leninsk-Kuznetskiy",
                                "Адреса": "пр. Кирова, 67",
                                "Город": "Ленинск-Кузнецкий"
                            },
                            {
                                "undefined": "Лесосибирск ул.Магистральная,30",
                                "Longitude": 58.2238529,
                                "Latitude": 92.4886568,
                                "Index": 662541,
                                "Column5": "Lesosibirsk",
                                "Адреса": "ул.Магистральная,30",
                                "Город": "Лесосибирск"
                            },
                            {
                                "undefined": "Лиски Коммунистическая ул., 17",
                                "Longitude": 50.9813276,
                                "Latitude": 39.5041473,
                                "Index": 397901,
                                "Column5": "Liski",
                                "Адреса": "Коммунистическая ул., 17",
                                "Город": "Лиски"
                            },
                            {
                                "undefined": "Лобня ул. Ленина, 9",
                                "Longitude": 56.012397,
                                "Latitude": 37.482188,
                                "Index": 141730,
                                "Column5": "Lobnya",
                                "Адреса": "ул. Ленина, 9",
                                "Город": "Лобня"
                            },
                            {
                                "undefined": "Лысьва ул. Смышляева, д. 31",
                                "Longitude": 58.1019068,
                                "Latitude": 57.79814700000001,
                                "Index": 618900,
                                "Column5": "Lysva",
                                "Адреса": "ул. Смышляева, д. 31",
                                "Город": "Лысьва"
                            },
                            {
                                "undefined": "Лыткарино ул. Первомайская, 6",
                                "Longitude": 55.5811618,
                                "Latitude": 37.9076413,
                                "Index": 140080,
                                "Column5": "Lytkarino",
                                "Адреса": "ул. Первомайская, 6",
                                "Город": "Лыткарино"
                            },
                            {
                                "undefined": "Магадан пр. Ленина, 30Б",
                                "Longitude": 59.5620018,
                                "Latitude": 150.7978138,
                                "Index": 685000,
                                "Column5": "Magadan",
                                "Адреса": "пр. Ленина, 30Б",
                                "Город": "Магадан"
                            },
                            {
                                "undefined": "Междуреченск ул. Чехова, 3",
                                "Longitude": 53.68914299999999,
                                "Latitude": 88.0738607,
                                "Index": 652870,
                                "Column5": "Mezhdurechensk",
                                "Адреса": "ул. Чехова, 3",
                                "Город": "Междуреченск"
                            },
                            {
                                "undefined": "Мелеуз ул. Смоленская, 72",
                                "Longitude": 52.9632069,
                                "Latitude": 55.9378286,
                                "Index": 453850,
                                "Column5": "Meleuz",
                                "Адреса": "ул. Смоленская, 72",
                                "Город": "Мелеуз"
                            },
                            {
                                "undefined": "Минеральные Воды Тбилисская ул., 33Б",
                                "Longitude": 44.2020451,
                                "Latitude": 43.1341291,
                                "Index": 357207,
                                "Column5": "Mineralnye Vody",
                                "Адреса": "Тбилисская ул., 33Б",
                                "Город": "Минеральные Воды"
                            },
                            {
                                "undefined": "Минусинск ул. Комсомольская, 88",
                                "Longitude": 53.7184167,
                                "Latitude": 91.7034122,
                                "Index": 662608,
                                "Column5": "Minusinsk",
                                "Адреса": "ул. Комсомольская, 88",
                                "Город": "Минусинск"
                            },
                            {
                                "undefined": "Михайловка ул. Мичурина, 30",
                                "Longitude": 50.0748399,
                                "Latitude": 43.224236,
                                "Index": 403343,
                                "Column5": "Михайловка (михайловка Го)",
                                "Адреса": "ул. Мичурина, 30",
                                "Город": "Михайловка"
                            },
                            {
                                "undefined": "Михайловск ул. Ишкова, 168",
                                "Longitude": 45.1547964,
                                "Latitude": 42.046486,
                                "Index": 356243,
                                "Column5": "Mikhaylovsk",
                                "Адреса": "ул. Ишкова, 168",
                                "Город": "Михайловск"
                            },
                            {
                                "undefined": "Мичуринск Советская ул., 327",
                                "Longitude": 52.8914024,
                                "Latitude": 40.510639,
                                "Index": 393760,
                                "Column5": "Michurinsk",
                                "Адреса": "Советская ул., 327",
                                "Город": "Мичуринск"
                            },
                            {
                                "undefined": "Мурино ул. Шувалова, 22",
                                "Longitude": 60.0599716,
                                "Latitude": 30.4326116,
                                "Index": 195267,
                                "Column5": "Murino",
                                "Адреса": "ул. Шувалова, 22",
                                "Город": "Мурино"
                            },
                            {
                                "undefined": "Наро-Фоминск ул. Маршала Жукова, д. 16",
                                "Longitude": 55.382032,
                                "Latitude": 36.7181141,
                                "Index": 143300,
                                "Column5": "Naro-Fominsk",
                                "Адреса": "ул. Маршала Жукова, д. 16",
                                "Город": "Наро-Фоминск"
                            },
                            {
                                "undefined": "Нерюнгри ул. Кравченко, 20",
                                "Longitude": 56.6596892,
                                "Latitude": 124.7263148,
                                "Index": 678145,
                                "Column5": "Neryungri",
                                "Адреса": "ул. Кравченко, 20",
                                "Город": "Нерюнгри"
                            },
                            {
                                "undefined": "Новоалтайск Красногвардейская ул., 5",
                                "Longitude": 53.413918,
                                "Latitude": 83.928848,
                                "Index": 658080,
                                "Column5": "Novoaltaysk",
                                "Адреса": "Красногвардейская ул., 5",
                                "Город": "Новоалтайск"
                            },
                            {
                                "undefined": "Новокуйбышевск Коммунистическая ул., 39",
                                "Longitude": 53.098812,
                                "Latitude": 49.9474033,
                                "Index": 446200,
                                "Column5": "Novokuybyshevsk",
                                "Адреса": "Коммунистическая ул., 39",
                                "Город": "Новокуйбышевск"
                            },
                            {
                                "undefined": "Новотроицк Советская ул., 85",
                                "Longitude": 51.1915694,
                                "Latitude": 58.28918760000001,
                                "Index": 462363,
                                "Column5": "Novotroitsk",
                                "Адреса": "Советская ул., 85",
                                "Город": "Новотроицк"
                            },
                            {
                                "undefined": "Новоуральск ул. Дзержинского, 7",
                                "Longitude": 57.259004,
                                "Latitude": 60.100511,
                                "Index": 624131,
                                "Column5": "Novouralsk",
                                "Адреса": "ул. Дзержинского, 7",
                                "Город": "Новоуральск"
                            },
                            {
                                "undefined": "Нягань 2-й микрорайон, 16",
                                "Longitude": 62.1420616,
                                "Latitude": 65.44626819999999,
                                "Index": null,
                                "Column5": "Nyagan",
                                "Адреса": "2-й микрорайон, 16",
                                "Город": "Нягань"
                            },
                            {
                                "undefined": "Озёрск ул. Челябинская, 41",
                                "Longitude": 55.7694124,
                                "Latitude": 60.74123479999999,
                                "Index": 456700,
                                "Column5": "Ozersk",
                                "Адреса": "ул. Челябинская, 41",
                                "Город": "Озёрск"
                            },
                            {
                                "undefined": "Павлово ул. Чкалова, 19",
                                "Longitude": 55.9643528,
                                "Latitude": 43.0836106,
                                "Index": 606108,
                                "Column5": "Pavlovo",
                                "Адреса": "ул. Чкалова, 19",
                                "Город": "Павлово"
                            },
                            {
                                "undefined": "Павловский Посад ул. Кирова, 4",
                                "Longitude": 55.7795091,
                                "Latitude": 38.65361499999999,
                                "Index": 142500,
                                "Column5": "Pavlovsky Posad",
                                "Адреса": "ул. Кирова, 4",
                                "Город": "Павловский Посад"
                            },
                            {
                                "undefined": "Полевской ул. Карла Маркса, 44",
                                "Longitude": 56.4469977,
                                "Latitude": 60.1527001,
                                "Index": 623391,
                                "Column5": "Polevskoy",
                                "Адреса": "ул. Карла Маркса, 44",
                                "Город": "Полевской"
                            },
                            {
                                "undefined": "Прохладный ул. Головко, 257",
                                "Longitude": 43.754255,
                                "Latitude": 44.0355645,
                                "Index": 361045,
                                "Column5": "Prokhladny",
                                "Адреса": "ул. Головко, 257",
                                "Город": "Прохладный"
                            },
                            {
                                "undefined": "Ревда ул. Мира, 19",
                                "Longitude": 56.7982729,
                                "Latitude": 59.911901,
                                "Index": 623286,
                                "Column5": "Revda",
                                "Адреса": "ул. Мира, 19",
                                "Город": "Ревда"
                            },
                            {
                                "undefined": "Ржев Большая Спасская ул., 44",
                                "Longitude": 56.2516914,
                                "Latitude": 34.3271732,
                                "Index": 172381,
                                "Column5": "Rzhev",
                                "Адреса": "Большая Спасская ул., 44",
                                "Город": "Ржев"
                            },
                            {
                                "undefined": "Россошь площадь Танкистов, 1Б",
                                "Longitude": 50.1964518,
                                "Latitude": 39.5799725,
                                "Index": null,
                                "Column5": "Rossosh",
                                "Адреса": "площадь Танкистов, 1Б",
                                "Город": "Россошь"
                            },
                            {
                                "undefined": "Салехард ул. Свердлова, 42",
                                "Longitude": 66.5279666,
                                "Latitude": 66.6046135,
                                "Index": 629007,
                                "Column5": "Salekhard",
                                "Адреса": "ул. Свердлова, 42",
                                "Город": "Салехард"
                            },
                            {
                                "undefined": "Сальск ул. Кузнечная, 171",
                                "Longitude": 46.47342949999999,
                                "Latitude": 41.5243902,
                                "Index": 347631,
                                "Column5": "Salsk",
                                "Адреса": "ул. Кузнечная, 171",
                                "Город": "Сальск"
                            },
                            {
                                "undefined": "Сарапул ул. Гоголя, 40",
                                "Longitude": 56.473333,
                                "Latitude": 53.802454,
                                "Index": 427974,
                                "Column5": "Sarapul",
                                "Адреса": "ул. Гоголя, 40",
                                "Город": "Сарапул"
                            },
                            {
                                "undefined": "Саров Московская ул., 11",
                                "Longitude": 54.9455347,
                                "Latitude": 43.32757000000001,
                                "Index": 607187,
                                "Column5": "Sarov",
                                "Адреса": "Московская ул., 11",
                                "Город": "Саров"
                            },
                            {
                                "undefined": "Свободный ул. Некрасова, 92",
                                "Longitude": 51.3488677,
                                "Latitude": 128.1470716,
                                "Index": 676455,
                                "Column5": "Svobodny",
                                "Адреса": "ул. Некрасова, 92",
                                "Город": "Свободный"
                            },
                            {
                                "undefined": "Североморск ул. Сафонова, 10",
                                "Longitude": 69.0749778,
                                "Latitude": 33.420568,
                                "Index": 184606,
                                "Column5": "Severomorsk",
                                "Адреса": "ул. Сафонова, 10",
                                "Город": "Североморск"
                            },
                            {
                                "undefined": "Сергиев Посад просп. Красной Армии, д. 190",
                                "Longitude": 56.318444,
                                "Latitude": 38.139868,
                                "Index": 141310,
                                "Column5": "Sergiyev Posad",
                                "Адреса": "просп. Красной Армии, д. 190",
                                "Город": "Сергиев Посад"
                            },
                            {
                                "undefined": "Серов ул. Льва Толстого, 1",
                                "Longitude": 59.5937707,
                                "Latitude": 60.57951300000001,
                                "Index": 624992,
                                "Column5": "Serov",
                                "Адреса": "ул. Льва Толстого, 1",
                                "Город": "Серов"
                            },
                            {
                                "undefined": "Сертолово ул. Кожемякина, 10",
                                "Longitude": 60.1399645,
                                "Latitude": 30.2187806,
                                "Index": 188650,
                                "Column5": "Sertolovo",
                                "Адреса": "ул. Кожемякина, 10",
                                "Город": "Сертолово"
                            },
                            {
                                "undefined": "Сибай ул. Матросова, 34",
                                "Longitude": 52.71274690000001,
                                "Latitude": 58.6610404,
                                "Index": 453832,
                                "Column5": "Sibay",
                                "Адреса": "ул. Матросова, 34",
                                "Город": "Сибай"
                            },
                            {
                                "undefined": "Славянск-на-Кубани ул. Ленина, 143",
                                "Longitude": 45.25153299999999,
                                "Latitude": 38.111491,
                                "Index": 353561,
                                "Column5": "Slavyansk-na-Kubani",
                                "Адреса": "ул. Ленина, 143",
                                "Город": "Славянск-на-Кубани"
                            },
                            {
                                "undefined": "Снежинск пр. Мира, 21",
                                "Longitude": 56.0744856,
                                "Latitude": 60.75466530000001,
                                "Index": 456776,
                                "Column5": "Snezhinsk",
                                "Адреса": "пр. Мира, 21",
                                "Город": "Снежинск"
                            },
                            {
                                "undefined": "Соликамск ул. 20 лет Победы, д. 173В",
                                "Longitude": 59.642244,
                                "Latitude": 56.75913749999999,
                                "Index": 618554,
                                "Column5": "Solikamsk",
                                "Адреса": "ул. 20 лет Победы, д. 173В",
                                "Город": "Соликамск"
                            },
                            {
                                "undefined": "Сосновый Бор ул. Ленинградская, д. 34а",
                                "Longitude": 59.896274,
                                "Latitude": 29.078245,
                                "Index": 188541,
                                "Column5": "Sosnovy Bor",
                                "Адреса": "ул. Ленинградская, д. 34а",
                                "Город": "Сосновый Бор"
                            },
                            {
                                "undefined": "Ступино ул. Андропова, д. 39",
                                "Longitude": 54.886318,
                                "Latitude": 38.081588,
                                "Index": 142800,
                                "Column5": "Stupino",
                                "Адреса": "ул. Андропова, д. 39",
                                "Город": "Ступино"
                            },
                            {
                                "undefined": "Сунжа ул. Победы, 15",
                                "Longitude": 43.3206319,
                                "Latitude": 45.0489663,
                                "Index": 386201,
                                "Column5": "Sunzha",
                                "Адреса": "ул. Победы, 15",
                                "Город": "Сунжа"
                            },
                            {
                                "undefined": "Тимашёвск ул. Пионерская, 58",
                                "Longitude": 45.6162989,
                                "Latitude": 38.9521152,
                                "Index": 352701,
                                "Column5": "Timashevsk",
                                "Адреса": "ул. Пионерская, 58",
                                "Город": "Тимашёвск"
                            },
                            {
                                "undefined": "Тихвин Советская ул., 39",
                                "Longitude": 59.6440157,
                                "Latitude": 33.5075437,
                                "Index": 187555,
                                "Column5": "Tikhvin",
                                "Адреса": "Советская ул., 39",
                                "Город": "Тихвин"
                            },
                            {
                                "undefined": "Тихорецк ул. Чапаева, 6",
                                "Longitude": 45.8443643,
                                "Latitude": 40.0995616,
                                "Index": 352121,
                                "Column5": "Tikhoretsk",
                                "Адреса": "ул. Чапаева, 6",
                                "Город": "Тихорецк"
                            },
                            {
                                "undefined": "Тобольск 4-й микрорайон, 19Б",
                                "Longitude": 58.2227256,
                                "Latitude": 68.2777646,
                                "Index": null,
                                "Column5": "Tobolsk",
                                "Адреса": "4-й микрорайон, 19Б",
                                "Город": "Тобольск"
                            },
                            {
                                "undefined": "Троицк Октябрьский пр., 17Б",
                                "Longitude": 55.478372,
                                "Latitude": 37.298673,
                                "Index": 142190,
                                "Column5": "Moskva",
                                "Адреса": "Октябрьский пр., 17Б",
                                "Город": "Троицк"
                            },
                            {
                                "undefined": "Туапсе ул. Октябрьской Революции, 5",
                                "Longitude": 44.0965037,
                                "Latitude": 39.0725462,
                                "Index": 352800,
                                "Column5": "Tuapse",
                                "Адреса": "ул. Октябрьской Революции, 5",
                                "Город": "Туапсе"
                            },
                            {
                                "undefined": "Туймазы ул. Гагарина, 29",
                                "Longitude": 54.6037416,
                                "Latitude": 53.6970068,
                                "Index": 452750,
                                "Column5": "Tuymazy",
                                "Адреса": "ул. Гагарина, 29",
                                "Город": "Туймазы"
                            },
                            {
                                "undefined": "Урус-Мартан ул. Калинина, 102",
                                "Longitude": 43.1279372,
                                "Latitude": 45.5284553,
                                "Index": 366521,
                                "Column5": "Urus-Martan",
                                "Адреса": "ул. Калинина, 102",
                                "Город": "Урус-Мартан"
                            },
                            {
                                "undefined": "Усолье-Сибирское пр. Красных Партизан, 24",
                                "Longitude": 52.7323795,
                                "Latitude": 103.6564668,
                                "Index": 665460,
                                "Column5": "Usolye-Sibirskoye",
                                "Адреса": "пр. Красных Партизан, 24",
                                "Город": "Усолье-Сибирское"
                            },
                            {
                                "undefined": "Усть-Илимск пр. Мира, 47",
                                "Longitude": 57.93971610000001,
                                "Latitude": 102.7329834,
                                "Index": 666686,
                                "Column5": "Ust-Ilimsk",
                                "Адреса": "пр. Мира, 47",
                                "Город": "Усть-Илимск"
                            },
                            {
                                "undefined": "Ухта пр. Ленина, 37\/1",
                                "Longitude": 63.5664222,
                                "Latitude": 53.6658226,
                                "Index": 169313,
                                "Column5": "Ukhta",
                                "Адреса": "пр. Ленина, 37\/1",
                                "Город": "Ухта"
                            },
                            {
                                "undefined": "Феодосия ул. Насыпная, 33",
                                "Longitude": 45.0553596,
                                "Latitude": 35.38048120000001,
                                "Index": null,
                                "Column5": "Feodosia",
                                "Адреса": "ул. Насыпная, 33",
                                "Город": "Феодосия"
                            },
                            {
                                "undefined": "Фрязино ул. Московская,1Б",
                                "Longitude": 55.9534682,
                                "Latitude": 38.05234919999999,
                                "Index": 141195,
                                "Column5": "Fryazino",
                                "Адреса": "ул. Московская,1Б",
                                "Город": "Фрязино"
                            },
                            {
                                "undefined": "Чайковский ул. Ленина, д. 39Б",
                                "Longitude": 56.7778362,
                                "Latitude": 54.14974640000001,
                                "Index": 617760,
                                "Column5": "Chaykovsky",
                                "Адреса": "ул. Ленина, д. 39Б",
                                "Город": "Чайковский"
                            },
                            {
                                "undefined": "Чапаевск ул. Кирова, 24",
                                "Longitude": 52.9788742,
                                "Latitude": 49.699326,
                                "Index": 446100,
                                "Column5": "Chapayevsk",
                                "Адреса": "ул. Кирова, 24",
                                "Город": "Чапаевск"
                            },
                            {
                                "undefined": "Черногорск ул. Советская, 47",
                                "Longitude": 53.8250861,
                                "Latitude": 91.2988604,
                                "Index": 655162,
                                "Column5": "Chernogorsk",
                                "Адреса": "ул. Советская, 47",
                                "Город": "Черногорск"
                            },
                            {
                                "undefined": "Чехов ул. Чехова, д. 4, стр. 1",
                                "Longitude": 55.1467694,
                                "Latitude": 37.4826536,
                                "Index": 142301,
                                "Column5": "Chekhov",
                                "Адреса": "ул. Чехова, д. 4, стр. 1",
                                "Город": "Чехов"
                            },
                            {
                                "undefined": "Чистополь ул. Энгельса, 133",
                                "Longitude": 55.3652433,
                                "Latitude": 50.601609,
                                "Index": 422986,
                                "Column5": "Chistopol",
                                "Адреса": "ул. Энгельса, 133",
                                "Город": "Чистополь"
                            },
                            {
                                "undefined": "Шадринск Комсомольская ул., 23",
                                "Longitude": 56.0850196,
                                "Latitude": 63.6295419,
                                "Index": 641870,
                                "Column5": "Shadrinsk",
                                "Адреса": "Комсомольская ул., 23",
                                "Город": "Шадринск"
                            },
                            {
                                "undefined": "Шали ул. Луговая, 27",
                                "Longitude": 43.1418894,
                                "Latitude": 45.9037335,
                                "Index": null,
                                "Column5": "Shali",
                                "Адреса": "ул. Луговая, 27",
                                "Город": "Шали"
                            },
                            {
                                "undefined": "Шуя ул. Свердлова, 12",
                                "Longitude": 56.85274140000001,
                                "Latitude": 41.38495899999999,
                                "Index": 155900,
                                "Column5": "Shuya",
                                "Адреса": "ул. Свердлова, 12",
                                "Город": "Шуя"
                            },
                            {
                                "undefined": "Щёкино ул. Лукашина, 10",
                                "Longitude": 54.0200747,
                                "Latitude": 37.5045065,
                                "Index": 301246,
                                "Column5": "Shchyokino",
                                "Адреса": "ул. Лукашина, 10",
                                "Город": "Щёкино"
                            },
                            {
                                "undefined": "Юрга ул. Тургенева, 42Г",
                                "Longitude": 55.6928196,
                                "Latitude": 84.98189789999999,
                                "Index": 652059,
                                "Column5": "Yurga",
                                "Адреса": "ул. Тургенева, 42Г",
                                "Город": "Юрга"
                            },
                            {
                                "undefined": "Ялта ул. Тренёва, 3",
                                "Longitude": 44.4996557,
                                "Latitude": 34.1676547,
                                "Index": 298600 ,
                                "Column5": "Yalta",
                                "Адреса": "ул. Тренёва, 3",
                                "Город": "Ялта"
                            },
                            {
                                "undefined": "Ейск, Ул. Щорса, 68",
                                "Longitude": 46.669360,
                                "Latitude": 38.292020,
                                "Index": 353691,
                                "Column5": "Yalta",
                                "Адреса": "ул. Щорса, 68",
                                "Город": "Ейск"
                            }

                        ]
                        ReactDOM.render(
                            <div>
                                {dateMap.map((obj, index) => {
                                    return (
                                        <a key={index}
                                           id={obj['Город']}
                                           itemProp="address" itemScope
                                           itemType="http://schema.org/PostalAddress"
                                           href="#"
                                           data-coordinate={obj['Latitude'] + ',' + obj['Longitude']}
                                           data-address={obj['Index'] + ' ' + obj['Город'] + ', ' + obj['Адреса']}
                                           data-name={obj['Адреса']}
                                           data-content="режим работы: 9:00-19:00"
                                           title=""
                                           className="mapOptions__addresses_a">
                                        <span itemProp="postalCode"
                                              className="addresses-text-bold">{obj['Index'] ? obj['Index'] : '000000'}, г. {obj['Город']}</span><br/>
                                            <span itemProp="streetAddress"
                                                  className="addresses-text-bold"> {obj['Адреса']}</span><br/>
                                            режим работы: 9:00-19:00
                                        </a>
                                    )
                                })}
                            </div>,
                            document.getElementById('rootMap')
                        )
                    </script>

                    <script>
                        setTimeout(() => {
                            document.querySelector('#Ейск').click()
                        }, 2000)
                    </script>

                    <div id="map" class="ofices map-right visible-on-wade visible-on-tablet"></div>
                </div>

                <div class="visible-on-mobile">
                    <div class="region_address">
                        <div class="row all_address">
                            <div class="col-md-12">
                                <div class="city-wrapper city-wrapper-main">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <input id="init-map-subdomain" type="hidden" value="37.484137,55.642164">
</section>

<footer id="footer-3">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="col-md-12">
                    <div class="footer-logo inline "><a href="#"><img style="width: 100px" src="images/logoKredit.png"
                                                                      alt="Кредит под залог ПТСе"/></a>
                    </div>

                    <div class="footer-phone ">
                        <button type="button" class="btn btn-line-red" data-toggle="modal"
                                data-target="#CallPhone-ver-2">Обратный звонок
                        </button>

                        <button type="button" class="btn btn-danger inline-btn" data-toggle="modal"
                                data-target="#CallPhone-ver-4">Оформить займ
                        </button>
                    </div>
                    <div class="footer-phone m-b-30"><a href="tel:<?= $tel ?>"><?= $phone ?></a><br>


                        <div class="soc-seti">
                            <div class="soc-footer m-b-30 m-t-30">
                                <a href="#" target="_blank" rel="nofollow" class="soc-vk"></a>
                                <a href="#" target="_blank" rel="nofollow" class="soc-inst"></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-7">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <ul class="footer-li bold">
                            <li><a href="zaym-pod-gruzovye.php">Грузовые авто</a></li>
                            <li><a href="zaym-pod-speztechniku.php">Спецтехника</a></li>
                            <li><a href="avtolombard-pod-pts.php">Автоломбард</a></li>

                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <ul class="footer-li bold">
                            <li><a href="zaym-pod-mototechniku.php">Мототехника</a></li>
                            <li><a href="zaym-dlya-ur-liz.php">Юр. Лица</a></li>
                            <li><a href="kredit-pod-pts.php">Кредит под ПТС</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="footer-bottom">
                    <p>«Займы под ПТС» не является финансовым учреждением, банком или МФО. Сайт
                        предоставляет
                        информационную помощь для получения кредитов и займов в аккредитованных организациях,
                        имеющих
                        разрешение ЦБ на данную деятельность. При оформлении заявки, формируется единая заявка
                        отправляемая компаниям партнерам, которые занимаются кредитованием населения.

                        *Все компании партнеры, зарегистрированы в реестре Центрального банка РФ. Список
                        компаний,
                        опубликован на главной странице сайта.</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="modal fade" id="CallPhone-ver-4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-deneg modal-dialog-centered" role="document">
        <div class="modal-content">
            <section id="online-application-1">
                <style>
                    .marginForButton {
                        margin-right: -38px;
                        margin-top: -35px;
                    }
                </style>
                <button type="button" class="close marginForButton" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="background-grey">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <h3 class="h1">Онлайн заявка на получение денег</h3>
                                        <ul class="switcher-2" id="switcher-loan-2">
                                            <li class="for_opening_view selected" data-modal-id="paymentsGrafModal"
                                                id="express" data-show-2="one">
                                                <div class="title-switch">Экспресс анкета</div>
                                                <div class="time-switch">Время заполнения <span>30 сек.</span></div>
                                                <div class="answer-switch">Предварительное решение</div>
                                            </li>
                                            <li class="for_opening_view" data-modal-id="paymentsInfo" id="detailed"
                                                data-show-2="two">
                                                <div class="title-switch">Подробная анкета</div>
                                                <div class="time-switch">Время заполнения <span>2 мин.</span></div>
                                                <div class="answer-switch">Точное решение</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9 col-sm-12">
                                        <div class="switch-js-2">
                                            <div class="opening_view" data-switch-2="one">
                                                <h3>Экспресс анкета</h3>
                                                <form action="thanks.php" method="POST">
                                                    <input type="hidden" name="_token" value=>
                                                    <input type="hidden" value="" name=>

                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcName">Ваше имя</label>
                                                                <span class="error"></span>
                                                                <input id="CalcName" required type="text"
                                                                       class="form-control" name="name" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcSurname">Ваша фамилия</label>
                                                                <input id="CalcSurname" type="text" class="form-control"
                                                                       name="LastName" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcNumber">Контактный телефон</label>
                                                                <span class="error"></span>
                                                                <input type="text" required
                                                                       class="form-control type-phone" id="CalcNumber"
                                                                       name="phone"
                                                                       placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcSum">Сумма займа</label>
                                                                <input id="CalcSum" type="text"
                                                                       class="form-control monthly-payment" name="sum"
                                                                       placeholder="₽">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8">
                                                            <div class="form-group text-loan-top">
                                                                Ваша ставка: <span class="text-bold text-blue">3% в месяц</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcMarka">Марка автомобиля</label>
                                                                <input id="CalcMarka" type="text" class="form-control"
                                                                       name="marka" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcModel">Модель автомобиля</label>
                                                                <input id="CalcModel" type="text" class="form-control"
                                                                       name="model" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcYear">Год выпуска</label>
                                                                <input type="text" class="form-control" id="CalcYear"
                                                                       name="CalcYear" placeholder="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-danger"
                                                                    data-toggle="modal" data-target="#CallPhone-ver-4">
                                                                Оформить займ
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="opening_view" data-switch-2="two">
                                                <h3>Подробная анкета</h3>
                                                <form action="thanks.php" method="POST">

                                                    <input type="hidden" name="_token" value=>
                                                    <input type="hidden" value="" name=>

                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcName">Ваше имя</label>
                                                                <span class="error"></span>
                                                                <input id="CalcName" required type="text"
                                                                       class="form-control" name="name" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcSurname">Ваша фамилия</label>
                                                                <input id="CalcSurname" type="text" class="form-control"
                                                                       name="LastName" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcNumber">Контактный телефон</label>
                                                                <span class="error"></span>
                                                                <input type="text" required
                                                                       class="form-control type-phone" id="CalcNumber"
                                                                       name="phone"
                                                                       placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcSum">Сумма займа</label>
                                                                <input id="CalcSum" type="text"
                                                                       class="form-control monthly-payment" name="sum"
                                                                       placeholder="₽">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8">
                                                            <div class="form-group text-loan-top">
                                                                Ваша ставка: <span class="text-bold text-blue">3% в месяц</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcMarka">Марка автомобиля</label>
                                                                <input id="CalcMarka" type="text" class="form-control"
                                                                       name="marka" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcModel">Модель автомобиля</label>
                                                                <input id="CalcModel" type="text" class="form-control"
                                                                       name="model" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcYear">Год выпуска</label>
                                                                <input type="text" class="form-control" id="CalcYear"
                                                                       name="CalcYear" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label for="CalcMileage">Пробег автомобиля</label>
                                                                <input type="text" class="form-control" id="CalcMileage"
                                                                       name="CalcMileage" placeholder="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-danger"
                                                                    data-toggle="modal" data-target="#CallPhone-ver-4">
                                                                Оформить займ
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


<div class="modal fade" id="onlajn-zayavka-short" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Подать заявку</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="thanks.php" method="POST">

                    <input type="hidden" name="_token" value="HYmmUBG7ERWgh7DZ8PyKYpmENIyoQAY6qZR29Xh5">
                    <input type="hidden" value="Подать заявку" name="_token">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="AppName11">Ваше имя</label>
                            <span class="error"></span>
                            <input id="AppName11" required type="text" class="form-control" name="name"
                                   placeholder="Как Вас зовут">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="request-phone4">Телефон</label>
                            <span class="error"></span>
                            <input type="text" required class="form-control type-phone" id="request-phone4" name="phone"
                                   placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                        </div>
                        <div class="col-md-12">
                            <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших<a
                                    target="_blank" href="privacy-policy.pdf">персональных данных</a>
                            </div>
                            <button type="submit" class="btn btn-danger">Подать заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="onlajn-zayavka-callback-success" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Спасибо за заявку!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <p> Мы свяжемся с Вами в течение 10 минут по указанному номеру телефона. Режим работы специалистов
                    колцентра с 9:00 до 19:00 по московскому времени.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="onlajn-zayavka-callback" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Подать заявку</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">

                <form action="thanks.php" method="POST">

                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="AppName71">Ваше имя</label>
                            <span class="error"></span><input id="AppName71" type="text" class="form-control" required
                                                              name="Имя" placeholder="Как Вас зовут">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12"><label
                                for="AppPhone31">Телефон</label><span class="error"></span><input type="text"
                                                                                                  id="AppPhone31"
                                                                                                  class="form-control type-phone"
                                                                                                  required
                                                                                                  name="Телефон"
                                                                                                  placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                        </div>
                        <div class="col-md-12">
                            <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a
                                    target="_blank" href="privacy-policy.pdf">персональных данных</a></div>
                            <button type="submit" class="btn btn-danger">Подать заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="onlajn-zayavka-partners" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Подать заявку</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <form class="ajax_form" method="post" action="#/onlajn-partners-short"
                      onsubmit="ym(, 'reachGoal', 'CallBackZAYAVKA'); gtag('event', 'onlajn-zayavka', {'event_category': 'form', 'event_action': 'callback'}); return true;">
                    <input type="hidden" name="_token" value="HYmmUBG7ERWgh7DZ8PyKYpmENIyoQAY6qZR29Xh5"><input
                        type="hidden" value="Подать заявку"><input type="hidden" class="form-control"
                                                                   name="type_service" value="partners">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppName7">Ваше имя</label><span
                                class="error"></span><input id="AppName7" type="text" class="form-control" required
                                                            name="name" placeholder="Как Вас зовут"></div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppPhone3">Телефон</label><span
                                class="error"></span><input type="text" id="AppPhone3" class="form-control type-phone"
                                                            required name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                        </div>
                        <div class="col-md-12">
                            <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a
                                    target="_blank" href="privacy-policy.pdf">персональных данных</a></div>
                            <button type="submit" class="btn btn-danger">Подать заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="onlajn-zayavka-srochnyj-vykup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Подать заявку</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <form class="ajax_form" method="post" action="#/onlajn-zayavka-short"><input type="hidden" name="_token"
                                                                                             value="HYmmUBG7ERWgh7DZ8PyKYpmENIyoQAY6qZR29Xh5"><input
                        type="hidden" name="_token" value="Подать заявку"><input type="hidden" class="form-control"
                                                                                 name="type_service"
                                                                                 value="srochniy_vikup">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppName8">Ваше имя</label><span
                                class="error"></span><input id="AppName8" type="text" class="form-control" required
                                                            name="name" placeholder="Как Вас зовут"></div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppPhone4">Телефон</label><span
                                class="error"></span><input type="text" id="AppPhone4" class="form-control type-phone"
                                                            required name="phone" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                        </div>
                        <div class="col-md-12">
                            <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a
                                    target="_blank" href="privacy-policy.pdf">персональных данных</a></div>
                            <button type="submit" class="btn btn-danger">Подать заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="off-canvas-sidebar grey">
    <div class="off-canvas-sidebar-wrapper visible-on-tablet visible-on-wade">
        <div style="background-position-x: right;" class="off-canvas-car-dark-grey">

        </div>

        <div class="off-canvas-header"><a class="off-canvas-close" href="#"><img src="images/close-white.svg"
                                                                                 alt="Кредит под залог ПТС"></a>
        </div>

        <div class="off-canvas-grey">
            <div class="off-canvas-content modal-dialog-centered">
                <div class="row">

                    <div class="col-md-6">
                        <h2 style="position:relative;margin-left: 52px;">
                        </h2>
                        <ul class="off-canvas-li">
                            <li><a href="zaym-pod-mototechniku.php">Мототехника</a></li>
                            <li><a href="zaym-dlya-ur-liz.php">Юр. Лица</a></li>
                            <li><a href="kredit-pod-pts.php">Кредит под ПТС</a></li>
                            <li><a href="zaym-pod-gruzovye.php">Грузовые авто</a></li>
                            <li><a href="zaym-pod-speztechniku.php">Спецтехника</a></li>
                            <li><a href="avtolombard-pod-pts.php">Автоломбард</a></li>
                        </ul>
                        <button type="button" class="btn btn-danger inline-btn" data-toggle="modal"
                                data-target="#CallPhone-ver-4" id="deleteBodyClass">Оформить займ
                        </button>
                        <br>
                        <br>
                        <br>


                        <script>
                            document.getElementById('deleteBodyClass').onclick = function () {
                                document.querySelector('body').classList.remove('off-canvas-sidebar-open');
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="off-canvas-sidebar-wrapper visible-on-mobile">
        <div class="off-canvas-header"><a class="off-canvas-close" href="#"><img src="images/close-white.svg"
                                                                                 alt="Кредит под залог ПТС"></a>
        </div>

        <div class="off-canvas-car-dark-grey">
            <div class="city-wrapper city-wrapper-main m-b-30">
            </div>
            <div class="off-canvas-phone"><a style="color: ghostwhite" href="tel:<?= $tel ?>"><?= $phone ?></a><br></div>
        </div>

        <div class="off-canvas-grey">
            <div class="off-canvas-content modal-dialog-centered">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="off-canvas-li">
                            <li><a href="zaym-pod-mototechniku.php">Мототехника</a></li>
                            <li><a href="zaym-dlya-ur-liz.php">Юр. Лица</a></li>
                            <li><a href="kredit-pod-pts.php">Кредит под ПТС</a></li>
                            <li><a href="zaym-pod-gruzovye.php">Грузовые авто</a></li>
                            <li><a href="zaym-pod-speztechniku.php">Спецтехника</a></li>
                            <li><a href="avtolombard-pod-pts.php">Автоломбард</a></li>
                        </ul>
                        <button type="button" class="btn btn-danger m-t-30" data-toggle="modal"
                                data-target="#CallPhone-ver-4" id="closeMenu">Оформить займ
                        </button>
                        <script>
                            document.getElementById('closeMenu').addEventListener('click', () => {
                                document.querySelector("body").classList.remove('off-canvas-sidebar-open')
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mapAddress" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Выберите регион</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div id="regions" class="row">
                    <ul>
                        <li id="1" title="Алтайский край">Алтайский край</li>
                        <li id="2" title="Астраханская область">Астраханская область</li>
                        <li id="3" title="Белгородская область">Белгородская область</li>
                        <li id="4" title="Брянская область">Брянская область</li>
                        <li id="5" title="Волгоградская область">Волгоградская область</li>
                        <li id="6" title="Вологодская область">Вологодская область</li>
                        <li id="7" title="Воронежская область">Воронежская область</li>
                        <li id="8" title="Кемеровская область">Кемеровская область</li>
                        <li id="9" title="Краснодарский край">Краснодарский край</li>
                        <li id="10" title="Курская область">Курская область</li>
                        <li id="11" title="Ленинградская область">Ленинградская область</li>
                        <li id="12" title="Липецкая область">Липецкая область</li>
                        <li id="13" title="Мурманская область">Мурманская область</li>
                        <li id="14" title="Новосибирская область">Новосибирская область</li>
                        <li id="15" title="Омская область">Омская область</li>
                        <li id="16" title="Орловская область">Орловская область</li>
                        <li id="17" title="Пермский край">Пермский край</li>
                        <li id="18" title="Республика Крым">Республика Крым</li>
                        <li id="19" title="Республика Татарстан">Республика Татарстан</li>
                        <li id="20" title="Ростовская область">Ростовская область</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="CallPhone-ver-1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Оставьте номер и мы Вам перезвоним!</h2>
                <p>Оставьте заявку и наши менеджеры свяжутся с Вами <span class="text-blue">в течение 5 минут</span></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>

            <div class="modal-body">
                <form action="thanks.php" method="POST">

                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="AppName9">Ваше имя</label>
                            <span class="error"></span>
                            <input id="AppName9" type="text" class="form-control" name="AppName"
                                   placeholder="Как Вас зовут">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="AppPhone5">Телефон</label>
                            <span class="error"></span>
                            <input type="text" id="AppPhone5" class="form-control type-phone" name="AppPhone"
                                   placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                        </div>
                        <div class="col-md-12">
                            <div class="personal-data">
                                Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank"
                                                                                                href="privacy-policy.pdf">персональных
                                данных</a>
                            </div>
                            <button type="submit" class="btn btn-danger">Отправить заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="CallPhone-ver-2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Получите решение по займу</h2>
                <p>Для получения результата оставьте контактные данные</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>

            <div class="modal-body">
                <form action="thanks.php" method="POST">

                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="AppName9">Ваше имя</label>
                            <span class="error"></span>
                            <input id="AppName9" type="text" class="form-control" name="Name"
                                   placeholder="Как Вас зовут">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="AppPhone5">Телефон</label>
                            <span class="error"></span>
                            <input type="text" id="AppPhone5" class="form-control type-phone" name="Phone"
                                   placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="AppName9">Марка и модель авто</label>
                            <span class="error"></span>
                            <input id="AppName9" type="text" class="form-control" name="Model Car"
                                   placeholder="Введите">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="AppPhone5">Год выпуска</label>
                            <span class="error"></span>
                            <input id="AppPhone5" class="form-control " name="Год выпуска" placeholder="ХХХХ"
                                   type="text" maxlength="4" onkeypress="return isNumberKey(event)">
                            <script>
                                function isNumberKey(evt) {
                                    var charCode = (evt.which) ? evt.which : event.keyCode
                                    if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
                                    return true;
                                };
                            </script>
                        </div>
                        <div class="col-md-12">
                            <div class="personal-data">
                                Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank"
                                                                                                href="privacy-policy.pdf">персональных
                                данных</a>
                            </div>
                            <button type="submit" class="btn btn-danger">Отправить заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="CallPhone-ver-3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Оставьте номер и мы Вам перезвоним!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>

            <div class="modal-body">
                <form action="thanks.php" method="POST">

                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="AppPhone5">Телефон</label>
                            <span class="error"></span>
                            <input type="text" id="AppPhone5" class="form-control type-phone" name="AppPhone"
                                   placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-danger m-t-30">Позвоните мне</button>
                        </div>
                        <div class="col-md-12">
                            <div class="personal-data">
                                Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a target="_blank"
                                                                                                href="privacy-policy.pdf">персональных
                                данных</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="specifications" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-deneg  modal-dialog-centered" role="document">
        <div class="modal-content">
            <section>
                <button type="button" class="close marginForButton" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="application-block">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">

                                        <h2><span class="h1-span">Для расчета укажите характеристики </span>транспортного
                                            средства
                                        </h2>
                                        <h6><span class="text-blue-icon"></span><span class="text-blue">И мы одобрим Вашу заявку </span>с
                                            вероятностью 100%
                                        </h6>
                                        <form class="application-form row" action="thanks.php" method="POST">

                                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                <label for="request-car_brand">Марка</label>
                                                <input type="text" class="form-control" id="request-car_brand"
                                                       name="Марка" required placeholder="">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                <label for="request-car_model">Модель</label>
                                                <input type="text" class="form-control" id="request-car_model"
                                                       name="Модель" required placeholder="">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                <label for="request-car_year">Год выпуска</label>
                                                <input type="text" class="form-control type-year" id="request-car_year"
                                                       name="Год выпуска" required placeholder="">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                <label for="request-car_time">Срок займа</label>
                                                <input type="text" class="form-control" id="request-car_time"
                                                       name="Срок займа" required placeholder="">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                <label for="request-car_time">Имя</label>
                                                <input type="text" class="form-control" id="request-car_time" name="Имя"
                                                       required placeholder="">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                <label for="request-car_time">Телефон</label>
                                                <input type="text" required class="form-control type-phone"
                                                       name="Телефон" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-danger">Получить одобрение
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<div class="modal fade" id="Application" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Подать заявку</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <form class="ajax_form" method="post">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppName10">Ваше
                            имя</label><span class="error"></span><input id="AppName10" type="text" class="form-control"
                                                                         name="AppName" placeholder="Как Вас зовут">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12"><label for="AppPhone1">Телефон</label><span
                                class="error"></span><input name="_token" type="text" class="form-control type-phone"
                                                            id="AppPhone1" name="AppPhone"
                                                            placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ"></div>
                        <div class="col-md-12">
                            <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a
                                    target="_blank" href="privacy-policy.pdf">персональных данных</a></div>
                            <button type="submit" class="btn btn-danger">Подать заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js-web/common.min.js"></script>
<script>
    /*
Так как карта загружается только на md+, то Загружаем скрипты карт только на больших экранах
*/
    var screenWidth = screen.width;
    if (screenWidth > 760) {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.onload = function () {
            var script2 = document.createElement('script');
            script2.type = 'text/javascript';
            script2.onload = function () {
            };
            script2.src = 'js-web/map.js';
            document.head.appendChild(script2);
        };
        script.src = 'https://api-maps.yandex.ru/2.1?apikey=1d68921b-c09e-4b88-9ba3-50e7fd3c8f83&load=package.full&lang=ru-RU';
        document.head.appendChild(script);
    }
</script>

<link rel="stylesheet" href="css-web/internal-pages.min.css"/>

<script defer src="js-web/internal-pages.min.js"></script>
<script defer src="js-web/javascript.js"></script>
<script type="text/javascript">
    $(function () {
        $('form').submit(function () {
            $(this).find('[type=submit]').attr('disabled', 'disabled');
        });
    });
</script>
<div class="cities-wrapper">
    <div class="cities-wrap cities-main">
        <div class=" mob-menu-but-h-2">
            <div class=" mob-line-2 mob-line-c"></div>
            <div class="mob-line-3 mob-line-c"></div>
        </div>
        <div class="cities-header city-text">Выбор региона</div>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="letter">А</div>
                <div id="rootА"></div>

                <div class="letter">Б</div>
                <div id="rootБ"></div>

                <div class="letter">В</div>
                <div id="rootВ"></div>

                <div class="letter">Г</div>
                <div id="rootГ"></div>

                <div class="letter">Д</div>
                <div id="rootД"></div>

            </div>
            <div class="col-sm-12 col-md-3">
                <div class="letter">Е</div>
                <div id="rootЕ"></div>

                <div class="letter">Ж</div>
                <div id="rootЖ"></div>

                <div class="letter">З</div>
                <div id="rootЗ"></div>

                <div class="letter">И</div>
                <div id="rootИ"></div>

                <div class="letter">К</div>
                <div id="rootК"></div>
                <div class="letter">Л</div>
                <div id="rootЛ"></div>


            </div>

            <div class="col-sm-12 col-md-3">

                <div class="letter">М</div>
                <div id="rootМ"></div>
                <div class="letter">Н</div>
                <div id="rootН"></div>

                <div class="letter">О</div>
                <div id="rootО"></div>

                <div class="letter">П</div>
                <div id="rootП"></div>
                <div class="letter">Р</div>
                <div id="rootР"></div>
                <div class="letter">С</div>
                <div id="rootС"></div>

            </div>
            <div class="col-sm-12 col-md-3">

                <div class="letter">Т</div>
                <div id="rootТ"></div>

                <div class="letter">У</div>
                <div id="rootУ"></div>
                <div class="letter">Ф</div>
                <div id="rootФ"></div>
                <div class="letter">Х</div>
                <div id="rootХ"></div>

                <div class="letter">Ч</div>
                <div id="rootЧ"></div>

                <div class="letter">Ш</div>
                <div id="rootШ"></div>

                <div class="letter">Щ</div>
                <div id="rootЩ"></div>

                <div class="letter">Ю</div>
                <div id="rootЮ"></div>

                <div class="letter">Я</div>
                <div id="rootЯ"></div>
            </div>
        </div>
    </div>
</div>
<script src="js-web/multi-regionality.js" type="text/babel"></script>
<script defer src="https://themes.getbootstrap.com/wp-content/themes/dokan/assets/js/html5.js"
        type="text/javascript"></script>
<script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LfcoEoeAAAAADKhAfYljva59-wLRGiHSTBArvNy"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6LfcoEoeAAAAADKhAfYljva59-wLRGiHSTBArvNy', {
            action: 'submit'
        }).then(function (token) {
            let e = document.createElement('input');
            e.type = 'hidden';
            e.name = 'recaptcha_response';
            e.value = token;
            Array.from(document.querySelectorAll('form')).forEach(function (form) {
                form.appendChild(e.cloneNode());
            });
        });
    });
</script>
</body>

</html>