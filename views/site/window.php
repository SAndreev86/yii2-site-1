<?php

$this->title = 'Время окон | Пластиковые окна Ульяновск | Окна и балконные рамы';
$this->params['breadcrumbs'][] = ['label' => 'Окна и балконные рамы', 'url'=> '/windows'];
$this->params['breadcrumbs'][] = ['label' => 'Рехау', 'url'=> '/windows/rehau'];
$this->params['breadcrumbs'][] = $window->name ;
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Окна и балконные рамы Список товаров Частным лицам магазин',
]);
?>
<!--slider-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="list-group">
                            <a href="/windows" class="list-group-item" >Окна и
                                    балконные рамы</a>
                            <a href="/entrances" class="list-group-item">Входные группы и витраж</a>
                            <a href="/doors" class="list-group-item">Двери</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                        <div class="container1">
                            <h1><?= $window->name ?></h1>
                            <img src="/<?= $window->image ?>" alt="<?= $window->name ?>" class="img-thumbnail img_fl">
                            <?= $window->description ?>
                        </div>
                </div>
            </div>
        </div>


    </div>
</div>


