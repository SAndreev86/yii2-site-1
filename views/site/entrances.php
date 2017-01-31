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
                <div class="list-group border_menu">
                    <a href="/windows" class="list-group-item" >Окна и
                        балконные рамы</a>
                    <a href="/entrances" class="list-group-item">Входные группы и витраж</a>
                    <a href="/doors" class="list-group-item">Двери</a>
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

