<?php
    $phone = '8 (961) 326-11-46';
    $tel = preg_replace(['/\D/', '/^[78]/'], ['', '+7'], $phone);
?>
<?php include_once(__DIR__ . '/multi-regionality.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="yandex-verification" content="71149ceae4e3a8a8"/>
    <title>Автоломбард под залог ПТС   <?=$in_city ?></title>
    <meta name="description" content="Автоломбард под залог ПТС   <?=$in_city ?>"/>

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

<header class="header header-transparent header-main header-white">
    <div class="header-top">
        <div class="container">
            <div class="inner-header">
                <a class="inner-brand" href="/">
                    <img style="margin-top: -92px" src="./images/13.png" alt="logo">
                </a>
            </div>

            <div class="inner-navigation visible-on-wade">
                <div class="inner-nav">
                    <div class="inner-block">
                        <div class="city-wrapper city-wrapper-main">
                            <div class="city-text">Выбрать регион</div>

                        </div>

                        <div class="header-phone"><a href="tel:<?=$tel ?>"><?=$phone ?></a><br/></div>

                        <button type="button" class="btn btn-line-red" data-toggle="modal"
                                data-target="#CallPhone-ver-2">Обратный звонок
                        </button>

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">
                            Оформить займ
                        </button>
                    </div>
                </div>
            </div>
            <div class="extra-nav">
                <ul>
                    <li class="icon-phone"><a href="tel:<?=$tel ?>"><span class="icon-item-span"></span></a>
                    </li>
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
                    <div class="offer-bg-incline bg-1">
                        <div class="z-index">
                            <h1 class="h1"><span class="h1-span">Займ под залог ПТС
                                                                   </span> мототехники <?=$in_city ?></h1>

                            <ul class="list-ul-thin">
                                <li>Ставка от 2% в мес.</li>
                                <li>Сумма от 50 000 руб.</li>
                                <li>Срок до 60 мес.</li>
                                <li>Без комиссий</li>
                                <li>Без кредитной истории</li>
                            </ul>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#CallPhone-ver-4">Оформить заявку
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
  <section id=products-2>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class=h1><span class="h1-span">Принимаем в залог  </span> любую мототехнику  </h3>
                    <div class="visible-on-wade visible-on-tablet">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="product-template-bg grey">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="element-img" style="background-image: url(images/product/motorbike5.png); background-size: contain"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-right">
                                                <div class="element-title">Мотоцикл</div>
                                                <div class="element-wrap"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">Оценить</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="product-template-bg grey">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="element-img" style="background-image: url(images/product/skuter.jpg);"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-right">
                                                <div class="element-title">Мотороллер</div>
                                                <div class="element-wrap"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">Оценить</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="product-template-bg grey">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="element-img" style="background-image: url(images/product/chooper1.jpg);"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-right">
                                                <div class="element-title">Чоппер</div>
                                                <div class="element-wrap"><a href="#" class="btn btn-danger data-toggle="modal" data-target="#CallPhone-ver-4"">Оценить</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="product-template-bg grey">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="element-img" style="background-image: url(images/product/motorbike3.png); background-size: contain"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-right">
                                                <div class="element-title">Мопед</div>
                                                <div class="element-wrap"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#CallPhone-ver-4">Оценить</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="visible-on-mobile">
                        <div class="owl-carousel owl-theme product">
                            <div class="product-template-bg grey">
                                <div class="element-img" style="background-image: url(images/product/motorbike5.png);"></div>
                                <div class="product-right">
                                    <div class="element-title">Мотоцикл</div>
                                    <div class="element-wrap"><a href="#" class="btn btn-danger">Оценить</a></div>
                                </div>
                            </div>
                            <div class="product-template-bg grey">
                                <div class="element-img" style="background-image: url(images/product/skuter.jpg);"></div>
                                <div class="product-right">
                                    <div class="element-title">Мотороллер</div>
                                    <div class="element-wrap"><a href="#" class="btn btn-danger">Оценить</a></div>
                                </div>
                            </div>
                            <div class="product-template-bg grey">
                                <div class="element-img" style="background-image: url(images/product/chooper1.jpg);"></div>
                                <div class="product-right">
                                    <div class="element-title">Чоппер</div>
                                    <div class="element-wrap"><a href="#" class="btn btn-danger">Оценить</a></div>
                                </div>
                            </div>
                            <div class="product-template-bg grey">
                                <div class="element-img" style="background-image: url(images/product/motorbike3.png); background-size: contain"></div>
                                <div class="product-right">
                                    <div class="element-title">Мопед</div>
                                    <div class="element-wrap"><a href="#" class="btn btn-danger">Оценить</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

                                    <div class="personal-data calc-bottom">Нажимая на кнопку, вы даёте своё согласие на
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
</section>
<section id="interlayer-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="bg-red">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="count-all interlayer" style="background-image: url(images/icon/icon_43.svg);">
                                <div class="count-loan-number">285</div>
                                <div class="count-loan-text">число займов за сегодня</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="count-all interlayer" style="background-image: url(images/icon/icon_44.svg);">
                                <div class="count-loan-number">15 245 965 ₽</div>
                                <div class="count-loan-text">сумма займов за сегодня</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="count-all interlayer" style="background-image: url(images/icon/icon_45.svg);">
                                <div class="count-loan-number">300 000 ₽</div>
                                <div class="count-loan-text">сумма займов за сегодня</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section id="resources2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1">Полезные ресурсы</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6 m-b-30">
                        <div class="resource-bg-grey">
                            <div class="resource-image"><img src="images/fssp.png" alt="Автоломбард под залог ПТС"/>
                            </div>
                            <div class="resource-right">
                                <div class="resource-title">Федеральная служба судебных приставов России</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b-30">
                        <div class="resource-bg-grey">
                            <div class="resource-image"><img src="images/fnp.png" alt="Автоломбард под залог ПТС"/>
                            </div>
                            <div class="resource-right">
                                <div class="resource-title">Федеральная нотариальная палата</div>
                                <div class="resource-text">Реестр уведомлений о залоге движимого имущества<br></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b-30">
                        <div class="resource-bg-grey">
                            <div class="resource-image"><img src="images/gibdd.png" alt="Автоломбард под залог ПТС"/>
                            </div>
                            <div class="resource-right">
                                <div class="resource-title">База государственной инспекции безопасности дорожного
                                    движения
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b-30">
                        <div class="resource-bg-grey">
                            <div class="resource-image"><img src="images/cbr.png" alt="Автоломбард под залог ПТС"/>
                            </div>
                            <div class="resource-right">
                                <div class="resource-title">Центральный банк Российской Федерации</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="advantages-3">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h3 class="h1"><span class="h1-span">Лучшее обслуживание </span>для каждого клиента</h3>

                <p>Деньги под залог авто помогут решить временные финансовые трудности, клиенты продолжают пользоваться
                    своим транспортным средством</p>
            </div>
            <div class="col-md-12">
                <div class="visible-on-wade visible-on-tablet">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img"
                                     style="background-image: url(images/p4298/moneyRed.png); background-size: 50px 50px;"></div>
                                <div class="list-icon-grey-item-title">Выгода</div>
                                <div class="list-icon-grey-item-text">Наличные под залог авто. Выдача до 95%</div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img"
                                     style="background-image: url(images/p4298/timer.png); background-size: 50px 50px;"></div>
                                <div class="list-icon-grey-item-title">Скорость</div>
                                <div class="list-icon-grey-item-text">Работаем 24/7. Выдача за пол часа</div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img"
                                     style="background-image: url(images/p4298/calendarRed.png); background-size: 50px 50px;"></div>
                                <div class="list-icon-grey-item-title">Сроки</div>
                                <div class="list-icon-grey-item-text">Займы на любые сроки</div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img"
                                     style="background-image: url(images/p4298/electric-car.png); background-size: 50px 50px;"></div>
                                <div class="list-icon-grey-item-title">Удобство</div>
                                <div class="list-icon-grey-item-text">Принимаем любую технику</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="visible-on-mobile">
                    <div class="owl-carousel owl-theme advantages-2">
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img"
                                 style="background-image: url(images/p4298/moneyRed.png); background-size: 50px 50px;"></div>
                            <div class="list-icon-grey-item-title">Выгода</div>
                            <div class="list-icon-grey-item-text">Наличные под залог авто. Выдача до 95%</div>
                        </div>
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img"
                                 style="background-image: url(images/p4298/timer.png); background-size: 50px 50px;"></div>
                            <div class="list-icon-grey-item-title">Скорость</div>
                            <div class="list-icon-grey-item-text">Работаем 24/7. Выдача за пол часа</div>
                        </div>
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img"
                                 style="background-image: url(images/p4298/calendarRed.png)"></div>
                            <div class="list-icon-grey-item-title">Сроки</div>
                            <div class="list-icon-grey-item-text">Займы на любые сроки</div>
                        </div>
                        <div class="list-icon-grey-item">
                            <div class="list-icon-grey-item-img"
                                 style="background-image: url(images/p4298/electric-car.png); background-size: 50px 50px;"></div>
                            <div class="list-icon-grey-item-title">Удобство</div>
                            <div class="list-icon-grey-item-text">Принимаем любую технику</div>
                        </div>
                    </div>
                </div>

                <div class="link-button">
                    <a data-toggle="modal" data-target="#CallPhone-ver-4" href="#">Подать заявку <span
                            class="arrow"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="repay-a-loan">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1">Погашение автозайма</h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6 m-b-30">
                        <div class="resource-bg-grey icon icon-5">
                            <div class="resource-title">Наличными средствами</div>
                            <div class="resource-text">В кассах компании, офисах или магазинах</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 m-b-30">
                        <div class="resource-bg-grey icon icon-6">
                            <div class="resource-title">Электронными кошельками</div>
                            <div class="resource-text">Через платежные сервисы наших партнеров</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 m-b-30">
                        <div class="resource-bg-grey icon icon-7">
                            <div class="resource-title">Банковской картой</div>
                            <div class="resource-text">Безналичный перевод в личном кабинете клиента</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 m-b-30">
                        <div class="resource-bg-grey icon icon-8">
                            <div class="resource-title">Через терминалы</div>
                            <div class="resource-text">Мы сотрудничаем с многими банками</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="receipt-of-money-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <h3 class="h1 m-t-image"><span class="h1-span"><span class="h1-span-red">Получение денег </span></span>под
                            залог ПТС</h3>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <img class="m-t-image" src="images/product/mot1.png" alt="Автоломбард под залог ПТС"/>
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
<section id="questions-2">
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-sm-12">
                <h3 class="h1"><span class="h1-span">Ответы на часто </span>задаваемые вопросы</h3>

                <div class="owl-carousel owl-theme questions-block-2">
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Могу ли я вернуть деньги за свой мотоцикл раньше установленного срока? </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">Если вы оформили займ под залог ПТС мотоцикла, вы можете вернуть деньги раньше прописанного в договоре срока. При этом мы не берем никаких пени за досрочный возврат взятой вами суммы.</div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Можете ли вы переоформить мой мотоцикл на ваш автоломбард? </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">Наша компания выдает кредит под залог ПТС мотоцикла. При этом мы только кредитуем. Вы можете не бояться, что наш автоломбард переоформит ваше транспортное средство на себя. Достаточно вернуть взятую сумму досрочно или вовремя, чтобы выполнить взятые перед нами обязательства.</div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">На какой срок можно получить займ под залог мотоцикла?</div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">Если вам срочно нужно решить финансовую проблему, обращайтесь к нам. Наш автоломбард выдает займы под залог ПТС мотоциклов. Срок кредитования составляет от 1 до 5 лет. При желании есть возможность вернуть деньги досрочно. Никаких пени за это не взимается. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reviews-2">
    <div class="container">
        <div class="reviews-2-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="h1">Что говорят о нас</h3>
                    <div class="owl-carousel owl-theme reviews-2">
                        <article class="review-bg-blue">
                            <div class="review-text">В жизни возникли финансовые проблемы, поэтому пришлось брать займ под залог ПТС мотоцикла. Раньше кредиты не брал, но был удивлён, как это легко. Процент низкий, деньги выдали охотно, в тот же день.</div>
                            <div class="review-person">
                                <div class="review-name">Станислав</div>
                            </div>
                        </article>
                        <article class="review-bg-blue">
                            <div class="review-text">Я за один час оформил кредит под залог ПТС мотоцикла. Хоть процент чуть выше, чем в банке, но зато сразу выдали деньги. Даже моя плохая КИ не стала причиной для отказа. Полностью доволен сотрудничеством и рад, что выбрал этот ломбард.</div>
                            <div class="review-person">
                                <div class="review-name">Владимир</div>
                            </div>
                        </article>
                        <article class="review-bg-blue">
                            <div class="review-text">Долго не решался обратиться в автоломбард, но жизненная ситуация вынудила. Пришлось оформлять кредит под залог ПТС мотоцикла. Долг уже полностью погасил. Порадовало то, что мотоцикл всё время оставался у меня.</div>
                            <div class="review-person">
                                <div class="review-name">Андрей</div>
                            </div>
                        </article>
                        <article class="review-bg-blue">
                            <div class="review-text">В этой компании оформлял займ под залог ПТС мотоцикла. Сотрудники компетентные, охотно консультируют и ничего не скрывают. Контора работает честно и прозрачно. Выплатил ровно столько, сколько сразу мне насчитали.</div>
                            <div class="review-person">
                                <div class="review-name">Святослав </div>
                            </div>
                        </article>
                        <article class="review-bg-blue">
                            <div class="review-text">Боялся брать займ под ПТС мотоцикла, а зря. Быстро оформил заявку, сразу получил деньги. Мотоцикл оставался у меня, пришлось только ПТС на время отдать. Долг погасил за 2 месяца и уже вернул себе документ.</div>
                            <div class="review-person">
                                <div class="review-name">Иван</div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="resources">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1">Полезные ресурсы</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6 m-b-30">
                        <div class="resource-bg-grey">
                            <div class="resource-image"><img src="images/fssp.png" alt="Автоломбард под залог ПТС"/>
                            </div>
                            <div class="resource-right">
                                <div class="resource-title">Федеральная служба судебных приставов России</div>
                                <div class="resource-text"><a href="https://fssp.gov.ru/" target="_blank"
                                                              rel="nofollow"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b-30">
                        <div class="resource-bg-grey">
                            <div class="resource-image"><img src="images/fnp.png" alt="Автоломбард под залог ПТС"/>
                            </div>
                            <div class="resource-right">
                                <div class="resource-title">Федеральная нотариальная палата</div>
                                <div class="resource-text">Реестр уведомлений о залоге движимого имущества<br><a
                                        href="https://www.reestr-zalogov.ru/state/index" target="_blank"
                                        rel="nofollow"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b-30">
                        <div class="resource-bg-grey">
                            <div class="resource-image"><img src="images/gibdd.png" alt="Автоломбард под залог ПТС"/>
                            </div>
                            <div class="resource-right">
                                <div class="resource-title">База государственной инспекции безопасности дорожного
                                    движения
                                </div>
                                <div class="resource-text"><a href="https://xn--90adear.xn--p1ai/" target="_blank"
                                                              rel="nofollow"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 m-b-30">
                        <div class="resource-bg-grey">
                            <div class="resource-image"><img src="images/cbr.png" alt="Автоломбард под залог ПТС"/>
                            </div>
                            <div class="resource-right">
                                <div class="resource-title">Центральный банк Российской Федерации</div>
                                <div class="resource-text"><a href="http://cbr.ru/" target="_blank" rel="nofollow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-map">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1">Адреса и контакты</h3>

                <div id="map" class="ofices visible-on-wade visible-on-tablet">
                    <form class="map_filter visible-on-wade visible-on-tablet" action="#">
                        <div id="addresses" class="mapOptions__addresses gradient" itemscope
                             itemtype="http://schema.org/PostalAddress">
                            <div class="map-text">
                                <a href="tel:<?=$tel ?>"><?=$phone ?></a><br>
                            </div>
                            <div id="rootMap">
                            </div>
                        </div>
                    </form>
                </div>
                <script type="text/babel">
                    const dateMap = [{
                        "undefined": "Астрахань Богдана Хмельницкого ул, д. 36",
                        "Longitude": "46.335739",
                        "Latitude": "48.0233103",
                        "Index": "414024",
                        "Город": "Астрахань",
                        "Адреса": "Богдана Хмельницкого ул, д. 36"
                    },
                        {
                            "undefined": "Белгород Михайловское ш, д. 31",
                            "Longitude": "50.5825967",
                            "Latitude": "36.6423653",
                            "Index": "308013",
                            "Город": "Белгород",
                            "Адреса": "Михайловское ш, д. 31"
                        },
                        {
                            "undefined": "Старый Оскол Солнечный мкр, д. 36",
                            "Longitude": "51.3117225",
                            "Latitude": "37.8981075",
                            "Index": "309502",
                            "Город": "Старый Оскол",
                            "Адреса": "Солнечный мкр, д. 36"
                        },
                        {
                            "undefined": "Брянск Литейная ул, д. 68",
                            "Longitude": "53.3317173",
                            "Latitude": "34.2889528",
                            "Index": "241014",
                            "Город": "Брянск",
                            "Адреса": "Литейная ул, д. 68"
                        },
                        {
                            "undefined": "Волгоград Чехова ул, д. 18",
                            "Longitude": "48.59373",
                            "Latitude": "44.413441",
                            "Index": "400023",
                            "Город": "Волгоград",
                            "Адреса": "Чехова ул, д. 18"
                        },
                        {
                            "undefined": "Волжский просп. Ленина, 326 Г",
                            "Longitude": "48.7516107",
                            "Latitude": "44.7981116",
                            "Index": "404133",
                            "Город": "Волжский",
                            "Адреса": "просп. Ленина, 326 Г"
                        },
                        {
                            "undefined": "Владимир Горького ул, д. 65",
                            "Longitude": "56.140629",
                            "Latitude": "40.394392",
                            "Index": "600017",
                            "Город": "Владимир",
                            "Адреса": "Горького ул, д. 65"
                        },
                        {
                            "undefined": "Владимир Горького ул, д. 65",
                            "Longitude": "56.140629",
                            "Latitude": "40.394392",
                            "Index": "600017",
                            "Город": "Великий Новгород",
                            "Адреса": "Стратилатовская ул, д. 5"
                        },
                        {
                            "undefined": "Воронеж Фридриха Энгельса ул, д. 25б",
                            "Longitude": "51.6688449",
                            "Latitude": "39.2048469",
                            "Index": "394036",
                            "Город": "Воронеж",
                            "Адреса": "Фридриха Энгельса ул, д. 25б"
                        },
                        {
                            "undefined": "Вологда Чехова ул, д. 18",
                            "Longitude": "59.211288",
                            "Latitude": "39.88535",
                            "Index": "160009",
                            "Город": "Вологда",
                            "Адреса": "Чехова ул, д. 18"
                        },
                        {
                            "undefined": "Череповец пер. Ухтомского, 5",
                            "Longitude": "59.118364",
                            "Latitude": "37.9143089",
                            "Index": "162602",
                            "Город": "Череповец",
                            "Адреса": "пер. Ухтомского, 5"
                        },
                        {
                            "undefined": "Дзержинск Красноармейская ул, д. 21",
                            "Longitude": "56.2480479",
                            "Latitude": "43.4192534",
                            "Index": "606015",
                            "Город": "Дзержинск",
                            "Адреса": "Красноармейская ул, д. 21"
                        },
                        {
                            "undefined": "Нижний Новгород ул.Рождественская, 13, 2 этаж, 3 офис",
                            "Longitude": "56.330243",
                            "Latitude": "43.9961776",
                            "Index": "603001",
                            "Город": "Нижний Новгород",
                            "Адреса": "ул.Рождественская, 13, 2 этаж, 3 офис"
                        },
                        {
                            "undefined": "Кемерово ул. Пирогова, 32",
                            "Longitude": "55.3443282",
                            "Latitude": "86.0620865",
                            "Index": "600017",
                            "Город": "Кемерово",
                            "Адреса": "ул. Пирогова, 32"
                        },
                        {
                            "undefined": "Новокузнецк Ленина пр-кт, д. 7",
                            "Longitude": "53.76919",
                            "Latitude": "87.186149",
                            "Index": "654034",
                            "Город": "Новокузнецк",
                            "Адреса": "Ленина пр-кт, д. 7"
                        },
                        {
                            "undefined": "Прокопьевск Ноградская ул., 28-а",
                            "Longitude": "53.8744939",
                            "Latitude": "86.6397549",
                            "Index": "653045",
                            "Город": "Прокопьевск",
                            "Адреса": "Ноградская ул., 28-а"
                        },
                        {
                            "undefined": "Краснодар Северная, 490, БЦ Кутузовский, 1 этаж",
                            "Longitude": "45.0367027",
                            "Latitude": "38.9964005",
                            "Index": "350002",
                            "Город": "Краснодар",
                            "Адреса": "Северная, 490, БЦ Кутузовский, 1 этаж"
                        },
                        {
                            "undefined": "Сочи Кубанская ул, д. 15",
                            "Longitude": "43.5782004",
                            "Latitude": "39.7306993",
                            "Index": "354000",
                            "Город": "Сочи",
                            "Адреса": "Кубанская ул, д. 15"
                        },
                        {
                            "undefined": "Армавир Мира ул, д. 24",
                            "Longitude": "44.9969711",
                            "Latitude": "41.1287957",
                            "Index": "352900",
                            "Город": "Армавир",
                            "Адреса": "Мира ул, д. 24"
                        },
                        {
                            "undefined": "Новороссийск Пр-кт Дзержинского 183 (вход со стороны ул. Дзержинского)",
                            "Longitude": "44.692561",
                            "Latitude": "37.7794749",
                            "Index": "353910",
                            "Город": "Новороссийск",
                            "Адреса": "Пр-кт Дзержинского 183 (вход со стороны ул. Дзержинского)"
                        },
                        {
                            "undefined": "Курск Кулакова пр-кт, д. 24",
                            "Longitude": "51.66474",
                            "Latitude": "36.135793",
                            "Index": "305018",
                            "Город": "Курск",
                            "Адреса": "Кулакова пр-кт, д. 24"
                        },
                        {
                            "undefined": "Ставрополь Ул. Доваторцев 49Б (на 2 этаже над сбербанком)",
                            "Longitude": "45.010461",
                            "Latitude": "41.9286377",
                            "Index": "355042",
                            "Город": "Ставрополь",
                            "Адреса": "Ул. Доваторцев 49Б (на 2 этаже над сбербанком)"
                        },
                        {
                            "undefined": "Курган Машиностроителей пр-кт, д. 3в",
                            "Longitude": "55.452769",
                            "Latitude": "65.3397179",
                            "Index": "150055",
                            "Город": "Курган",
                            "Адреса": "Машиностроителей пр-кт, д. 3в"
                        },
                        {
                            "undefined": "Чита ул. Мостовая, 3",
                            "Longitude": "52.0393778",
                            "Latitude": "113.4778132",
                            "Index": "672000",
                            "Город": "Чита",
                            "Адреса": "ул. Мостовая, 3"
                        },
                        {
                            "undefined": "Красноярск Вильского ул, д. 22",
                            "Longitude": "56.0208545",
                            "Latitude": "92.7641713",
                            "Index": "660113",
                            "Город": "Красноярск",
                            "Адреса": "Вильского ул, д. 22"
                        },
                        {
                            "undefined": "Норильск Молодежный проезд, д. 3",
                            "Longitude": "69.3549366",
                            "Latitude": "88.1745093",
                            "Index": "663319",
                            "Город": "Норильск",
                            "Адреса": "Молодежный проезд, д. 3"
                        },
                        {
                            "undefined": "Кострома Калиновская ул, д. 56",
                            "Longitude": "57.7741475",
                            "Latitude": "40.9453862",
                            "Index": "156013",
                            "Город": "Кострома",
                            "Адреса": "Калиновская ул, д. 56"
                        },
                        {
                            "undefined": "Киров Комсомольская ул, д. 50",
                            "Longitude": "58.5749849",
                            "Latitude": "49.6383498",
                            "Index": "610035",
                            "Город": "Киров",
                            "Адреса": "Комсомольская ул, д. 50"
                        },
                        {
                            "undefined": "Чебоксары ул. Энгельса, 28",
                            "Longitude": "56.120672",
                            "Latitude": "47.2582459",
                            "Index": "428003",
                            "Город": "Чебоксары",
                            "Адреса": "ул. Энгельса, 28"
                        },
                        {
                            "undefined": "Москва улица Ленинская Слобода, 19, 3 этаж, офис 3,034 (БЦ Омега Плаза)",
                            "Longitude": "55.7084315",
                            "Latitude": "37.6527952",
                            "Index": "115280",
                            "Город": "Москва",
                            "Адреса": "улица Ленинская Слобода, 19, 3 этаж, офис 3,034 (БЦ Омега Плаза)"
                        },
                        {
                            "undefined": "Балашиха Фадеева ул, д. 5",
                            "Longitude": "55.7946111",
                            "Latitude": "37.9720841",
                            "Index": "143900",
                            "Город": "Балашиха",
                            "Адреса": "Фадеева ул, д. 5"
                        },
                        {
                            "undefined": "Электросталь Красная ул, д. 30б",
                            "Longitude": "55.7864157",
                            "Latitude": "38.4508797",
                            "Index": "144000",
                            "Город": "Электросталь",
                            "Адреса": "Красная ул, д. 30б"
                        },
                        {
                            "undefined": "Химки Московская ул, д. 3",
                            "Longitude": "55.8933055",
                            "Latitude": "37.4498698",
                            "Index": "141402",
                            "Город": "Химки",
                            "Адреса": "Московская ул, д. 3"
                        },
                        {
                            "undefined": "Красногорск Железнодорожный пер, д. 3",
                            "Longitude": "55.816076",
                            "Latitude": "37.340669",
                            "Index": "143402",
                            "Город": "Красногорск",
                            "Адреса": "Железнодорожный пер, д. 3"
                        },
                        {
                            "undefined": "Мытищи Осташковское ш, д. 1",
                            "Longitude": "55.8974247",
                            "Latitude": "37.6661978",
                            "Index": "141014",
                            "Город": "Мытищи",
                            "Адреса": "Осташковское ш, д. 1"
                        },
                        {
                            "undefined": "Королёв Карла Маркса ул, д. 3",
                            "Longitude": "55.9247363",
                            "Latitude": "37.8200547",
                            "Index": "141070",
                            "Город": "Королёв",
                            "Адреса": "Карла Маркса ул, д. 3"
                        },
                        {
                            "undefined": "Подольск Большая Серпуховская ул, д. 30",
                            "Longitude": "55.420307",
                            "Latitude": "37.5462621",
                            "Index": "142104",
                            "Город": "Подольск",
                            "Адреса": "Большая Серпуховская ул, д. 30"
                        },
                        {
                            "undefined": "Люберцы Волковская ул, д. 11",
                            "Longitude": "55.681033",
                            "Latitude": "37.8961048",
                            "Index": "140000",
                            "Город": "Люберцы",
                            "Адреса": "Волковская ул, д. 11"
                        },
                        {
                            "undefined": "Саратов Симбирская ул, д. 154",
                            "Longitude": "51.5561227",
                            "Latitude": "46.0449237",
                            "Index": "410003",
                            "Город": "Саратов",
                            "Адреса": "Симбирская ул, д. 154"
                        },
                        {
                            "undefined": "Балаково ул. Минская, д.56",
                            "Longitude": "52.0099811",
                            "Latitude": "47.7976955",
                            "Index": "413841",
                            "Город": "Балаково",
                            "Адреса": "ул. Минская, д.56"
                        },
                        {
                            "undefined": "Энгельс Петровская ул, д. 63",
                            "Longitude": "51.4978144",
                            "Latitude": "46.1169468",
                            "Index": "413100",
                            "Город": "Энгельс",
                            "Адреса": "Петровская ул, д. 63"
                        },
                        {
                            "undefined": "Южно-Сахалинск пр. Мира, 239",
                            "Longitude": "46.9404898",
                            "Latitude": "142.744537",
                            "Index": "693013",
                            "Город": "Южно-Сахалинск",
                            "Адреса": "пр. Мира, 239"
                        },
                        {
                            "undefined": "Якутск Вилюйский тракт, 1",
                            "Longitude": "62.0347618",
                            "Latitude": "129.6673826",
                            "Index": "677000",
                            "Город": "Якутск",
                            "Адреса": "Вилюйский тракт, 1"
                        },
                        {
                            "undefined": "Санкт-Петербург Пр-кт Маршала Блюхера 12 корпус 7, офис 1.1. (станция метро Лесная)",
                            "Longitude": "59.981865",
                            "Latitude": "30.375452",
                            "Index": "195197",
                            "Город": "Санкт-Петербург",
                            "Адреса": "Пр-кт Маршала Блюхера 12 корпус 7, офис 1.1. (станция метро Лесная)"
                        },
                        {
                            "undefined": "Сыктывкар Интернациональная ул, д. 157",
                            "Longitude": "61.6672081",
                            "Latitude": "50.8331468",
                            "Index": "167000",
                            "Город": "Сыктывкар",
                            "Адреса": "Интернациональная ул, д. 157"
                        },
                        {
                            "undefined": "Томск Фрунзе пр-кт, д. 124",
                            "Longitude": "56.4763824",
                            "Latitude": "84.9872164",
                            "Index": "634021",
                            "Город": "Томск",
                            "Адреса": "Фрунзе пр-кт, д. 124"
                        },
                        {
                            "undefined": "Ульяновск Краснопролетарская ул, д. 16",
                            "Longitude": "54.3309807",
                            "Latitude": "48.4849081",
                            "Index": "432007",
                            "Город": "Ульяновск",
                            "Адреса": "Краснопролетарская ул, д. 16"
                        },
                        {
                            "undefined": "Улан-Удэ 34, ул. Бабушкина",
                            "Longitude": "51.809399",
                            "Latitude": "107.5969129",
                            "Index": "670031",
                            "Город": "Улан-Удэ",
                            "Адреса": "34, ул. Бабушкина"
                        },
                        {
                            "undefined": "Тюмень Локомотивная ул, д. 116/2",
                            "Longitude": "57.1494188",
                            "Latitude": "65.484614",
                            "Index": "625025",
                            "Город": "Тюмень",
                            "Адреса": "Локомотивная ул, д. 116/2"
                        },
                        {
                            "undefined": "Тула Красноармейский пр-кт, д. 11а",
                            "Longitude": "54.1965713",
                            "Latitude": "37.6019082",
                            "Index": "300041",
                            "Город": "Тула",
                            "Адреса": "Красноармейский пр-кт, д. 11а"
                        },
                        {
                            "undefined": "Самара Лазо ул, д. 14",
                            "Longitude": "53.3469497",
                            "Latitude": "50.2141895",
                            "Index": "443026",
                            "Город": "Самара",
                            "Адреса": "Лазо ул, д. 14"
                        },
                        {
                            "undefined": "Сызрань Ул. Гагарина 104 (жилой дом офис рядом с нотариусом)",
                            "Longitude": "53.1257042",
                            "Latitude": "48.4138342",
                            "Index": "446028",
                            "Город": "Сызрань",
                            "Адреса": "Ул. Гагарина 104 (жилой дом офис рядом с нотариусом)"
                        },
                        {
                            "undefined": "Тольятти Революционная ул, д. 18а",
                            "Longitude": "53.531511",
                            "Latitude": "49.276121",
                            "Index": "445032",
                            "Город": "Тольятти",
                            "Адреса": "Революционная ул, д. 18а"
                        },
                        {
                            "undefined": "Салават Монтажников б-р, д. 48/2",
                            "Longitude": "53.3719789",
                            "Latitude": "55.9452123",
                            "Index": "453252",
                            "Город": "Салават",
                            "Адреса": "Монтажников б-р, д. 48/2"
                        },
                        {
                            "undefined": "Стерлитамак Коммунистическая ул, д. 84",
                            "Longitude": "53.6199323",
                            "Latitude": "55.9066724",
                            "Index": "453120",
                            "Город": "Стерлитамак",
                            "Адреса": "Коммунистическая ул, д. 84"
                        },
                        {
                            "undefined": "Уфа ул Бакалинская 25",
                            "Longitude": "54.7189242",
                            "Latitude": "55.9870381",
                            "Index": "450073",
                            "Город": "Уфа",
                            "Адреса": "ул Бакалинская 25"
                        },
                        {
                            "undefined": "Саранск Веселовского ул, д. 31",
                            "Longitude": "54.2264826",
                            "Latitude": "45.1311999",
                            "Index": "430021",
                            "Город": "Саранск",
                            "Адреса": "Веселовского ул, д. 31"
                        },
                        {
                            "undefined": "Хабаровск Большая ул, д. 2а",
                            "Longitude": "48.4979443",
                            "Latitude": "135.0990308",
                            "Index": "680009",
                            "Город": "Хабаровск",
                            "Адреса": "Большая ул, д. 2а"
                        },
                        {
                            "undefined": "Нижневартовск Северная ул., 19",
                            "Longitude": "60.956817",
                            "Latitude": "76.58085",
                            "Index": "628609",
                            "Город": "Нижневартовск",
                            "Адреса": "Северная ул., 19"
                        },
                        {
                            "undefined": "Северодвинск ул. Ломоносова, 71 А",
                            "Longitude": "64.5536658",
                            "Latitude": "39.802804",
                            "Index": "164504",
                            "Город": "Северодвинск",
                            "Адреса": "ул. Ломоносова, 71 А"
                        },
                        {
                            "undefined": "Архангельск Московский пр-кт, д. 25",
                            "Longitude": "64.5327258",
                            "Latitude": "40.5925948",
                            "Index": "163002",
                            "Город": "Архангельск",
                            "Адреса": "Московский пр-кт, д. 25"
                        },
                        {
                            "undefined": "Ярославль Толбухина пр-кт, д. 8/75",
                            "Longitude": "57.6206272",
                            "Latitude": "39.8588887",
                            "Index": "150014",
                            "Город": "Ярославль",
                            "Адреса": "Толбухина пр-кт, д. 8/75"
                        },
                        {
                            "undefined": "Рыбинск Герцена ул, д. 48а",
                            "Longitude": "58.048626",
                            "Latitude": "38.839466",
                            "Index": "152934",
                            "Город": "Рыбинск",
                            "Адреса": "Герцена ул, д. 48а"
                        },
                        {
                            "undefined": "Рязань Маяковского ул, д. 1а",
                            "Longitude": "54.6154272",
                            "Latitude": "39.7525963",
                            "Index": "390046",
                            "Город": "Рязань",
                            "Адреса": "Маяковского ул, д. 1а"
                        },
                        {
                            "undefined": "Псков Яна Фабрициуса ул, д. 10",
                            "Longitude": "57.80717",
                            "Latitude": "28.3466772",
                            "Index": "180000",
                            "Город": "Псков",
                            "Адреса": "Яна Фабрициуса ул, д. 10"
                        },
                        {
                            "undefined": "Тверь Софьи Перовской ул, д. 28",
                            "Longitude": "56.8584719",
                            "Latitude": "35.8844564",
                            "Index": "170006",
                            "Город": "Тверь",
                            "Адреса": "Софьи Перовской ул, д. 28"
                        },
                        {
                            "undefined": "Тамбов Советская ул, д. 125",
                            "Longitude": "52.735737",
                            "Latitude": "41.453014",
                            "Index": "392008",
                            "Город": "Тамбов",
                            "Адреса": "Советская ул, д. 125"
                        },
                        {
                            "undefined": "Липецк Победы пр-кт, д. 29",
                            "Longitude": "52.5968568",
                            "Latitude": "39.5675221",
                            "Index": "398024",
                            "Город": "Липецк",
                            "Адреса": "Победы пр-кт, д. 29"
                        },
                        {
                            "undefined": "Мурманск Ленина пр-кт, д. 82",
                            "Longitude": "68.9712018",
                            "Latitude": "33.0765628",
                            "Index": "183038",
                            "Город": "Мурманск",
                            "Адреса": "Ленина пр-кт, д. 82"
                        },
                        {
                            "undefined": "Новосибирск ул. Коммунистическая 27/29",
                            "Longitude": "55.0233112",
                            "Latitude": "82.9173795",
                            "Index": "630007",
                            "Город": "Новосибирск",
                            "Адреса": "ул. Коммунистическая 27/29"
                        },
                        {
                            "undefined": "Омск Серова ул, д. 19а",
                            "Longitude": "54.940583",
                            "Latitude": "73.382547",
                            "Index": "644020",
                            "Город": "Омск",
                            "Адреса": "Серова ул, д. 19а"
                        },
                        {
                            "undefined": "Иваново Ленина пр-кт, д. 108",
                            "Longitude": "57.0172029",
                            "Latitude": "40.9701735",
                            "Index": "153002",
                            "Город": "Иваново",
                            "Адреса": "Ленина пр-кт, д. 108"
                        },
                        {
                            "undefined": "Челябинск Университетская Набережная ул, д. 66б",
                            "Longitude": "55.1700196",
                            "Latitude": "61.3043173",
                            "Index": "692777",
                            "Город": "Челябинск",
                            "Адреса": "Университетская Набережная ул, д. 66б"
                        },
                        {
                            "undefined": "Златоуст 40-летия Победы ул, д. 20",
                            "Longitude": "55.1244316",
                            "Latitude": "59.7189427",
                            "Index": "456238",
                            "Город": "Златоуст",
                            "Адреса": "40-летия Победы ул, д. 20"
                        },
                        {
                            "undefined": "Магнитогорск Ленина пр-кт, д. 139",
                            "Longitude": "53.3652777",
                            "Latitude": "58.9918804",
                            "Index": "455021",
                            "Город": "Магнитогорск",
                            "Адреса": "Ленина пр-кт, д. 139"
                        },
                        {
                            "undefined": "Миасс Октября пр-кт, д. 21",
                            "Longitude": "55.1377138",
                            "Latitude": "60.1535306",
                            "Index": "456318",
                            "Город": "Миасс",
                            "Адреса": "Октября пр-кт, д. 21"
                        },
                        {
                            "undefined": "Екатеринбург Ул. Ленина 25 ТЦ Европа 4 этаж оф 106 (вход через вторую дверь \"вертушкой\")",
                            "Longitude": "56.8386868",
                            "Latitude": "60.5949801",
                            "Index": "620014",
                            "Город": "Екатеринбург",
                            "Адреса": "Ул. Ленина 25 ТЦ Европа 4 этаж оф 106 (вход через вторую дверь \"вертушкой\")"
                        },
                        {
                            "undefined": "Нижний Тагил Строителей пр-кт, д. 16",
                            "Longitude": "57.9088832",
                            "Latitude": "59.9846078",
                            "Index": "622034",
                            "Город": "Нижний Тагил",
                            "Адреса": "Строителей пр-кт, д. 16"
                        },
                        {
                            "undefined": "Каменск-Уральский Кутузова ул, д. 27",
                            "Longitude": "56.390316",
                            "Latitude": "61.9211889",
                            "Index": "623430",
                            "Город": "Каменск-Уральский",
                            "Адреса": "Кутузова ул, д. 27"
                        },
                        {
                            "undefined": "Оренбург Дзержинского пр-кт, д. 4",
                            "Longitude": "51.8265429",
                            "Latitude": "55.1146214",
                            "Index": "460038",
                            "Город": "Оренбург",
                            "Адреса": "Дзержинского пр-кт, д. 4"
                        },
                        {
                            "undefined": "Орск Мира пр-кт, д. 7",
                            "Longitude": "51.2282269",
                            "Latitude": "58.5053159",
                            "Index": "462403",
                            "Город": "Орск",
                            "Адреса": "Мира пр-кт, д. 7"
                        },
                        {
                            "undefined": "Орёл ул. Михалицина, 61",
                            "Longitude": "52.9953645",
                            "Latitude": "36.1110953",
                            "Index": "302025",
                            "Город": "Орёл",
                            "Адреса": "ул. Михалицина, 61"
                        },
                        {
                            "undefined": "Калуга Гагарина ул, д. 4",
                            "Longitude": "54.514852",
                            "Latitude": "36.242388",
                            "Index": "248000",
                            "Город": "Калуга",
                            "Адреса": "Гагарина ул, д. 4"
                        },
                        {
                            "undefined": "Калининград А.Невского ул, д. 193а",
                            "Longitude": "54.7486443",
                            "Latitude": "20.536815",
                            "Index": "236029",
                            "Город": "Калининград",
                            "Адреса": "А.Невского ул, д. 193а"
                        },
                        {
                            "undefined": "Благовещенск Октябрьская ул, д. 173/1",
                            "Longitude": "50.2711997",
                            "Latitude": "127.5383613",
                            "Index": "675016",
                            "Город": "Благовещенск",
                            "Адреса": "Октябрьская ул, д. 173/1"
                        },
                        {
                            "undefined": "Пермь ул. Петропаловская 41 оф 204",
                            "Longitude": "58.0134977",
                            "Latitude": "56.2392396",
                            "Index": "614045",
                            "Город": "Пермь",
                            "Адреса": "ул. Петропаловская 41 оф 204"
                        },
                        {
                            "undefined": "Пенза Чехова ул, д. 3б",
                            "Longitude": "53.1991359",
                            "Latitude": "45.021645",
                            "Index": "440000",
                            "Город": "Пенза",
                            "Адреса": "Чехова ул, д. 3б"
                        },
                        {
                            "undefined": "Находка Находкинский пр-кт, д. 12",
                            "Longitude": "42.8253471",
                            "Latitude": "132.8931304",
                            "Index": "692904",
                            "Город": "Находка",
                            "Адреса": "Находкинский пр-кт, д. 12"
                        },
                        {
                            "undefined": "Уссурийск ул. Ленина, 122",
                            "Longitude": "43.7995525",
                            "Latitude": "131.9553983",
                            "Index": "692519",
                            "Город": "Уссурийск",
                            "Адреса": "ул. Ленина, 122"
                        },
                        {
                            "undefined": "Петропавловск-Камчатский 50 Лет Октября просп",
                            "Longitude": "53.0550474",
                            "Latitude": "158.6370749",
                            "Index": "683024",
                            "Город": "Петропавловск-Камчатский",
                            "Адреса": "50 Лет Октября просп"
                        },
                        {
                            "undefined": "Петрозаводск Ленина пр-кт, д. 15",
                            "Longitude": "61.7905275",
                            "Latitude": "34.3658882",
                            "Index": "185035",
                            "Город": "Петрозаводск",
                            "Адреса": "Ленина пр-кт, д. 15"
                        },
                        {
                            "undefined": "Смоленск Кловская ул, д. 19а",
                            "Longitude": "54.775478",
                            "Latitude": "31.998343",
                            "Index": "214038",
                            "Город": "Смоленск",
                            "Адреса": "Кловская ул, д. 19а"
                        },
                        {
                            "undefined": "Барнаул Антона Петрова ул, д. 170",
                            "Longitude": "53.3591672",
                            "Latitude": "83.7036861",
                            "Index": "656050",
                            "Город": "Барнаул",
                            "Адреса": "Антона Петрова ул, д. 170"
                        },
                        {
                            "undefined": "Бийск Вали Максимовой ул, д. 85/1",
                            "Longitude": "52.5328604",
                            "Latitude": "85.1773608",
                            "Index": "659303",
                            "Город": "Бийск",
                            "Адреса": "Вали Максимовой ул, д. 85/1"
                        },
                        {
                            "undefined": "Иркутск Советская ул, д. 136",
                            "Longitude": "52.2794953",
                            "Latitude": "104.3241141",
                            "Index": "664009",
                            "Город": "Иркутск",
                            "Адреса": "Советская ул, д. 136"
                        },
                        {
                            "undefined": "Ангарск 86-й кв-л, 1",
                            "Longitude": "52.5327512",
                            "Latitude": "103.886292",
                            "Index": "665825",
                            "Город": "Ангарск",
                            "Адреса": "86-й кв-л, 1"
                        },
                        {
                            "undefined": "Братск ул. Наймушина, 4",
                            "Longitude": "56.3095414",
                            "Latitude": "101.7508487",
                            "Index": "665709",
                            "Город": "Братск",
                            "Адреса": "ул. Наймушина, 4"
                        },
                        {
                            "undefined": "Севастополь ул. Парковая, 29",
                            "Longitude": "44.5982707",
                            "Latitude": "33.4595152",
                            "Index": "423585",
                            "Город": "Севастополь",
                            "Адреса": "ул. Парковая, 29"
                        },
                        {
                            "undefined": "Симферополь ул. Маяковского, 14",
                            "Longitude": "44.9506286",
                            "Latitude": "34.0888239",
                            "Index": "420111",
                            "Город": "Симферополь",
                            "Адреса": "ул. Маяковского, 14"
                        },
                        {
                            "undefined": "Нальчик ул. Ногмова, 75",
                            "Longitude": "43.491202",
                            "Latitude": "43.5983488",
                            "Index": "360004",
                            "Город": "Нальчик",
                            "Адреса": "ул. Ногмова, 75"
                        },
                        {
                            "undefined": "Казань ул.Пушкина 30, 2 этаж, офис 211",
                            "Longitude": "55.7914528",
                            "Latitude": "49.1251417",
                            "Index": "420111",
                            "Город": "Казань",
                            "Адреса": "ул.Пушкина 30, 2 этаж, офис 211"
                        },
                        {
                            "undefined": "Альметьевск Ленина ул, д. 60",
                            "Longitude": "54.8997794",
                            "Latitude": "52.2920335",
                            "Index": "423450",
                            "Город": "Альметьевск",
                            "Адреса": "Ленина ул, д. 60"
                        },
                        {
                            "undefined": "Нижнекамск Южная ул, д. 3",
                            "Longitude": "55.6139122",
                            "Latitude": "51.7844298",
                            "Index": "423585",
                            "Город": "Нижнекамск",
                            "Адреса": "Южная ул, д. 3"
                        },
                        {
                            "undefined": "Набережные челны Мира пр-кт, д. 8а",
                            "Longitude": "55.7258189",
                            "Latitude": "52.3874565",
                            "Index": "423814",
                            "Город": "Набережные челны",
                            "Адреса": "Мира пр-кт, д. 8а"
                        },
                        {
                            "undefined": "Абакан Тараса Шевченко ул, д. 62",
                            "Longitude": "53.7201647",
                            "Latitude": "91.4587105",
                            "Index": "655012",
                            "Город": "Абакан",
                            "Адреса": "Тараса Шевченко ул, д. 62"
                        },
                        {
                            "undefined": "Йошкар-Ола Комсомольская ул, д. 79",
                            "Longitude": "56.6468165",
                            "Latitude": "47.900845",
                            "Index": "424004",
                            "Город": "Йошкар-Ола",
                            "Адреса": "Комсомольская ул, д. 79"
                        },
                        {
                            "undefined": "Ижевск Воткинское шоссе, 162, оф.18",
                            "Longitude": "56.890287",
                            "Latitude": "53.2693529",
                            "Index": "426039",
                            "Город": "Ижевск",
                            "Адреса": "Воткинское шоссе, 162, оф.18"
                        },
                        {
                            "undefined": "Ростов-на-Дону Ул. Ленина 54, (рядом салон красоты \"Светлана\")",
                            "Longitude": "47.2496889",
                            "Latitude": "39.717606",
                            "Index": "344000",
                            "Город": "Ростов-на-Дону",
                            "Адреса": "Ул. Ленина 54, (рядом салон красоты \"Светлана\")"
                        },
                        {
                            "undefined": "Волгодонск Ленина ул, д. 45",
                            "Longitude": "47.5199426",
                            "Latitude": "42.1515737",
                            "Index": "347360",
                            "Город": "Волгодонск",
                            "Адреса": "Ленина ул, д. 45"
                        },
                        {
                            "undefined": "Аксай пр. Ленина, 24",
                            "Longitude": "47.2656354",
                            "Latitude": "39.8605587",
                            "Index": "346720",
                            "Город": "Аксай",
                            "Адреса": "пр. Ленина, 24"
                        },
                        {
                            "undefined": "Батайск Ул. Максима Горького 285Г",
                            "Longitude": "47.1381791",
                            "Latitude": "39.7148327",
                            "Index": "346880",
                            "Город": "Батайск",
                            "Адреса": "Ул. Максима Горького 285Г"
                        },
                        {
                            "undefined": "Шахты Победа Революции пр-т., 188",
                            "Longitude": "47.6924472",
                            "Latitude": "40.2037742",
                            "Index": "346524",
                            "Город": "Шахты",
                            "Адреса": "Победа Революции пр-т., 188"
                        },
                        {
                            "undefined": "Таганрог ул. Москатова, 10-1",
                            "Longitude": "47.2623494",
                            "Latitude": "38.917375",
                            "Index": "347924",
                            "Город": "Таганрог",
                            "Адреса": "ул. Москатова, 10-1"
                        },
                        {
                            "undefined": "Новочеркасск Новочеркасское шоссе 1А (поворот на грушевку)",
                            "Longitude": "47.3368662",
                            "Latitude": "39.8689832",
                            "Index": "346735",
                            "Город": "Новочеркасск",
                            "Адреса": "Новочеркасское шоссе 1А (поворот на грушевку)"
                        },
                        {
                            "undefined": "Владивосток ул. Батарейная, 3а, офис 310",
                            "Longitude": "43.120086",
                            "Latitude": "131.8774404",
                            "Index": "690091",
                            "Город": "Владивосток",
                            "Адреса": "ул. Батарейная, 3а, офис 310"
                        },
                        {
                            "undefined": "Сургут ул. Игоря Киртбая, 11",
                            "Longitude": "61.270299",
                            "Latitude": "73.3610136",
                            "Index": "628400",
                            "Город": "Сургут",
                            "Адреса": "ул. Игоря Киртбая, 11"
                        },
                        {
                            "undefined": "Керчь улица Ленина, 45",
                            "Longitude": "45.3531026",
                            "Latitude": "36.4742842",
                            "Index": "601901",
                            "Город": "Керчь",
                            "Адреса": "улица Ленина, 45"
                        },
                        {
                            "undefined": "Пятигорск улица Ермолова, 28с2",
                            "Longitude": "44.047087",
                            "Latitude": "43.0126546",
                            "Index": "357500",
                            "Город": "Пятигорск",
                            "Адреса": "улица Ермолова, 28с2"
                        },
                        {
                            "undefined": "Копейск проспект Ильича, 13",
                            "Longitude": "55.108263",
                            "Latitude": "61.6112031",
                            "Index": "456623",
                            "Город": "Копейск",
                            "Адреса": "проспект Ильича, 13"
                        },
                        {
                            "undefined": "Рубцовск Комсомольская улица, 257",
                            "Longitude": "51.5091242",
                            "Latitude": "81.202193",
                            "Index": "658200",
                            "Город": "Рубцовск",
                            "Адреса": "Комсомольская улица, 257"
                        },
                        {
                            "undefined": "Майкоп Краснооктябрьская ул., 50",
                            "Longitude": "44.6149876",
                            "Latitude": "40.1066554",
                            "Index": "385000",
                            "Город": "Майкоп",
                            "Адреса": "Краснооктябрьская ул., 50"
                        },
                        {
                            "undefined": "Коломна проспект Кирова, 28А/2",
                            "Longitude": "55.0836538",
                            "Latitude": "38.7624039",
                            "Index": "140411",
                            "Город": "Коломна",
                            "Адреса": "проспект Кирова, 28А/2"
                        },
                        {
                            "undefined": "Березники улица Карла Маркса, 53",
                            "Longitude": "59.4053067",
                            "Latitude": "56.801973",
                            "Index": "618400",
                            "Город": "Березники",
                            "Адреса": "улица Карла Маркса, 53"
                        },
                        {
                            "undefined": "Домодедово улица Кирова, с28",
                            "Longitude": "55.4316116",
                            "Latitude": "37.7512829",
                            "Index": "142000",
                            "Город": "Домодедово",
                            "Адреса": "улица Кирова, с28"
                        },
                        {
                            "undefined": "Ковров проспект Ленина, 35",
                            "Longitude": "56.3574322",
                            "Latitude": "41.3109678",
                            "Index": "601901",
                            "Город": "Ковров",
                            "Адреса": "проспект Ленина, 35"
                        },
                        {
                            "undefined": "Одинцово Можайское ш., 71 ТЦ Дубрава",
                            "Longitude": "55.6774931",
                            "Latitude": "37.2805823",
                            "Index": "143007",
                            "Город": "Одинцово",
                            "Адреса": "Можайское ш., 71 ТЦ Дубрава"
                        },
                        {
                            "undefined": "Нефтекамск улица Ленина, 46",
                            "Longitude": "56.09444",
                            "Latitude": "54.2333178",
                            "Index": "452683",
                            "Город": "Нефтекамск",
                            "Адреса": "улица Ленина, 46"
                        },
                        {
                            "undefined": "Кисловодск улица Тельмана, 5",
                            "Longitude": "43.9065598",
                            "Latitude": "42.7107066",
                            "Index": "357700",
                            "Город": "Кисловодск",
                            "Адреса": "улица Тельмана, 5"
                        },
                        {
                            "undefined": "Нефтеюганск 5-й микрорайон, 6",
                            "Longitude": "61.0953922",
                            "Latitude": "72.6059357",
                            "Index": "628301",
                            "Город": "Нефтеюганск",
                            "Адреса": "5-й микрорайон, 6"
                        },
                        {
                            "undefined": "Новочебоксарск улица Семёнова, 37",
                            "Longitude": "56.107868",
                            "Latitude": "47.4751352",
                            "Index": "429965",
                            "Город": "Новочебоксарск",
                            "Адреса": "улица Семёнова, 37"
                        },
                        {
                            "undefined": "Щёлково улица Комарова, 2",
                            "Longitude": "55.9203061",
                            "Latitude": "37.9922025",
                            "Index": "141100",
                            "Город": "Щёлково",
                            "Адреса": "улица Комарова, 2"
                        },
                        {
                            "undefined": "Новомосковск Комсомольская улица, 30",
                            "Longitude": "54.010725",
                            "Latitude": "38.286777",
                            "Index": "301650",
                            "Город": "Новомосковск",
                            "Адреса": "Комсомольская улица, 30"
                        },
                        {
                            "undefined": "Раменское улица Карла Маркса, 6",
                            "Longitude": "55.569386",
                            "Latitude": "38.2267399",
                            "Index": "140108",
                            "Город": "Раменское",
                            "Адреса": "улица Карла Маркса, 6"
                        },
                        {
                            "undefined": "Первоуральск улица Ватутина, 42",
                            "Longitude": "56.9056267",
                            "Latitude": "59.9442997",
                            "Index": "623104",
                            "Город": "Первоуральск",
                            "Адреса": "улица Ватутина, 42"
                        },
                        {
                            "undefined": "Кызыл улица Кочетова, 53",
                            "Longitude": "51.718968",
                            "Latitude": "94.438587",
                            "Index": "667000",
                            "Город": "Кызыл",
                            "Адреса": "улица Кочетова, 53"
                        },
                        {
                            "undefined": "Орехово-Зуево Центральный бульвар, 3",
                            "Longitude": "55.8040889",
                            "Latitude": "38.9796467",
                            "Index": "142600",
                            "Город": "Орехово-Зуево",
                            "Адреса": "Центральный бульвар, 3"
                        },
                        {
                            "undefined": "Новый Уренгой Ленинградский проспект, 8",
                            "Longitude": "66.0832715",
                            "Latitude": "76.6766004",
                            "Index": "629300",
                            "Город": "Новый Уренгой",
                            "Адреса": "Ленинградский проспект, 8"
                        },
                        {
                            "undefined": "Обнинск проспект Маркса, 50",
                            "Longitude": "55.1175454",
                            "Latitude": "36.5994164",
                            "Index": "249032",
                            "Город": "Обнинск",
                            "Адреса": "проспект Маркса, 50"
                        },
                        {
                            "undefined": "Невинномысск улица Гагарина, 17",
                            "Longitude": "44.63796",
                            "Latitude": "41.9428424",
                            "Index": "357108",
                            "Город": "Невинномысск",
                            "Адреса": "улица Гагарина, 17"
                        },
                        {
                            "undefined": "Долгопрудный Дирижабельная улица, 9",
                            "Longitude": "55.9374279",
                            "Latitude": "37.5106119",
                            "Index": "141700",
                            "Город": "Долгопрудный",
                            "Адреса": "Дирижабельная улица, 9"
                        },
                        {
                            "undefined": "Октябрьский проспект Ленина, 10",
                            "Longitude": "54.4815064",
                            "Latitude": "53.4680978",
                            "Index": "452614",
                            "Город": "Октябрьский",
                            "Адреса": "проспект Ленина, 10"
                        },
                        {
                            "undefined": "Димитровград улица Хмельницкого, 112",
                            "Longitude": "54.2172037",
                            "Latitude": "49.6254903",
                            "Index": "433508",
                            "Город": "Димитровград",
                            "Адреса": "улица Хмельницкого, 112"
                        },
                        {
                            "undefined": "Ессентуки Советская улица, 24",
                            "Longitude": "44.0444044",
                            "Latitude": "42.854195",
                            "Index": "357601",
                            "Город": "Ессентуки",
                            "Адреса": "Советская улица, 24"
                        },
                        {
                            "undefined": "Камышин Пролетарская улица, 70/1",
                            "Longitude": "50.0778709",
                            "Latitude": "45.4004872",
                            "Index": "403873",
                            "Город": "Камышин",
                            "Адреса": "Пролетарская улица, 70/1"
                        },
                        {
                            "undefined": "Евпатория улица Пушкина, 16",
                            "Longitude": "45.1883094",
                            "Latitude": "33.3667642",
                            "Index": "636000",
                            "Город": "Евпатория",
                            "Адреса": "улица Пушкина, 16"
                        },
                        {
                            "undefined": "Реутов улица Ленина, 14",
                            "Longitude": "55.7577635",
                            "Latitude": "37.8569164",
                            "Index": "143966",
                            "Город": "Реутов",
                            "Адреса": "улица Ленина, 14"
                        },
                        {
                            "undefined": "Жуковский улица Фрунзе, 9",
                            "Longitude": "55.5967761",
                            "Latitude": "38.1197226",
                            "Index": "140181",
                            "Город": "Жуковский",
                            "Адреса": "улица Фрунзе, 9"
                        },
                        {
                            "undefined": "Пушкино Московский проспект, 6",
                            "Longitude": "56.010741",
                            "Latitude": "37.843394",
                            "Index": "141207",
                            "Город": "Пушкино",
                            "Адреса": "Московский проспект, 6"
                        },
                        {
                            "undefined": "Муром Московская улица, 14",
                            "Longitude": "55.578431",
                            "Latitude": "42.0496941",
                            "Index": "602267",
                            "Город": "Муром",
                            "Адреса": "Московская улица, 14"
                        },
                        {
                            "undefined": "Ноябрьск улица Ленина, 42",
                            "Longitude": "63.198942",
                            "Latitude": "75.4466964",
                            "Index": "629807",
                            "Город": "Ноябрьск",
                            "Адреса": "улица Ленина, 42"
                        },
                        {
                            "undefined": "Новошахтинск проспект Ленина, 7",
                            "Longitude": "47.754224",
                            "Latitude": "39.933748",
                            "Index": "346918",
                            "Город": "Новошахтинск",
                            "Адреса": "проспект Ленина, 7"
                        },
                        {
                            "undefined": "Северск улица Ленина, 40",
                            "Longitude": "56.6007747",
                            "Latitude": "84.8777915",
                            "Index": "636000",
                            "Город": "Северск",
                            "Адреса": "улица Ленина, 40"
                        },
                        {
                            "undefined": "Артём улица Фрунзе, 54Г",
                            "Longitude": "43.3529802",
                            "Latitude": "132.1727113",
                            "Index": "692760",
                            "Город": "Артём",
                            "Адреса": "улица Фрунзе, 54Г"
                        },
                        {
                            "undefined": "Ачинск 9-й микрорайон, 11",
                            "Longitude": "56.2705263",
                            "Latitude": "90.4972436",
                            "Index": "662150",
                            "Город": "Ачинск",
                            "Адреса": "9-й микрорайон, 11"
                        },
                        {
                            "undefined": "Бердск улица Островского, 57",
                            "Longitude": "54.7582908",
                            "Latitude": "83.0968264",
                            "Index": "633010",
                            "Город": "Бердск",
                            "Адреса": "улица Островского, 57"
                        },
                        {
                            "undefined": "Ногинск Советская улица, 44",
                            "Longitude": "55.8549167",
                            "Latitude": "38.4430685",
                            "Index": "142400",
                            "Город": "Ногинск",
                            "Адреса": "Советская улица, 44"
                        },
                        {
                            "undefined": "Арзамас Соборная площадь, 2А",
                            "Longitude": "55.386375",
                            "Latitude": "43.8158201",
                            "Index": "607223",
                            "Город": "Арзамас",
                            "Адреса": "Соборная площадь, 2А"
                        },
                        {
                            "undefined": "Элиста улица А. Сусеева, 4",
                            "Longitude": "46.3049537",
                            "Latitude": "44.2694469",
                            "Index": "358000",
                            "Город": "Элиста",
                            "Адреса": "улица А. Сусеева, 4"
                        },
                        {
                            "undefined": "Елец улица Мира, 92",
                            "Longitude": "52.621826",
                            "Latitude": "38.501011",
                            "Index": "399770",
                            "Город": "Елец",
                            "Адреса": "улица Мира, 92"
                        },
                        {
                            "undefined": "Ханты-Мансийск улица Энгельса, 3",
                            "Longitude": "61.0038295",
                            "Latitude": "69.0147575",
                            "Index": "628011",
                            "Город": "Ханты-Мансийск",
                            "Адреса": "улица Энгельса, 3"
                        },
                        {
                            "undefined": "Новокуйбышевск Коммунистическая улица, 39",
                            "Longitude": "53.098823",
                            "Latitude": "49.9473719",
                            "Index": "446200",
                            "Город": "Новокуйбышевск",
                            "Адреса": "Коммунистическая улица, 39"
                        },
                        {
                            "undefined": "Железногорск улица Ленина, 48к1",
                            "Longitude": "52.337659",
                            "Latitude": "35.352051",
                            "Index": "307170",
                            "Город": "Железногорск",
                            "Адреса": "улица Ленина, 48к1"
                        },
                        {
                            "undefined": "Сергиев Посад проспект Красной Армии, 131",
                            "Longitude": "56.3103767",
                            "Latitude": "38.1338702",
                            "Index": "141306",
                            "Город": "Сергиев Посад",
                            "Адреса": "проспект Красной Армии, 131"
                        },
                        {
                            "undefined": "Зеленодольск улица Ленина, 21",
                            "Longitude": "55.8464739",
                            "Latitude": "48.4982577",
                            "Index": "422550",
                            "Город": "Зеленодольск",
                            "Адреса": "улица Ленина, 21"
                        }
                    ]
                    ReactDOM.render(
                        <div>
                            {dateMap.map((obj, index) => {
                                return (
                                    <a key={index}
                                       id={obj['Город']}
                                       itemProp="address" itemScope itemType="http://schema.org/PostalAddress" href="#"
                                       data-coordinate={obj['Latitude'] + ',' + obj['Longitude']}
                                       data-address={obj['Index'] + ' ' + obj['Город'] + ', ' + obj['Адреса']}
                                       data-name={obj['Адреса']}
                                       data-content="режим работы: 9:00-19:00"
                                       title=""
                                       className="mapOptions__addresses_a">
                                        <span itemProp="postalCode"
                                              className="addresses-text-bold">{obj['Index']}, г. {obj['Город']}</span><br/>
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
                <div class="visible-on-mobile">
                    <div class="region_address">
                        <div class="row all_address">
                            <div class="col-md-12">
                                <div class="city-wrapper city-wrapper-main">
                                    <p>Для отображения адресов офисов выберете регион</p>
                                    <div class="city-text btn btn-danger"> Краснодар</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    setTimeout(() => {
                        document.querySelector('#Москва').click()
                    }, 2000)
                </script>
            </div>
        </div>
    </div>

    <input id="init-map-subdomain" name="_token" type="hidden" value="37.484137,55.642164">
</section>

<footer id="footer-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="footer-li inline bold">
                    <li><a href="dengi-pod-pts.php">Кредит под ПТС</a></li>
                    <li><a href="dengi-pod-gruzovogoi-avtomobil.php">Грузовые авто</a></li>
                    <li><a href="dengi-pod-spectehniku.php">Спецтехника</a></li>
                    <li><a href="dengi-pod-motozikl.php">Мототехника</a></li>
                    <li><a href="autolombard.php">Автоломбард</a></li>
                </ul>

                <button type="button" class="btn btn-danger footer-btn" data-toggle="modal"
                        data-target="#CallPhone-ver-4">Оформить займ
                </button>


                <hr>

                <div class="footer-logo inline"><a href="/"><img src="images/13.png" alt="logo"/></a></div>

                <div class="footer-phone inline"><a href="tel:<?=$tel ?>"><?=$phone ?></a><br></div>

                <div class="footer-phone inline">
                    <button type="button" class="btn btn-line-red" data-toggle="modal" data-target="#CallPhone-ver-2">
                        Обратный звонок
                    </button>
                </div>

                <div class="soc-seti inline">
                    <div class="soc-footer">
                        <a href="#" target="_blank" rel="nofollow" class="soc-vk"></a>
                        <a href="#" target="_blank" rel="nofollow" class="soc-inst"></a>
                    </div>
                </div>

                <hr>

                <div class="footer-bottom">
                    <p>«Займ Сервис» не является финансовым учреждением, банком или МФО. Сайт предоставляет
                        информационную помощь для получения кредитов и займов в аккредитованных организациях, имеющих
                        разрешение ЦБ на данную деятельность. При оформлении заявки, формируется единая заявка
                        отправляемая компаниям партнерам, которые занимаются кредитованием населения.</p>

                    <p>*Все компании партнеры, зарегистрированы в реестре Центрального банка РФ. Список компаний,
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
                                                <form action="https://formsubmit.co/api.carzaem@yandex.ru"
                                                      method="POST">
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
                                                                Оформить заявку
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="opening_view" data-switch-2="two">
                                                <h3>Подробная анкета</h3>
                                                <form action="https://formsubmit.co/api.carzaem@yandex.ru"
                                                      method="POST">

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
                                                                Оформить заявку
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
                                   placeholder="Как Вас зовут"></div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <label for="request-phone4">Телефон</label>
                            <span class="error"></span>
                            <input type="text" required class="form-control type-phone" id="request-phone4" name="phone"
                                   placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ"></div>
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
                                                              name="Имя" placeholder="Как Вас зовут"></div>
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
            <div class="modal-header"><h2>Подать заявку</h2>
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
            <div class="modal-header"><h2>Подать заявку</h2>
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
        <div class="off-canvas-car-dark-grey">

        </div>

        <div class="off-canvas-header"><a class="off-canvas-close" href="#"><img src="images/close-white.svg"
                                                                                 alt="Автоломбард под залог ПТС  в Москве"></a>
        </div>

        <div class="off-canvas-grey">
            <div class="off-canvas-content modal-dialog-centered">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="position:relative;margin-left: 52px;">
                        </h2>
                        <ul class="off-canvas-li">
                            <li><a href="dengi-pod-pts.php">Кредит под ПТС</a></li>
                            <li><a href="dengi-pod-gruzovogoi-avtomobil.php">Грузовые авто</a></li>
                            <li><a href="dengi-pod-spectehniku.php">Спецтехника</a></li>
                            <li><a href="dengi-pod-motozikl.php">Мототехника</a></li>
                            <li><a href="autolombard.php">Автоломбард</a></li>
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
                                                                                 alt="Автоломбард под залог ПТС  в Москве"></a>
        </div>

        <div class="off-canvas-car-dark-grey">
            <div class="city-wrapper city-wrapper-main m-b-30">
            </div>
            <div class="off-canvas-phone"><a href="tel:<?=$tel ?>"><?=$phone ?></a><br></div>
        </div>

        <div class="off-canvas-grey">
            <div class="off-canvas-content modal-dialog-centered">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="off-canvas-li">
                            <li><a href="dengi-pod-pts.php">Кредит под ПТС</a></li>
                            <li><a href="dengi-pod-gruzovogoi-avtomobil.php">Грузовые авто</a></li>
                            <li><a href="dengi-pod-spectehniku.php">Спецтехника</a></li>
                            <li><a href="dengi-pod-motozikl.php">Мототехника</a></li>
                            <li><a href="autolombard.php">Автоломбард</a></li>
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
            <div class="modal-header"><h2>Выберите регион</h2>
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
                                        <h6><span class="text-blue-icon"></span><span
                                                class="text-blue">И мы одобрим Вашу заявку </span>с вероятностью 100%
                                        </h6>
                                        <form class="application-form row" action="thanks.php" method="POST">

                                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                <label for="request-car_brand">Марка</label>
                                                <input type="text" class="form-control" id="request-car_brand"
                                                       name="Марка" required
                                                       placeholder="">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                <label for="request-car_model">Модель</label>
                                                <input type="text" class="form-control" id="request-car_model"
                                                       name="Модель" required
                                                       placeholder="">
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
                                                <input type="text" class="form-control" id="request-car_time"
                                                       name="Имя" required placeholder="">
                                            </div>
                                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                                <label for="request-car_time">Телефон</label>
                                                <input type="text" required class="form-control type-phone"
                                                       name="Телефон" placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-danger"
                                                >Получить одобрение
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
            <div class="modal-header"><h2>Подать заявку</h2>
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
<script> /*
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

            </div>
            <div class="col-sm-12 col-md-3">
                <div class="letter">Д</div>
                <div id="rootД"></div>

                <div class="letter">Ж</div>
                <div id="rootЖ"></div>

                <div class="letter">И</div>
                <div id="rootИ"></div>
                <div class="letter">Й</div>
                <div id="rootЙ"></div>

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

            </div>
            <div class="col-sm-12 col-md-3">

                <div class="letter">С</div>
                <div id="rootС"></div>
                <div class="letter">Т</div>
                <div id="rootТ"></div>

                <div class="letter">У</div>
                <div id="rootУ"></div>

                <div class="letter">Ч</div>
                <div id="rootЧ"></div>

                <div class="letter">Ш</div>
                <div id="rootШ"></div>

                <div class="letter">Э</div>
                <div id="rootЭ"></div>

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
        grecaptcha.execute('6LfcoEoeAAAAADKhAfYljva59-wLRGiHSTBArvNy', {action: 'submit'}).then(function (token) {
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