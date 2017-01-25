<?php

$this->title = 'Время окон | Пластиковые окна Ульяновск | Витражи';
$this->params['breadcrumbs'][] = 'Витражи';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Витражи Список товаров Частным лицам магазин',
]);
?>
<!--slider-->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"><a class="title11" href="#">Частным лицам</a></div>
                <div class="panel-body">
                    Список товаров в нашем магазине:
                </div>
                <div class="list-group">
                    <a href="windows" class="list-group-item">Окна и балконные рамы <span
                                class="badge"><?= $categories['Окна'] ?></span></a>
                    <a href="entrances" class="list-group-item">Входные группы и витражи <span
                                class="badge"><?= $categories['Витражи'] ?></span></a>
                    <a href="doors" class="list-group-item">Двери <span
                                class="badge"><?= $categories['Двери'] ?></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <?php foreach ($entrances as $entrance): ?>
                <div class="container1">
                    <h1><?= $entrance->name ?></h1>
                    <img src="<?= $entrance->image ?>" alt="<?= $entrance->name ?>" class="img-rounded img_fl">
                    <?= $entrance->description ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

