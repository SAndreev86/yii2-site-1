<?php

/* @var $this yii\web\View */

$this->title = 'Время окон | Пластиковые окна Ульяновск | Дилерам';
$this->params['breadcrumbs'][] = 'О компании';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Дилерам дилеры Время Окон ассортимент конструкций окна Rehau Brusbox Provedal VHS MACO Татпроф',
]);

$files = new Yii::$app->slid;

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">- СЕРТИФИКАТЫ -</h3>
            <div class="slider-nav">
                <?php foreach ($files->readFiles("images/slider/certificates") as $file): ?>
                    <div><img src="images/slider/certificates/<?=$file?>.jpg" alt="Окно" id="modal_<?=$file?>"
                              class="img-thumbnail center-block img-responsive " onclick="modalShow();" ></div>
                <?php endforeach; ?>
            </div>

            <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script type="text/javascript" src="slick/slick.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.slider-nav').slick({

                        autoplay: true,
                        autoplaySpeed: 3000,
                        dots: true,
                        speed: 300,
                        slidesToShow: 5,
                        slidesToScroll: 5,
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3,
                                    infinite: true,
                                    dots: true
                                }
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
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
    </div>
</div>

