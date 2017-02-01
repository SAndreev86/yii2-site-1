<?php

/* @var $this yii\web\View */

$this->title = 'Время окон | Пластиковые окна Ульяновск | Главная';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Окно надежные окна ПВХ ВРЕМЯОКОН работа REHAU материалы качественные Широкий выбор',
]);
?>
<div class="container">
    <div class="row">
        <div class="col-md-9 slider_pad">
            <div class="row row_pad_bottom">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="images/slider/1.jpg">
                        </li>
                        <li>
                            <img src="images/slider/2.jpg">
                        </li>
                        <li>
                            <img src="images/slider/3.jpg">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="windows"><img src="images/main/two.jpg" alt="Окно"
                                           class="img-circle center-block img-responsive"></a>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="contact-heading">
                                <h2>Окна и балконные рамы</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="doors"><img src="images/main/three.jpg" alt="Дверь"
                                         class="img-circle center-block img-responsive">
                    </a>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="contact-heading">
                                <h2>Двери стальные Аргус</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="entrances"><img src="images/main/one.jpg" alt="Витраж"
                                              class="img-circle center-block img-responsive">
                    </a>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="contact-heading">
                                <h2>Входные группы и витражи</h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="news"></div>
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    
                    <h4 class="text-left">Почему выбирают нас?</h4>
                    <ul class="list_our">
                        <li>- опыт нашей работы более 10 лет</li>
                        <li>- предварительный расчет заказа on-line</li>
                        <li>- бесплатный выезд замерщика</li>
                        <li>- оформление договора на дому</li>
                        <li>- разные виды оплаты заказа</li>
                        <li>- заводская гарантия качества от производителя</li>
                        <li>- все изделия изготавливаются по индивидуальным<br/> размерам и пожеланиям клиента</li>
                        <li>- гарантийоное обслуживание в течении 5 лет!</li>
                    </ul>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-0"></div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <h4 class="text-left">Этапы работы:</h4>
                    <ul class="list_our">
                        <li>- предварительный расчет</li>
                        <li>- замер</li>
                        <li>- составление точной сметы заказа</li>
                        <li>- согласование и подписание договора</li>
                        <li>- изготовление изделий по индивидуальным размерам</li>
                        <li>- монтаж в удобное для вас время</li>
                    </ul>
                </div>
                <div class="news2"></div>
            </div>
            <div class="news"></div>
            <div class="rowpad row"></div>
            <div class="row">
                <a href="/dealers">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <h4 class="text-left">Наши партнеры</h4>
                    </div>
                </a>
                <div class="col-md-1 col-sm-1 col-xs-0"></div>
                <a href="/certificates"
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <h4 class="text-left">Сертификаты</h4>
                    </div>
                </a>
                <div class="news2"></div>
            </div>
        </div>
        <? include 'menu.php'; ?>
    </div>
</div>
