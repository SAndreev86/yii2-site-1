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
            <div class="row text-algn">
            	<div class="row row_pad_bottom">
	                <div class="col-md-4 col-sm-4 col-xs-12 col_color">
	                <i class="fa fa-clock-o fa-4x color_icon"></i>
	                <h3>Изготовление от 5 дней</h3>
	                Установка окон займет так же немного времени - всего один день.
	                </div>

	                <div class="col-md-4 col-sm-4 col-xs-12 col_color">
	                	<i class="fa fa-truck fa-4x color_icon"></i>
	                	 <h3>Бесплатный замер</h3>
	               		 Профессиональный замерщик выполнит все замеры совершенно бесплатно.
	                </div>

	                <div class="col-md-4 col-sm-4 col-xs-12 col_color">
	                	<i class="fa fa-check fa-4x color_icon"></i>
	                    <h3>Качественный монтаж</h3>
	               		 Бригада профессиональных мастеров аккуратно и быстро выполнит все работы.
	                </div>
	                <div class="news2"></div>
	            </div>

	            <div class="row">
	                <div class="col-md-4 col-sm-4 col-xs-12 col_color">
	                	<i class="fa fa-thumbs-up fa-4x color_icon"></i>
		                <h3>Гарантия</h3>
		                На все используемые материалы и работы предоставляется гарантия.
		                <h4>5 лет</h4>
	                </div>

	                <div class="col-md-4 col-sm-4 col-xs-12 col_color">
	                	<i class="fa fa-credit-card-alt fa-4x color_icon"></i>
	                	 <h3>Оплата</h3>
	               		 Вы выбираете сами как оплачивать свой заказ за наличный расчет или переводом на карту.
	                </div>

	                <div class="col-md-4 col-sm-4 col-xs-12 col_color">
	                	<i class="fa fa-rub fa-4x color_icon"></i>
	                    <h3>И главное - выгодная цена</h3>
	               		 За доступную цену вы получите отличное качество.
	                </div>
	            </div>
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
