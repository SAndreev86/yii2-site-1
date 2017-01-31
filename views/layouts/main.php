<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://vk.com/js/api/openapi.js?136" type="text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body id="top" data-spy="scroll">
<?php $this->beginBody() ?>
<!--top header-->
<header id="home">
    <section class="top-nav hidden-xs">
        <div class="container">
            <div class="row">
                <div class=".col-lg-8 col-md-8 col-sm-6">
                </div>
                <div class=".col-lg-2 col-md-2 col-sm-3">
                    <div class="top-left fa_header"></div>
                </div>
                <div class=".col-lg-2 col-md-2 col-sm-3"></div>
            </div>
        </div>
    </section>
    <!--main-nav-->
    <div id="main-nav">
        <nav class="navbar">
            <div class="container container_affix">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">
                        <div class="brand_div"></div>
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="ftheme">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Главная</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Клиентам<b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/windows">Окна и балконные рамы</a></li>
                                <li><a href="/doors">Двери стальные Аргус</a></li>
                                <li><a href="/entrances">Входные группы и витражи</a></li>
                            </ul>
                        </li>
                        <li><a href="/dealers">Дилерам</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<?= $content ?>

<div class="container">
    <div class="row">
        <?= Breadcrumbs::widget([
            'homeLink' => ['label' => 'Главная', 'url' => '/'],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>
<!--footer-->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-heading">
                    <h3><span>О нас</span></h3>
                    <p>Мы каждый день работаем над улучшением ассортимента и качества обслуживания в наших магазинах,
                        Ваше мнение очень важно для нас!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-heading">
                    <h3><span>Клиентам</span></h3>
                    <ul>
                        <li><a href="/windows">Окна и балконные рамы</a></li>
                        <li><a href="/doors">Двери стальные Аргус</a></li>
                        <li><a href="/entrances">Входные группы и витражи</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-heading">
                    <h3><span>Мы Вконтакте</span></h3>
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "150"}, 73832261);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!--bottom footer-->
<div id="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-7">
                <div class="footer-left">
                    &copy; <?php echo date("Y"); ?> Время окон.
                    <div class="credits">
                        Все права защищены.
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-4 col-xs-1"></div>
            <div class="col-md-3 col-sm-4 col-xs-4">
                <div class="top-left fa_footer">
                    <p>Мы в соцсетях:</p>
                    <ul>
                        <li><a href="https://www.facebook.com/vremyaokon/"><i class="fa fa-facebook fa-2x"
                                                                              aria-hidden="true"></i></a></li>
                        <li><a href="http://ok.ru/group/55254412296221"><i class="fa fa-odnoklassniki fa-2x"
                                                                           aria-hidden="true"></i></a></li>
                        <li><a href="https://vk.com/vremya_okon"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/vremya_okon/"><i class="fa fa-instagram fa-2x"
                                                                                aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
