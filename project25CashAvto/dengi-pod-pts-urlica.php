<?php
$phone = '8 (961) 331-39-38';
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
    <title>Займы под залог ПТС <?= $in_city ?></title>
    <meta name="description" content="Займы под залог ПТС  <?= $in_city ?>"/>

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
                        <img class="img-logo-top-onWhite " style="margin-top: -88px" src="./images/bg/moskovBg.png"
                             alt="logo">
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
                                    data-target="#CallPhone-ver-2"
                            >
                                Обратный звонок
                            </button>

                            <button type="button" class="btn btn-danger"
                                    data-toggle="modal" data-target="#CallPhone-ver-4">Оформить займ
                            </button>
                        </div>
                    </div>
                </div>
                <div class="extra-nav">
                    <ul>
                        <li class="icon-phone"><a href="tel:<?=$tel ?>"><span class="icon-item-span"></span></a></li>
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
                                <h1 class="h1 padding-leftOnPc3">Займы под залог ПТС
                                                                 юр. лицам <?= $in_city ?></h1>
                                <div class="p1 padding-leftOnPc3">Авто остается у Вас</div>

                                <div class="row">
                                    <div class="col-md-12 padding-leftOnPc">
                                        <div class="row">
                                            <div class="col-md-4 introduction" style="margin-bottom: 3px">
                                                <div class="introduction-image">
                                                    <img style="width: 48px" alt="procent  zalog pod pts"
                                                         src="images/icon/project23/icon_15.png"/>
                                                </div>
                                                Ставка <span>от 2% в мес.</span>
                                            </div>
                                            <div class="col-md-4 introduction">
                                                <div class="introduction-image">
                                                    <img style="width: 48px" alt="money  zalog pod pts"
                                                         src="images/icon/project23/dollar.png"/>
                                                </div>
                                                Сумма <span>от 50 000 руб.</span>
                                            </div>
                                            <div class="col-md-4 introduction">
                                                <div class="introduction-image">
                                                    <img style="width: 48px" alt="calendar  zalog pod pts"
                                                         src="images/icon/project23/calendar.png"/>
                                                </div>
                                                Срок займа <span>до 60 мес.</span>
                                            </div>
                                            <div class="col-md-4 introduction">
                                                <div class="introduction-image">
                                                    <img style="width: 48px" alt=" zalog pod pts"
                                                         src="images/icon/project23/file.png"/>
                                                </div>
                                                Без кредитной истории
                                            </div>
                                            <div class="col-md-4 introduction">
                                                <div class="introduction-image">
                                                    <img style="width: 48px" alt=" zalog pod pts"
                                                         src="images/icon/project23/to-do-list2.png"/>
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
</div>
</div>

<section id="products-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1"><span class="h1-span">Принимаем в залог любые </span>транспортные средства</h3>
                <div class="visible-on-wade visible-on-tablet">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="product-template-bg grey">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="element-img"
                                             style="background-image: url(images/product/sedan5.png);"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-right">
                                            <div class="element-title">Легковые авто</div>
                                            <div class="element-text">Отечественные авто, иномарки</div>
                                            <div class="element-wrap"><a href="#" class="btn btn-danger"
                                                                         data-toggle="modal"
                                                                         data-target="#CallPhone-ver-4">Оценить ТС</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="product-template-bg grey">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="element-img"
                                             style="background-image: url(images/product/truck5.png);"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-right">
                                            <div class="element-title">Грузовые авто</div>
                                            <div class="element-text">Газели, тягачи, фуры</div>
                                            <div class="element-wrap"><a href="#" class="btn btn-danger"
                                                                         data-toggle="modal"
                                                                         data-target="#CallPhone-ver-4">Оценить ТС</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="product-template-bg grey">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="element-img"
                                             style="background-image: url(images/product/tractor4.png);"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-right">
                                            <div class="element-title">Спецтехника</div>
                                            <div class="element-text">Трактора, бульдозеры, погрузчики, краны</div>
                                            <div class="element-wrap"><a href="#" class="btn btn-danger"
                                                                         data-toggle="modal"
                                                                         data-target="#CallPhone-ver-4">Оценить ТС</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="product-template-bg grey">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="element-img"
                                             style="background-image: url(images/product/motorbike5.png); background-size: contain"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-right">
                                            <div class="element-title">Мототехника</div>
                                            <div class="element-text">Мотоциклы, квадроциклы, скутеры</div>
                                            <div class="element-wrap"><a href="#" class="btn btn-danger"
                                                                         data-toggle="modal"
                                                                         data-target="#CallPhone-ver-4">Оценить ТС</a>
                                            </div>
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
                            <div class="element-img" style="background-image: url(images/product/sedan4.jpg);"></div>
                            <div class="product-right">
                                <div class="element-title">Легковые авто</div>
                                <div class="element-text">Отечественные авто, иномарки</div>
                                <div class="element-wrap"><a href="#" class="btn btn-danger">Оценить ТС</a></div>
                            </div>
                        </div>
                        <div class="product-template-bg grey">
                            <div class="element-img" style="background-image: url(images/product/truck4.jpg);"></div>
                            <div class="product-right">
                                <div class="element-title">Грузовые авто</div>
                                <div class="element-text">Газели, тягачи, фуры</div>
                                <div class="element-wrap"><a href="#" class="btn btn-danger">Оценить ТС</a></div>
                            </div>
                        </div>
                        <div class="product-template-bg grey">
                            <div class="element-img" style="background-image: url(images/product/tractor4.jpg);"></div>
                            <div class="product-right">
                                <div class="element-title">Спецтехника</div>
                                <div class="element-text">Трактора, бульдозеры, погрузчики, краны</div>
                                <div class="element-wrap"><a href="#" class="btn btn-danger">Оценить ТС</a></div>
                            </div>
                        </div>
                        <div class="product-template-bg grey">
                            <div class="element-img"
                                 style="background-image: url(images/product/motorbike4.jpg);"></div>
                            <div class="product-right">
                                <div class="element-title">Мототехника</div>
                                <div class="element-text">Мотоциклы, квадроциклы, скутеры</div>
                                <div class="element-wrap"><a href="#" class="btn btn-danger">Оценить ТС</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="calculate-2-3-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="h1">
                    <span class="h1-span">Калькулятор займа</span>
                </h3>
            </div>

            <div id="calculator" class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="calculate-item">
                            <h6>Необходимая сумма</h6>
                            <div class="calculate-steps">
                                <div class="">
                                    <span class="amount-value" id="amount-thousands"></span>
                                    <span>₽</span>
                                    <span>тысяч</span>
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

                        <div class="calculate-item">
                            <h6>Срок займа</h6>
                            <div class="calculate-steps">
                                <div class="">
                                    <span class="amount-value" id="amount-months"></span>
                                    <span>месяцев</span>
                                </div>
                            </div>
                            <div class="calculate-steps">
                                <div class="steps-left">2</div>
                                <div class="steps-right">60</div>
                            </div>
                            <div id="slider-range-months"></div>
                        </div>

                        <div class="result-container form-group">
                            <h6>Ежемесячный платеж</h6>
                            <input id="revenue" type="text" class="form-control calculate-bottom-text-prices revenue"
                                   name="revenue" value="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>Контактные данные клиента</h3>
                        <form class="ajax_form" method="post" action="./thanks.php" onsubmit="">
                            <input type="hidden" name="_token" value=>
                            <input type="hidden" value="" name=>

                            <div class="form-group">
                                <label for="CalcName">Ваше имя</label>
                                <span class="error"></span>
                                <input id="CalcName" required type="text" class="form-control" name="name"
                                       placeholder="Как Вас зовут">
                            </div>
                            <div class="form-group">
                                <label for="CalcNumber">Телефон</label>
                                <span class="error"></span>
                                <input type="text" required class="form-control type-phone" id="CalcNumber" name="phone"
                                       placeholder="+7 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="form-group">
                                <label for="CalcNumber">Местонахождение</label>
                                <span class="error"></span>
                                <input type="text" required class="form-control " id="CalcNumber" name="city"
                                       placeholder="Где Вы живёте">
                            </div>
                            <div class="personal-data">Нажимая на кнопку, вы даёте своё согласие на обработку ваших <a
                                    target="_blank" href="#/storage/uploads/Lf/tw/Lftwg5FibcjG2gcSyPjlHarE.pdf">персональных
                                данных</a>
                            </div>
                            <button type="submit" class="btn btn-danger">Подать заявку</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="receipt-of-money-1">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <h3 class="h1">4 шага получения денег <span class="titleFirst3"></span></h3>

            </div>

            <div class="col-md-9 col-sm-12">
                <ul class="steps-money-template">
                    <li>
                        <div class="steps-template">
                            <div class="steps-img"
                                 style="background-image: url(images/icon/project23/to-do-list2.png);background-repeat: no-repeat"></div>
                            <div class="steps-text">Оформляете заявку онлайн</div>
                        </div>
                    </li>
                    <li>
                        <div class="steps-template">
                            <div class="steps-img"
                                 style="background-image: url(images/icon/project23/phone.png);background-repeat: no-repeat"></div>
                            <div class="steps-text">Обсуждаете все детали по телефону</div>
                        </div>
                    </li>
                    <li>
                        <div class="steps-template">
                            <div class="steps-img"
                                 style="background-image: url(images/icon/project23/car-insurance2.png);background-repeat: no-repeat"></div>
                            <div class="steps-text">Приезжаете в офис для заключения договора</div>
                        </div>
                    </li>
                    <li>
                        <div class="steps-template">
                            <div class="steps-img"
                                 style="background-image: url(images/icon/project23/dollar.png);background-repeat: no-repeat"></div>
                            <div class="steps-text">Получаете деньги и продолжаете пользоваться авто</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="advantages-3">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h3 class="h1"><span class="h1-span">Лучшее обслуживание </span><span class="yellow-text">для каждого клиента</span>
                </h3>

                <p>Деньги под залог авто помогут решить временные финансовые трудности, клиенты продолжают пользоваться
                    своим транспортным средством</p>
            </div>
            <div class="col-md-12">
                <div class="visible-on-wade visible-on-tablet">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <div class="list-icon-grey-item">
                                <div class="list-icon-grey-item-img"
                                     style="background-image: url(images/p4298/withoutPeniRed.png); background-size: 50px 50px;"></div>
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
                                     style="background-image: url(images/icon/forPj25/premium-icon-smartphone-3089151.png); background-size: 50px 50px;"></div>
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
                                 style="background-image: url(images/p4298/withoutPeniRed.png); background-size: 50px 50px;"></div>
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
<section id="requirements">
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-sm-12">
                <div class="visible-on-mobile">
                    <div class="image-max-height"
                         style="background-image: url(images/icon/forPj25/womanWork.png);"></div>
                </div>

                <h3 class="h1"><span class="h1-span">Требования для получения </span>займа под ПТС в Ставрополе
                </h3>

                <div class="row m-b-30">
                    <div class="col-md-4 col-sm-4">
                        <h2>Необходимые документы</h2>
                        <ul class="list-ul">
                            <li>Паспорт гражданина РФ</li>
                            <li>Паспорт транспортного средства ПТС</li>
                            <li>Свидетельство о регистрации (СТС)</li>
                        </ul>
                        <h3><span class="text-blue">Справка о доходах не нужна</span></h3>
                    </div>
                    <div class="col-md-4 col-sm-4 visible-on-wade visible-on-tablet">
                        <div class="image-max-height"
                             style="background-image: url(images/icon/forPj25/womanWork.png);background-size: cover;background-position-x: -52px;"></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h2>Требования к клиенту</h2>
                        <ul class="list-ul">
                            <li>Гражданство РФ</li>
                            <li>Возраст от 18 лет</li>
                            <li>Наличие регистрации РФ</li>
                        </ul>
                        <h3><span class="text-blue">Кредитная история не имеет значение</span></h3>
                    </div>
                </div>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#">Оформить займ</button>
            </div>
        </div>
    </div>
</section>
<section id="repay-a-loan-2">
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
<section id="questions-1">
    <div class="container">
        <div class="row" style="justify-content: center">
            <div class="col-md-11 col-sm-12">
                <h3 class="h1"><span class="h1-span">Ответы на часто </span>задаваемые вопросы</h3>

                <div class="owl-carousel owl-theme questions-block-1">
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Как получить деньги под залог ПТС  в автоломбарде? </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">От получения денег вас отделяют всего три шага:
                                    оставьте заявку на получение денег в автоломбарде под залог ПТС в специальной форме на сайте;
                                    направьте менеджерам компании личные данные и информацию об автомобиле;
                                    получите положительный ответ об одобрении предмета залога.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Займ выдается наличными или на карту?
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">Наш автоломбард работает 24/7, поэтому в любой день недели вы можете получить у нас деньги. Способ их выплаты (наличными или на карту) заемщик выбирает самостоятельно, мы не ограничиваем вас в этом, предлагая как займы наличными, так и на карту любого банка.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Автомобиль останется у меня? </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">Наш автоломбард выдает деньги под залог автомобиля, не забирая саму машину. Вы получаете деньги и можете без ограничений пользоваться своей машиной! В качестве предмета залога выступает только ПТС, что оставляет вам возможность управлять транспортным средством.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Можно ли взять займ в автоломбарде по генеральной доверенности? </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">В нашем круглосуточном автоломбарде деньги под залог ПТС может получить как собственник, так и иное правомочное лицо. Для подтверждения своих прав вы можете предоставить доверенность на право распоряжения машиной или договор ее купли-продажи.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-answer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="question">Что нужно для получения займа под ПТС автомобиля? </div>
                            </div>
                            <div class="col-md-8">
                                <div class="answer">Для получения денег предъявите паспорт заемщика, а также документы на автомобиль:
                                    паспорт ТС;
                                    свидетельство о регистрации ТС.
                                    Автоломбард в Москве не требует дополнительных документов: для получения займа достаточно вышеперечисленных бумаг.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reviews-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 class="h1">Что говорят о нас</h3>

                <div class="owl-carousel owl-theme reviews-3">
                    <article class="review-bg-red-border">
                        <div class="red-border">
                            <div class="review-text">Трудно найти компанию, выдающую деньги под залог ПТС для юридических лиц в Москве. Можно легко нарваться на проблемы с налоговой. Но здесь всё чисто, наши юристы одобрили сделку. Проценты не такие большие, осталось выплачивать 2 месяца.
</div>
                        </div>
                        <div class="review-person">
                            <div class="review-name">Иван</div>
                        </div>
                    </article>
                    <article class="review-bg-red-border">
                        <div class="red-border">
                            <div class="review-text">Для маленьких компаний настали трудные времена, поэтому решили взять кредит под залог ПТС для развития бизнеса. За авто дали почти миллион, перевели на карту. И эти деньги помогли нам подняться.
</div>
                        </div>
                        <div class="review-person">
                            <div class="review-name">Сергей</div>
                        </div>
                    </article>
                    <article class="review-bg-red-border">
                        <div class="red-border">
                            <div class="review-text">Когда оформляла ИП, то не думала, что столкнусь с финансовыми трудностями. Кроме машины ничего не было, поэтому взяла кредит для ИП под залог автомобиля. Пакет документов минимальный, проценты потянуть можно.
</div>
                        </div>
                        <div class="review-person">
                            <div class="review-name">Юлия</div>
                        </div>
                    </article>
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

                <div id="map" class=" ofices visible-on-wade visible-on-tablet">
                    <form class="bgForMap map_filter visible-on-wade visible-on-tablet" action="#">
                        <div id="addresses" class="mapOptions__addresses gradient" itemscope
                             itemtype="http://schema.org/PostalAddress">
                            <div style="color: ghostwhite" class="map-text">
                                <a style="color: ghostwhite" href="tel:<?= $tel ?>"><?= $phone ?></a><br>
                            </div>
                            <div id="rootMap">
                            </div>
                        </div>
                    </form>
                </div>
                <script type="text/babel">
                    const dataLinks = [
                        {
                            "undefined": "Москва Ленинская Слобода, 19",
                            "Адреса": "Ленинская Слобода, 19",
                            "Latitude": 55.7084315,
                            "Longitude": 37.6527952,
                            "Index": 115280,
                            "Column6": "Moskva",
                            "Город": "Москва"
                        },
                        {
                            "undefined": "Зеленоград Савёлкинский проезд, 4к1",
                            "Адреса": "Савёлкинский проезд, 4к1",
                            "Latitude": 55.9911299,
                            "Longitude": 37.2172575,
                            "Index": 124482,
                            "Column6": "Zelenograd",
                            "Город": "Зеленоград"
                        },
                        {
                            "undefined": "Троицк Академическая площадь, 3",
                            "Адреса": "Академическая площадь, 3",
                            "Latitude": 55.4845567,
                            "Longitude": 37.3048227,
                            "Index": 108841,
                            "Column6": "Moskva",
                            "Город": "Троицк"
                        },
                        {
                            "undefined": "Щербинка Бутовский тупик, 14",
                            "Адреса": "Бутовский тупик, 14",
                            "Latitude": 55.5087279,
                            "Longitude": 37.5612353,
                            "Index": 142171,
                            "Column6": "Moskva",
                            "Город": "Щербинка"
                        },
                        {
                            "undefined": "Балашиха площадь Славы, 1",
                            "Адреса": "площадь Славы, 1",
                            "Latitude": 55.7965747,
                            "Longitude": 37.9372731,
                            "Index": 143912,
                            "Column6": "Balashikha",
                            "Город": "Балашиха"
                        },
                        {
                            "undefined": "Бронницы Советская улица, 61",
                            "Адреса": "Советская улица, 61",
                            "Latitude": 55.4265641,
                            "Longitude": 38.2648461,
                            "Index": 140170,
                            "Column6": "Bronnitsy",
                            "Город": "Бронницы"
                        },
                        {
                            "undefined": "Волоколамск Октябрьская площадь, 10",
                            "Адреса": "Октябрьская площадь, 10",
                            "Latitude": 56.03582100000001,
                            "Longitude": 35.957254,
                            "Index": 143600,
                            "Column6": "Volokolamsk",
                            "Город": "Волоколамск"
                        },
                        {
                            "undefined": "Воскресенск Октябрьская улица, 1\/2",
                            "Адреса": "Октябрьская улица, 1\/2",
                            "Latitude": 55.322641,
                            "Longitude": 38.674425,
                            "Index": 140200,
                            "Column6": "Voskresensk",
                            "Город": "Воскресенск"
                        },
                        {
                            "undefined": "Дзержинский площадь Дмитрия Донского, 1А",
                            "Адреса": "площадь Дмитрия Донского, 1А",
                            "Latitude": 55.6314341,
                            "Longitude": 37.8491096,
                            "Index": 140090,
                            "Column6": "Dzerzhinsky",
                            "Город": "Дзержинский"
                        },
                        {
                            "undefined": "Дмитров Загорская улица, 24",
                            "Адреса": "Загорская улица, 24",
                            "Latitude": 56.342305,
                            "Longitude": 37.518773,
                            "Index": 141800,
                            "Column6": "Dmitrov",
                            "Город": "Дмитров"
                        },
                        {
                            "undefined": "Долгопрудный площадь Собина, 1к4",
                            "Адреса": "площадь Собина, 1к4",
                            "Latitude": 55.933103,
                            "Longitude": 37.51317,
                            "Index": 141701,
                            "Column6": "Dolgoprudny",
                            "Город": "Долгопрудный"
                        },
                        {
                            "undefined": "Домодедово площадь 30-летия Победы, 1",
                            "Адреса": "площадь 30-летия Победы, 1",
                            "Latitude": 55.4370821,
                            "Longitude": 37.7688915,
                            "Index": 142000,
                            "Column6": "Domodedovo",
                            "Город": "Домодедово"
                        },
                        {
                            "undefined": "Дубна Московская улица, 2",
                            "Адреса": "Московская улица, 2",
                            "Latitude": 56.74415699999999,
                            "Longitude": 37.1744709,
                            "Index": 141985,
                            "Column6": "Dubna",
                            "Город": "Дубна"
                        },
                        {
                            "undefined": "Егорьевск Советская улица, 87",
                            "Адреса": "Советская улица, 87",
                            "Latitude": 55.383793,
                            "Longitude": 39.036166,
                            "Index": 140301,
                            "Column6": "Yegoryevsk",
                            "Город": "Егорьевск"
                        },
                        {
                            "undefined": "Жуковский улица Фрунзе, 7\/26",
                            "Адреса": "улица Фрунзе, 7\/26",
                            "Latitude": 55.597151,
                            "Longitude": 38.121089,
                            "Index": 140181,
                            "Column6": "Zhukovskiy",
                            "Город": "Жуковский"
                        },
                        {
                            "undefined": "Зарайск Советская улица, 23",
                            "Адреса": "Советская улица, 23",
                            "Latitude": 54.7588474,
                            "Longitude": 38.8823435,
                            "Index": 140600,
                            "Column6": "Zaraysk",
                            "Город": "Зарайск"
                        },
                        {
                            "undefined": "Звенигород Украинская улица, 8",
                            "Адреса": "Украинская улица, 8",
                            "Latitude": 55.7291203,
                            "Longitude": 36.8541478,
                            "Index": 143180,
                            "Column6": "Zvenigorod",
                            "Город": "Звенигород"
                        },
                        {
                            "undefined": "Ивантеевка Заречная улица, 1",
                            "Адреса": "Заречная улица, 1",
                            "Latitude": 55.9697701,
                            "Longitude": 37.9249576,
                            "Index": 141281,
                            "Column6": "Ivanteyevka",
                            "Город": "Ивантеевка"
                        },
                        {
                            "undefined": "Дедовск улица Гагарина, 10",
                            "Адреса": "улица Гагарина, 10",
                            "Latitude": 55.86035099999999,
                            "Longitude": 37.121339,
                            "Index": 143530,
                            "Column6": "Dedovsk",
                            "Город": "Дедовск"
                        },
                        {
                            "undefined": "Истра площадь Урицкого, 1А",
                            "Адреса": "площадь Урицкого, 1А",
                            "Latitude": 55.91403400000001,
                            "Longitude": 36.862132,
                            "Index": 143500,
                            "Column6": "Istra",
                            "Город": "Истра"
                        },
                        {
                            "undefined": "Кашира Советская улица, 10",
                            "Адреса": "Советская улица, 10",
                            "Latitude": 54.7920214,
                            "Longitude": 38.2662197,
                            "Index": 142921,
                            "Column6": "Kashira",
                            "Город": "Кашира"
                        },
                        {
                            "undefined": "Клин улица Гагарина, 8",
                            "Адреса": "улица Гагарина, 8",
                            "Latitude": 56.3321692,
                            "Longitude": 36.7293961,
                            "Index": 141601,
                            "Column6": "Klin",
                            "Город": "Клин"
                        },
                        {
                            "undefined": "Коломна улица Лажечникова, 3А",
                            "Адреса": "улица Лажечникова, 3А",
                            "Latitude": 55.103374,
                            "Longitude": 38.7548757,
                            "Index": 140400,
                            "Column6": "Kolomna",
                            "Город": "Коломна"
                        },
                        {
                            "undefined": "Королёв улица Гагарина, 32",
                            "Адреса": "улица Гагарина, 32",
                            "Latitude": 55.916358,
                            "Longitude": 37.814144,
                            "Index": 141070,
                            "Column6": "Korolyov",
                            "Город": "Королёв"
                        },
                        {
                            "undefined": "Красноармейск Комсомольская улица, 4к1",
                            "Адреса": "Комсомольская улица, 4к1",
                            "Latitude": 56.1210247,
                            "Longitude": 38.14319,
                            "Index": 141292,
                            "Column6": "Krasnoarmeysk",
                            "Город": "Красноармейск"
                        },
                        {
                            "undefined": "Красногорск Октябрьская улица, 19Б",
                            "Адреса": "Октябрьская улица, 19Б",
                            "Latitude": 55.8306985,
                            "Longitude": 37.3291273,
                            "Index": 143401,
                            "Column6": "Krasnogorsk",
                            "Город": "Красногорск"
                        },
                        {
                            "undefined": "Нахабино Советская улица, 26",
                            "Адреса": "Советская улица, 26",
                            "Latitude": 55.8480369,
                            "Longitude": 37.18780599999999,
                            "Index": 143430,
                            "Column6": "Nakhabino",
                            "Город": "Нахабино"
                        },
                        {
                            "undefined": "Краснознаменск Молодёжная улица, 2\/1",
                            "Адреса": "Молодёжная улица, 2\/1",
                            "Latitude": 55.6001896,
                            "Longitude": 37.0393467,
                            "Index": 143090,
                            "Column6": "Krasnoznamensk",
                            "Город": "Краснознаменск"
                        },
                        {
                            "undefined": "Видное Школьная улица, 21",
                            "Адреса": "Школьная улица, 21",
                            "Latitude": 55.5570515,
                            "Longitude": 37.7099656,
                            "Index": 142703,
                            "Column6": "Vidnoye",
                            "Город": "Видное"
                        },
                        {
                            "undefined": "Лобня улица Ленина, 19к1",
                            "Адреса": "улица Ленина, 19к1",
                            "Latitude": 56.01140479999999,
                            "Longitude": 37.4790869,
                            "Index": 141730,
                            "Column6": "Lobnya",
                            "Город": "Лобня"
                        },
                        {
                            "undefined": "Лосино-Петровский улица Горького, 2",
                            "Адреса": "улица Горького, 2",
                            "Latitude": 55.8712654,
                            "Longitude": 38.2002199,
                            "Index": 141150,
                            "Column6": "Losino-Petrovsky",
                            "Город": "Лосино-Петровский"
                        },
                        {
                            "undefined": "Луховицы улица Куйбышева, 71",
                            "Адреса": "улица Куйбышева, 71",
                            "Latitude": 54.9649571,
                            "Longitude": 39.0272976,
                            "Index": 140502,
                            "Column6": "Lukhovitsy",
                            "Город": "Луховицы"
                        },
                        {
                            "undefined": "Лыткарино Октябрьская улица, 4",
                            "Адреса": "Октябрьская улица, 4",
                            "Latitude": 55.57930169999999,
                            "Longitude": 37.90793040000001,
                            "Index": 140080,
                            "Column6": "Lytkarino",
                            "Город": "Лыткарино"
                        },
                        {
                            "undefined": "Люберцы Октябрьский проспект, 209",
                            "Адреса": "Октябрьский проспект, 209",
                            "Latitude": 55.6773712,
                            "Longitude": 37.8990393,
                            "Index": 140000,
                            "Column6": "Lyubertsy",
                            "Город": "Люберцы"
                        },
                        {
                            "undefined": "Можайск Московская улица, 24",
                            "Адреса": "Московская улица, 24",
                            "Latitude": 55.506493,
                            "Longitude": 36.016883,
                            "Index": 143200,
                            "Column6": "Mozhaysk",
                            "Город": "Можайск"
                        },
                        {
                            "undefined": "Мытищи улица Щербакова, 6А",
                            "Адреса": "улица Щербакова, 6А",
                            "Latitude": 55.908858,
                            "Longitude": 37.734708,
                            "Index": 141008,
                            "Column6": "Mytishchi",
                            "Город": "Мытищи"
                        },
                        {
                            "undefined": "Апрелевка улица Горького, 2",
                            "Адреса": "улица Горького, 2",
                            "Latitude": 55.54461200000001,
                            "Longitude": 37.072773,
                            "Index": 143360,
                            "Column6": "Arkhangel'skoe",
                            "Город": "Апрелевка"
                        },
                        {
                            "undefined": "Наро-Фоминск улица Маршала Жукова, 10",
                            "Адреса": "улица Маршала Жукова, 10",
                            "Latitude": 55.3845959,
                            "Longitude": 36.7224952,
                            "Index": 143300,
                            "Column6": "Naro-Fominsk",
                            "Город": "Наро-Фоминск"
                        },
                        {
                            "undefined": "Ногинск Советская улица, 58",
                            "Адреса": "Советская улица, 58",
                            "Latitude": 55.85432369999999,
                            "Longitude": 38.44092,
                            "Index": 142400,
                            "Column6": "Noginsk",
                            "Город": "Ногинск"
                        },
                        {
                            "undefined": "Старая Купавна Большая Московская улица, 153",
                            "Адреса": "Большая Московская улица, 153",
                            "Latitude": 55.812093,
                            "Longitude": 38.1803529,
                            "Index": 142450,
                            "Column6": "Staraya Kupavna",
                            "Город": "Старая Купавна"
                        },
                        {
                            "undefined": "Электроугли Советская улица, 9",
                            "Адреса": "Советская улица, 9",
                            "Latitude": 55.716684,
                            "Longitude": 38.2202089,
                            "Index": 142461,
                            "Column6": "Elektrougli",
                            "Город": "Электроугли"
                        },
                        {
                            "undefined": "Голицыно Привокзальная площадь, 1А",
                            "Адреса": "Привокзальная площадь, 1А",
                            "Latitude": 55.61393409999999,
                            "Longitude": 36.99117,
                            "Index": 143041,
                            "Column6": "Golitsyno",
                            "Город": "Голицыно"
                        },
                        {
                            "undefined": "Кубинка Наро-Фоминское шоссе, 8",
                            "Адреса": "Наро-Фоминское шоссе, 8",
                            "Latitude": 55.5747,
                            "Longitude": 36.6957,
                            "Index": 143070,
                            "Column6": "Kubinka",
                            "Город": "Кубинка"
                        },
                        {
                            "undefined": "Одинцово улица Маршала Жукова, 32",
                            "Адреса": "улица Маршала Жукова, 32",
                            "Latitude": 55.6800134,
                            "Longitude": 37.2657212,
                            "Index": 143003,
                            "Column6": "Odintsovo",
                            "Город": "Одинцово"
                        },
                        {
                            "undefined": "Орехово-Зуево Центральный бульвар, 3",
                            "Адреса": "Центральный бульвар, 3",
                            "Latitude": 55.8040889,
                            "Longitude": 38.9796467,
                            "Index": 142600,
                            "Column6": "Orekhovo-Zuyevo",
                            "Город": "Орехово-Зуево"
                        },
                        {
                            "undefined": "Павловский Посад площадь Революции, 6",
                            "Адреса": "площадь Революции, 6",
                            "Latitude": 55.7807962,
                            "Longitude": 38.6522112,
                            "Index": 142500,
                            "Column6": "Pavlovsky Posad",
                            "Город": "Павловский Посад"
                        },
                        {
                            "undefined": "Подольск Большая Серпуховская улица, 5",
                            "Адреса": "Большая Серпуховская улица, 5",
                            "Latitude": 55.42943229999999,
                            "Longitude": 37.5471673,
                            "Index": null,
                            "Column6": "Podolsk",
                            "Город": "Подольск"
                        },
                        {
                            "undefined": "Протвино улица Ленина, 7",
                            "Адреса": "улица Ленина, 7",
                            "Latitude": 54.86720889999999,
                            "Longitude": 37.2154828,
                            "Index": 142280,
                            "Column6": "Protvino",
                            "Город": "Протвино"
                        },
                        {
                            "undefined": "Пушкино Московский проспект, 7",
                            "Адреса": "Московский проспект, 7",
                            "Latitude": 56.01088730000001,
                            "Longitude": 37.8457681,
                            "Index": 141207,
                            "Column6": "Pushkino",
                            "Город": "Пушкино"
                        },
                        {
                            "undefined": "Пущино микрорайон В, 10А",
                            "Адреса": "микрорайон В, 10А",
                            "Latitude": 54.8323855,
                            "Longitude": 37.6210556,
                            "Index": 142290,
                            "Column6": "Pushchino",
                            "Город": "Пущино"
                        },
                        {
                            "undefined": "Раменское улица Ногина, 5",
                            "Адреса": "улица Ногина, 5",
                            "Latitude": 55.5668204,
                            "Longitude": 38.22534539999999,
                            "Index": 140100,
                            "Column6": "Ramenskoye",
                            "Город": "Раменское"
                        },
                        {
                            "undefined": "Реутов улица Ленина, 24",
                            "Адреса": "улица Ленина, 24",
                            "Latitude": 55.7609767,
                            "Longitude": 37.856486,
                            "Index": 143966,
                            "Column6": "Reutov",
                            "Город": "Реутов"
                        },
                        {
                            "undefined": "Руза улица Солнцева, 9",
                            "Адреса": "улица Солнцева, 9",
                            "Latitude": 55.7010162,
                            "Longitude": 36.1951516,
                            "Index": 143103,
                            "Column6": "Ruza",
                            "Город": "Руза"
                        },
                        {
                            "undefined": "Сергиев Посад проспект Красной Армии, 171",
                            "Адреса": "проспект Красной Армии, 171",
                            "Latitude": 56.3163168,
                            "Longitude": 38.136107,
                            "Index": 141310,
                            "Column6": "Sergiyev Posad",
                            "Город": "Сергиев Посад"
                        },
                        {
                            "undefined": "Хотьково улица Ленина, 4",
                            "Адреса": "улица Ленина, 4",
                            "Latitude": 56.2509339,
                            "Longitude": 37.9771349,
                            "Index": 141371,
                            "Column6": "Khotkovo",
                            "Город": "Хотьково"
                        },
                        {
                            "undefined": "Серпухов площадь Ленина, 12\/20",
                            "Адреса": "площадь Ленина, 12\/20",
                            "Latitude": 54.91280399999999,
                            "Longitude": 37.415529,
                            "Index": 142200,
                            "Column6": "Serpukhov",
                            "Город": "Серпухов"
                        },
                        {
                            "undefined": "Солнечногорск Советская улица, 10\/18",
                            "Адреса": "Советская улица, 10\/18",
                            "Latitude": 56.184905,
                            "Longitude": 36.978504,
                            "Index": 141501,
                            "Column6": "Solnechnogorsk",
                            "Город": "Солнечногорск"
                        },
                        {
                            "undefined": "Ступино улица Андропова, 34\/7",
                            "Адреса": "улица Андропова, 34\/7",
                            "Latitude": 54.8869341,
                            "Longitude": 38.0796386,
                            "Index": 142800,
                            "Column6": "Stupino",
                            "Город": "Ступино"
                        },
                        {
                            "undefined": "Фрязино Московская улица, 3",
                            "Адреса": "Московская улица, 3",
                            "Latitude": 55.9574937,
                            "Longitude": 38.053351,
                            "Index": 141190,
                            "Column6": "Fryazino",
                            "Город": "Фрязино"
                        },
                        {
                            "undefined": "Химки улица Горшина, 1",
                            "Адреса": "улица Горшина, 1",
                            "Latitude": 55.887711,
                            "Longitude": 37.431015,
                            "Index": 141432,
                            "Column6": "Khimki",
                            "Город": "Химки"
                        },
                        {
                            "undefined": "Черноголовка Институтский проспект, 6",
                            "Адреса": "Институтский проспект, 6",
                            "Latitude": 56.00811119999999,
                            "Longitude": 38.3771859,
                            "Index": 142432,
                            "Column6": "Chernogolovka",
                            "Город": "Черноголовка"
                        },
                        {
                            "undefined": "Чехов Молодёжная улица, 1\/4",
                            "Адреса": "Молодёжная улица, 1\/4",
                            "Latitude": 55.15145399999999,
                            "Longitude": 37.468277,
                            "Index": 142301,
                            "Column6": "Chekhov",
                            "Город": "Чехов"
                        },
                        {
                            "undefined": "Шатура площадь Ленина, 5",
                            "Адреса": "площадь Ленина, 5",
                            "Latitude": 55.5770683,
                            "Longitude": 39.5453821,
                            "Index": 140700,
                            "Column6": "Shatura",
                            "Город": "Шатура"
                        },
                        {
                            "undefined": "Щелково площадь Ленина, 1",
                            "Адреса": "площадь Ленина, 1",
                            "Latitude": 55.9218446,
                            "Longitude": 37.9933128,
                            "Index": 141100,
                            "Column6": "Shchyolkovo",
                            "Город": "Щелково"
                        },
                        {
                            "undefined": "Электросталь проспект Ленина, 47\/12",
                            "Адреса": "проспект Ленина, 47\/12",
                            "Latitude": 55.7852207,
                            "Longitude": 38.4450941,
                            "Index": 144003,
                            "Column6": "Elektrostal",
                            "Город": "Электросталь"
                        },
                        {
                            "undefined": "Алексеевка улица Победы, 20",
                            "Адреса": "улица Победы, 20",
                            "Latitude": 50.6333188,
                            "Longitude": 38.6768664,
                            "Index": 309850,
                            "Column6": "Alexeyevka",
                            "Город": "Алексеевка"
                        },
                        {
                            "undefined": "Белгород Соборная площадь, 1",
                            "Адреса": "Соборная площадь, 1",
                            "Latitude": 50.5960182,
                            "Longitude": 36.5861657,
                            "Index": 308009,
                            "Column6": "Belgorod",
                            "Город": "Белгород"
                        },
                        {
                            "undefined": "Губкин улица Мира, 20",
                            "Адреса": "улица Мира, 20",
                            "Latitude": 51.2833031,
                            "Longitude": 37.5338337,
                            "Index": 309181,
                            "Column6": "Gubkin",
                            "Город": "Губкин"
                        },
                        {
                            "undefined": "Старый Оскол улица Ленина, 40",
                            "Адреса": "улица Ленина, 40",
                            "Latitude": 51.2972093,
                            "Longitude": 37.834732,
                            "Index": 309514,
                            "Column6": "Stary Oskol",
                            "Город": "Старый Оскол"
                        },
                        {
                            "undefined": "Шебекино Парковая улица, 1",
                            "Адреса": "Парковая улица, 1",
                            "Latitude": 50.40204869999999,
                            "Longitude": 36.87962940000001,
                            "Index": 309290,
                            "Column6": "Shebekino",
                            "Город": "Шебекино"
                        },
                        {
                            "undefined": "Строитель улица Ленина, 18А",
                            "Адреса": "улица Ленина, 18А",
                            "Latitude": 50.7843816,
                            "Longitude": 36.4882948,
                            "Index": 309070,
                            "Column6": "Stroitel",
                            "Город": "Строитель"
                        },
                        {
                            "undefined": "Брянск бульвар Гагарина, 18",
                            "Адреса": "бульвар Гагарина, 18",
                            "Latitude": 53.2433679,
                            "Longitude": 34.364764,
                            "Index": 241044,
                            "Column6": "Bryansk",
                            "Город": "Брянск"
                        },
                        {
                            "undefined": "Клинцы проспект Ленина, 13",
                            "Адреса": "проспект Ленина, 13",
                            "Latitude": 52.7527714,
                            "Longitude": 32.2320869,
                            "Index": 243140,
                            "Column6": "Klintsy",
                            "Город": "Клинцы"
                        },
                        {
                            "undefined": "Александров улица Ленина, 64",
                            "Адреса": "улица Ленина, 64",
                            "Latitude": 56.3978111,
                            "Longitude": 38.72608839999999,
                            "Index": 601650,
                            "Column6": "Alexandrov",
                            "Город": "Александров"
                        },
                        {
                            "undefined": "Владимир Большая Московская улица, 27",
                            "Адреса": "Большая Московская улица, 27",
                            "Latitude": 56.129115,
                            "Longitude": 40.406021,
                            "Index": 600000,
                            "Column6": "Vladimir",
                            "Город": "Владимир"
                        },
                        {
                            "undefined": "Гусь-Хрустальный улица Писарева, 8",
                            "Адреса": "улица Писарева, 8",
                            "Latitude": 55.6200536,
                            "Longitude": 40.6562679,
                            "Index": 601501,
                            "Column6": "Gus-Khrustalny",
                            "Город": "Гусь-Хрустальный"
                        },
                        {
                            "undefined": "Ковров проспект Ленина, 25",
                            "Адреса": "проспект Ленина, 25",
                            "Latitude": 56.360982,
                            "Longitude": 41.311068,
                            "Index": 601901,
                            "Column6": "Kovrov",
                            "Город": "Ковров"
                        },
                        {
                            "undefined": "Муром улица Ленина, 24",
                            "Адреса": "улица Ленина, 24",
                            "Latitude": 55.57851059999999,
                            "Longitude": 42.0532256,
                            "Index": 602267,
                            "Column6": "Murom",
                            "Город": "Муром"
                        },
                        {
                            "undefined": "Покров Октябрьская улица, 44",
                            "Адреса": "Октябрьская улица, 44",
                            "Latitude": 47.6572805,
                            "Longitude": 34.07859000000001,
                            "Index": 53300,
                            "Column6": "Pokrov",
                            "Город": "Покров"
                        },
                        {
                            "undefined": "Воронеж улица Платонова, 18",
                            "Адреса": "улица Платонова, 18",
                            "Latitude": 51.6591535,
                            "Longitude": 39.1990977,
                            "Index": 394018,
                            "Column6": "Voronez",
                            "Город": "Воронеж"
                        },
                        {
                            "undefined": "Россошь площадь Ленина, 8",
                            "Адреса": "площадь Ленина, 8",
                            "Latitude": 50.1980926,
                            "Longitude": 39.5637598,
                            "Index": 396650,
                            "Column6": "Rossosh",
                            "Город": "Россошь"
                        },
                        {
                            "undefined": "Иваново проспект Ленина, 40",
                            "Адреса": "проспект Ленина, 40",
                            "Latitude": 56.9991492,
                            "Longitude": 40.9746886,
                            "Index": 153000,
                            "Column6": "Ivanovo",
                            "Город": "Иваново"
                        },
                        {
                            "undefined": "Кинешма улица имени Ленина, 24\/8",
                            "Адреса": "улица имени Ленина, 24\/8",
                            "Latitude": 57.4442091,
                            "Longitude": 42.16249620000001,
                            "Index": 155800,
                            "Column6": "Kineshma",
                            "Город": "Кинешма"
                        },
                        {
                            "undefined": "Шуя улица Ленина, 21",
                            "Адреса": "улица Ленина, 21",
                            "Latitude": 56.85450789999999,
                            "Longitude": 41.3839945,
                            "Index": 155900,
                            "Column6": "Shuya",
                            "Город": "Шуя"
                        },
                        {
                            "undefined": "Калуга улица Кирова, 56",
                            "Адреса": "улица Кирова, 56",
                            "Latitude": 54.5132604,
                            "Longitude": 36.260776,
                            "Index": 248001,
                            "Column6": "Kaluga",
                            "Город": "Калуга"
                        },
                        {
                            "undefined": "Малоярославец площадь Ленина, 6",
                            "Адреса": "площадь Ленина, 6",
                            "Latitude": 55.013344,
                            "Longitude": 36.46172300000001,
                            "Index": 249096,
                            "Column6": "Maloyaroslavets",
                            "Город": "Малоярославец"
                        },
                        {
                            "undefined": "Обнинск проспект Маркса, 34",
                            "Адреса": "проспект Маркса, 34",
                            "Latitude": 55.11482789999999,
                            "Longitude": 36.594091,
                            "Index": 249034,
                            "Column6": "Obninsk",
                            "Город": "Обнинск"
                        },
                        {
                            "undefined": "Кострома проспект Мира, 1",
                            "Адреса": "проспект Мира, 1",
                            "Latitude": 57.768615,
                            "Longitude": 40.927846,
                            "Index": 156000,
                            "Column6": "Kostroma",
                            "Город": "Кострома"
                        },
                        {
                            "undefined": "Железногорск улица Ленина, 50",
                            "Адреса": "улица Ленина, 50",
                            "Latitude": 52.33761,
                            "Longitude": 35.352318,
                            "Index": 307170,
                            "Column6": "Zheleznogorsk",
                            "Город": "Железногорск"
                        },
                        {
                            "undefined": "Курск Красная площадь, 6",
                            "Адреса": "Красная площадь, 6",
                            "Latitude": 51.7300074,
                            "Longitude": 36.1915096,
                            "Index": 305000,
                            "Column6": "Kursk",
                            "Город": "Курск"
                        },
                        {
                            "undefined": "Курчатов Коммунистический проспект, 28А",
                            "Адреса": "Коммунистический проспект, 28А",
                            "Latitude": 51.659302,
                            "Longitude": 35.6558502,
                            "Index": 307251,
                            "Column6": "Kurchatov",
                            "Город": "Курчатов"
                        },
                        {
                            "undefined": "Елец улица Свердлова, 11",
                            "Адреса": "улица Свердлова, 11",
                            "Latitude": 52.6216708,
                            "Longitude": 38.49950010000001,
                            "Index": 399770,
                            "Column6": "Yelets",
                            "Город": "Елец"
                        },
                        {
                            "undefined": "Липецк Кузнечная улица, 4А",
                            "Адреса": "Кузнечная улица, 4А",
                            "Latitude": 52.6076797,
                            "Longitude": 39.5975208,
                            "Index": 398050,
                            "Column6": "Lipeck",
                            "Город": "Липецк"
                        },
                        {
                            "undefined": "Орёл улица Ленина, 36",
                            "Адреса": "улица Ленина, 36",
                            "Latitude": 52.969696,
                            "Longitude": 36.0644289,
                            "Index": 302028,
                            "Column6": "Oryol",
                            "Город": "Орёл"
                        },
                        {
                            "undefined": "Касимов Советская улица, 1",
                            "Адреса": "Советская улица, 1",
                            "Latitude": 54.9497574,
                            "Longitude": 41.3974053,
                            "Index": null,
                            "Column6": "Kasimov",
                            "Город": "Касимов"
                        },
                        {
                            "undefined": "Рязань улица Маяковского, 82\/25",
                            "Адреса": "улица Маяковского, 82\/25",
                            "Latitude": 54.628249,
                            "Longitude": 39.7338669,
                            "Index": 390000,
                            "Column6": "Ryazan'",
                            "Город": "Рязань"
                        },
                        {
                            "undefined": "Вязьма улица Восстания, 1",
                            "Адреса": "улица Восстания, 1",
                            "Latitude": 55.2058119,
                            "Longitude": 34.2959385,
                            "Index": 215110,
                            "Column6": "Vyazma",
                            "Город": "Вязьма"
                        },
                        {
                            "undefined": "Гагарин улица Петра Алексеева, 1",
                            "Адреса": "улица Петра Алексеева, 1",
                            "Latitude": 55.5524982,
                            "Longitude": 34.9960221,
                            "Index": 215010,
                            "Column6": "Gagarin",
                            "Город": "Гагарин"
                        },
                        {
                            "undefined": "Смоленск улица Ленина, 7\/2",
                            "Адреса": "улица Ленина, 7\/2",
                            "Latitude": 54.7827064,
                            "Longitude": 32.04933,
                            "Index": 214000,
                            "Column6": "Smolensk",
                            "Город": "Смоленск"
                        },
                        {
                            "undefined": "Ярцево улица Гагарина, 1",
                            "Адреса": "улица Гагарина, 1",
                            "Latitude": 55.0659583,
                            "Longitude": 32.6889497,
                            "Index": 215800,
                            "Column6": "Yartsevo",
                            "Город": "Ярцево"
                        },
                        {
                            "undefined": "Мичуринск Федеративная улица, 61",
                            "Адреса": "Федеративная улица, 61",
                            "Latitude": 52.8929888,
                            "Longitude": 40.4989846,
                            "Index": 393761,
                            "Column6": "Michurinsk",
                            "Город": "Мичуринск"
                        },
                        {
                            "undefined": "Тамбов улица Карла Маркса, 143\/22",
                            "Адреса": "улица Карла Маркса, 143\/22",
                            "Latitude": 52.72074000000001,
                            "Longitude": 41.452228,
                            "Index": 392036,
                            "Column6": "Tambov",
                            "Город": "Тамбов"
                        },
                        {
                            "undefined": "Бологое улица Кирова, 15",
                            "Адреса": "улица Кирова, 15",
                            "Latitude": 57.88547739999999,
                            "Longitude": 34.04852100000001,
                            "Index": 171080,
                            "Column6": "Bologoye",
                            "Город": "Бологое"
                        },
                        {
                            "undefined": "Вышний Волочёк Ванчакова линия, 7",
                            "Адреса": "Ванчакова линия, 7",
                            "Latitude": 57.5848755,
                            "Longitude": 34.5592745,
                            "Index": 171163,
                            "Column6": "Vyshny Volochyok",
                            "Город": "Вышний Волочёк"
                        },
                        {
                            "undefined": "Кимры улица Кирова, 15",
                            "Адреса": "улица Кирова, 15",
                            "Latitude": 56.8743518,
                            "Longitude": 37.3565418,
                            "Index": 171506,
                            "Column6": "Kimry",
                            "Город": "Кимры"
                        },
                        {
                            "undefined": "Конаково улица Энергетиков, 28",
                            "Адреса": "улица Энергетиков, 28",
                            "Latitude": 56.7135216,
                            "Longitude": 36.7806792,
                            "Index": 171252,
                            "Column6": "Konakovo",
                            "Город": "Конаково"
                        },
                        {
                            "undefined": "Ржев улица Ленина, 6",
                            "Адреса": "улица Ленина, 6",
                            "Latitude": 56.263507,
                            "Longitude": 34.3295,
                            "Index": 172390,
                            "Column6": "Rzhev",
                            "Город": "Ржев"
                        },
                        {
                            "undefined": "Тверь Трёхсвятская улица, 39",
                            "Адреса": "Трёхсвятская улица, 39",
                            "Latitude": 56.8588157,
                            "Longitude": 35.9111781,
                            "Index": 170100,
                            "Column6": "Tver",
                            "Город": "Тверь"
                        },
                        {
                            "undefined": "Удомля улица Попова, 25",
                            "Адреса": "улица Попова, 25",
                            "Latitude": 57.87161880000001,
                            "Longitude": 35.0075852,
                            "Index": 171841,
                            "Column6": "Udomlya",
                            "Город": "Удомля"
                        },
                        {
                            "undefined": "Богородицк улица Коммунаров, 59",
                            "Адреса": "улица Коммунаров, 59",
                            "Latitude": 53.770337,
                            "Longitude": 38.131382,
                            "Index": 301835,
                            "Column6": "Bogoroditsk",
                            "Город": "Богородицк"
                        },
                        {
                            "undefined": "Ефремов Красная площадь, 1",
                            "Адреса": "Красная площадь, 1",
                            "Latitude": 53.1378914,
                            "Longitude": 38.1189352,
                            "Index": 301840,
                            "Column6": "Yefremov",
                            "Город": "Ефремов"
                        },
                        {
                            "undefined": "Новомосковск Комсомольская улица, 34",
                            "Адреса": "Комсомольская улица, 34",
                            "Latitude": 54.010737,
                            "Longitude": 38.290233,
                            "Index": 301650,
                            "Column6": "Novomoskovsk",
                            "Город": "Новомосковск"
                        },
                        {
                            "undefined": "Тула Советская улица, 62",
                            "Адреса": "Советская улица, 62",
                            "Latitude": 54.191889,
                            "Longitude": 37.616558,
                            "Index": 300041,
                            "Column6": "Tula",
                            "Город": "Тула"
                        },
                        {
                            "undefined": "Переславль-Залесский Народная площадь, 11",
                            "Адреса": "Народная площадь, 11",
                            "Latitude": 56.73902709999999,
                            "Longitude": 38.8554158,
                            "Index": 152020,
                            "Column6": "Pereslavl-Zalessky",
                            "Город": "Переславль-Залесский"
                        },
                        {
                            "undefined": "Рыбинск Красная площадь, 3",
                            "Адреса": "Красная площадь, 3",
                            "Latitude": 58.0488284,
                            "Longitude": 38.8565506,
                            "Index": 152901,
                            "Column6": "Rybinsk",
                            "Город": "Рыбинск"
                        },
                        {
                            "undefined": "Тутаев улица Петра Шитова, 22\/32",
                            "Адреса": "улица Петра Шитова, 22\/32",
                            "Latitude": 57.86877200000001,
                            "Longitude": 39.53184299999999,
                            "Index": 152300,
                            "Column6": "Tutayev",
                            "Город": "Тутаев"
                        },
                        {
                            "undefined": "Углич Успенская площадь, 3\/2\/1",
                            "Адреса": "Успенская площадь, 3\/2\/1",
                            "Latitude": 57.52591890000001,
                            "Longitude": 38.3192215,
                            "Index": 152615,
                            "Column6": "Uglich",
                            "Город": "Углич"
                        },
                        {
                            "undefined": "Ярославль улица Нахимсона, 8",
                            "Адреса": "улица Нахимсона, 8",
                            "Latitude": 57.62472749999999,
                            "Longitude": 39.8915397,
                            "Index": 150000,
                            "Column6": "Yaroslavl'",
                            "Город": "Ярославль"
                        }
                    ]

                    let dataА = dataLinks.filter(el => el['Город'][0] === 'А')
                    let dataБ = dataLinks.filter(el => el['Город'][0] === 'Б')
                    let dataВ = dataLinks.filter(el => el['Город'][0] === 'В')
                    let dataГ = dataLinks.filter(el => el['Город'][0] === 'Г')
                    let dataЕ = dataLinks.filter(el => el['Город'][0] === 'Е')
                    let dataЗ = dataLinks.filter(el => el['Город'][0] === 'З')
                    let dataИ = dataLinks.filter(el => el['Город'][0] === 'И')
                    let dataК = dataLinks.filter(el => el['Город'][0] === 'К')
                    let dataЛ = dataLinks.filter(el => el['Город'][0] === 'Л')
                    let dataМ = dataLinks.filter(el => el['Город'][0] === 'М')
                    let dataН = dataLinks.filter(el => el['Город'][0] === 'Н')
                    let dataО = dataLinks.filter(el => el['Город'][0] === 'О')
                    let dataП = dataLinks.filter(el => el['Город'][0] === 'П')
                    let dataР = dataLinks.filter(el => el['Город'][0] === 'Р')
                    let dataС = dataLinks.filter(el => el['Город'][0] === 'С')
                    let dataТ = dataLinks.filter(el => el['Город'][0] === 'Т')
                    let dataУ = dataLinks.filter(el => el['Город'][0] === 'У')
                    let dataХ = dataLinks.filter(el => el['Город'][0] === 'Х')
                    let dataЧ = dataLinks.filter(el => el['Город'][0] === 'Ч')
                    let dataШ = dataLinks.filter(el => el['Город'][0] === 'Ш')
                    let dataЮ = dataLinks.filter(el => el['Город'][0] === 'Ю')
                    let dataЯ = dataLinks.filter(el => el['Город'][0] === 'Я')

                    ReactDOM.render(
                        <ul
                            onClick={() => getTitle(el['undefined'], el['Поддомен'])}
                            className="cities-ul hoverClass"
                            aria-label="Close"
                            itemScope="itemscope"
                            itemType="http://schema.org/SiteNavigationElement"
                        >
                            {dataА.map(el => {
                                return (
                                    <li className="cities-li" key={el['Город']}>
                                        <p className="cities-a" itemProp="url"> {el['Город']}</p>
                                    </li>
                                )
                            })}
                        </ul>,
                        document.getElementById('rootА')
                    );

                    ReactDOM.render(
                        <div>
                            {dataLinks.map((obj, Index) => {
                                return (
                                    <a
                                        key={Index}
                                        id={obj['Город']}
                                        itemProp="address" itemScope itemType="http://schema.org/PostalAddress"
                                        href="#"
                                        data-coordinate={obj['Longitude'] + ',' + obj['Latitude']}
                                        data-address={obj['Index'] + ' ' + obj['Город'] + ', ' + obj['Адреса']}
                                        data-name={obj['Адреса']}
                                        data-content="режим работы: 9:00-19:00"
                                        title=""
                                        className="mapOptions__addresses_a"
                                    >
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
                <script>
                    let adressTitle = localStorage.getItem("city")

                    let newLinkAnother
                    let newAdress

                    function getTitle(city, newLink, adress) {
                        console.log(adress)
                        newAdress = adress
                        adressTitle = city

                        newLinkAnother = newLink
                        console.log(city, newLink)
                        document.querySelector('.titleFirst1').innerHTML = `${city}`
                        document.querySelector('.titleFirst2').innerHTML = `${city}`
                        document.querySelector('.titleFirst3').innerHTML = `${city}`
                        localStorage.setItem('city', city);
                        //work
                        var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + `?${newLink}`;
                        window.history.pushState({
                            path: newurl
                        }, '', newurl);
                        //work

                        localStorage.setItem('link', newLink ? newLink : '')

                        window.location.reload()
                        localStorage.setItem('adress', newAdress ? newAdress : 'улица Ленинская Слобода, 19, 3 этаж, офис 3,034 (БЦ Омега Плаза)')

                        document.querySelector('.cities-wrapper').style.display = 'none'
                    }
                </script>
                <script>
                    setTimeout(() => {
                        const clickChelbinsk = document.querySelector("#Москва")
                        clickChelbinsk.click()
                    }, 1500)
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
            </div>
        </div>
    </div>

    <input id="init-map-subdomain" type="hidden" value="37.484137,55.642164" name="_token">
</section>

<footer id="footer-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="footer-li inline bold">
                    <li><a href="kredit-pod-pts.php">Кредит под ПТС</a></li>
                    <li><a href="dengi-pod-gruzovoi-avtomobil.php">Грузовые авто</a></li>
                    <li><a href="dengi-pod-spectehniku.php">Спецтехника</a></li>
                    <li><a href="dengi-pod-motocikl.php">Мототехника</a></li>
                    <li><a href="dengi-pod-pts-urlica.php">Юр. Лица</a></li>
                    <li><a href="avtolombard.php">Автоломбард</a></li>
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
                    <p>«Кэш Авто» не является финансовым учреждением, банком или МФО. Сайт предоставляет
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


<div class="modal fade" id="CallPhone-ver-4" tabIndex="-1" role="dialog" aria-hidden="true">
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


<div class="modal fade" id="onlajn-zayavka-short" tabIndex="-1" role="dialog" aria-hidden="true">
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
<div class="modal fade" id="onlajn-zayavka-callback-success" tabIndex="-1" role="dialog" aria-hidden="true">
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
<div class="modal fade" id="onlajn-zayavka-callback" tabIndex="-1" role="dialog" aria-hidden="true">
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
<div class="modal fade" id="onlajn-zayavka-partners" tabIndex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Подать заявку</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <form class="ajax_form" method="post" action="./thanks.php"
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
<div class="modal fade" id="onlajn-zayavka-srochnyj-vykup" tabIndex="-1" role="dialog" aria-hidden="true">
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
                            <li><a href="kredit-pod-pts.php">Кредит под ПТС</a></li>
                            <li><a href="dengi-pod-gruzovoi-avtomobil.php">Грузовые авто</a></li>
                            <li><a href="dengi-pod-spectehniku.php">Спецтехника</a></li>
                            <li><a href="dengi-pod-motocikl.php">Мототехника</a></li>
                            <li><a href="dengi-pod-pts-urlica.php">Юр. Лица</a></li>
                            <li><a href="avtolombard.php">Автоломбард</a></li>
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
            <div class="off-canvas-phone"><a href="tel:<?= $tel ?>"><?= $phone ?></a><br></div>
        </div>

        <div class="off-canvas-grey">
            <div class="off-canvas-content modal-dialog-centered">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="off-canvas-li">
                            <li><a href="kredit-pod-pts.php">Кредит под ПТС</a></li>
                            <li><a href="dengi-pod-gruzovoi-avtomobil.php">Грузовые авто</a></li>
                            <li><a href="dengi-pod-spectehniku.php">Спецтехника</a></li>
                            <li><a href="dengi-pod-motocikl.php">Мототехника</a></li>
                            <li><a href="dengi-pod-pts-urlica.php">Юр. Лица</a></li>
                            <li><a href="avtolombard.php">Автоломбард</a></li>
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

<div class="modal fade" id="CallPhone-ver-1" tabIndex="-1" role="dialog" aria-hidden="true">
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
<div class="modal fade" id="CallPhone-ver-2" tabIndex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Получите решение по займу</h2>
                <p>Для п��лучения результата оставьте контактные данные</p>
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
<div class="modal fade" id="CallPhone-ver-3" tabIndex="-1" role="dialog" aria-hidden="true">
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

<div class="modal fade" id="Application" tabIndex="-1" role="dialog" aria-hidden="true">
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

                <div class="letter">Е</div>
                <div id="rootЕ"></div>

                <div class="letter">Ж</div>
                <div id="rootЖ"></div>

                <div class="letter">З</div>
                <div id="rootЗ"></div>
            </div>
            <div class="col-sm-12 col-md-3">

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

            </div>
            <div class="col-sm-12 col-md-3">

                <div class="letter">С</div>
                <div id="rootС"></div>
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

                <div class="letter">Э</div>
                <div id="rootЭ"></div>

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