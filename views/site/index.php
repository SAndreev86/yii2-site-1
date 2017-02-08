<?php

/* @var $this yii\web\View */

$this->title = 'Время окон | Пластиковые окна Ульяновск | Главная';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Окно надежные окна ПВХ ВРЕМЯОКОН работа REHAU материалы качественные Широкий выбор',
]);

$files = new Yii::$app->slid;
?>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-8 slider_pad">
            <div class="row row_pad_bottom">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <?php foreach ($files->readFiles("images/slider/ivent") as $file): ?>
                        <li>
                            <img src="images/slider/ivent/<?= $file ?>.jpg">
                        </li>
                        <?php endforeach; ?>
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
            <div class="row ">

                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <h4 class="text-center">Наши партнеры</h4>
                        <div class="slider-dealers">
                            <?php foreach ($files->readFiles("images/slider/client") as $file): ?>
                                <div><img src="images/slider/client/<?= $file ?>.jpg" alt="Окно" id="modal_<?= $file ?>"
                                          class="img-thumbnail center-block img-responsive img_dealers"></div>
                            <?php endforeach; ?>
                        </div>

                        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                        <script type="text/javascript" src="slick/slick.min.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('.slider-dealers').slick({

                                    autoplay: true,
                                    autoplaySpeed: 2000,
                                    dots: true,
                                    speed: 300,
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    responsive: [
                                        {
                                            breakpoint: 1024,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1,
                                                infinite: true,
                                                dots: true
                                            }
                                        },
                                        {
                                            breakpoint: 600,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                        },
                                        {
                                            breakpoint: 480,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                        }
                                        // You can unslick at a given breakpoint now by adding:
                                        // settings: "unslick"
                                        // instead of a settings object
                                    ]
                                });
                            });
                        </script>
                    </div>
                <div class="col-md-1 col-sm-1 col-xs-0"></div>

                    <div class="col-md-5 col-sm-5 col-xs-12 ">
                        <h4 class="text-center">Сертификаты</h4>


                        <div class="slider-index ">
                            <?php foreach ($files->readFiles("images/slider/certificates") as $file): ?>
                                <div><img src="images/slider/certificates/<?=$file?>.jpg" alt="Окно" id="modal_<?=$file?>"
                                          class="img-thumbnail center-block img-responsive " onclick="modalShow();" ></div>
                            <?php endforeach; ?>
                        </div>

                        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                        <script type="text/javascript" src="slick/slick.min.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $('.slider-index').slick({

                                    autoplay: true,
                                    autoplaySpeed: 3000,
                                    dots: true,
                                    speed: 300,
                                    slidesToShow: 4,
                                    slidesToScroll: 4,
                                    responsive: [
                                        {
                                            breakpoint: 1024,
                                            settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 2,
                                                infinite: true,
                                                dots: true
                                            }
                                        },
                                        {
                                            breakpoint: 600,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                        },
                                        {
                                            breakpoint: 480,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                        }
                                        // You can unslick at a given breakpoint now by adding:
                                        // settings: "unslick"
                                        // instead of a settings object
                                    ]
                                });
                            });
                        </script>


                        <!-- HTML-код модального окна -->
                        <div id="myModalBox" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Заголовок модального окна -->
                                    <!-- Основное содержимое модального окна -->
                                    <div class="modal-body">
                                        Содержимое модального окна...
                                    </div>
                                    <!-- Футер модального окна -->
                                </div>
                            </div>
                        </div>

                        <!-- Скрипт, вызывающий модальное окно после загрузки страницы -->
                        <script>
                            function modalShow() {

                                var e = window.event;
                                var obj = e.target||e.srcElement;
                                $(".modal-body").html($("#"+obj.id).clone());
                                $("#myModalBox").modal('show');
                            };
                        </script>



                    </div>

                <div class="news2"></div>
            </div>
        </div>
            <? include 'menu.php'; ?>
        </div>
    </div>
</div>
