<?php

$this->title = 'Время окон | Пластиковые окна Ульяновск | Двери';
$this->params['breadcrumbs'][] = 'Двери';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Двери отделка ЦЕНА Список товаров Частным лицам магазин',
]);
?>
<!--slider-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                    <?php foreach ($doors as $door): ?>
                    <div class="container1 doors_col">
                            <div class="title">
                                <h4><?= $door->name_product ?></h4></div>
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-xs-3"><img src="/<?= $door->image ?>" alt="<?= $door->name_product ?>"
                                                                             class="img-thumbnail img_heig"></div>
                                <div class="col-md-9 col-sm-8 col-xs-9">


                                    <div class="table-responsive">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td class="basic">Конструкция</td>
                                                <td class="description"><?= $door->design ?></td>
                                            </tr>
                                            <tr>
                                                <td class="basic">Наружная отделка</td>
                                                <td class="description"><?= $door->external_decoration ?></td>
                                            </tr>
                                            <tr>
                                                <td class="basic">Внутренняя отделка</td>
                                                <td class="description"><?= $door->internal_decoration ?></td>
                                            </tr>
                                            <tr>
                                                <td class="basic">Осн. замок</td>
                                                <td class="description"><?= $door->main_сastle ?></td>
                                            </tr>
                                            <tr>
                                                <td class="basic">Доп. замок</td>
                                                <td class="description"><?= $door->additional_сastle ?></td>
                                            </tr>
                                            <tr>
                                                <td class="basic">Ночная задвижка</td>
                                                <td class="description"><?= $door->night_valve ?></td>
                                            </tr>
                                            <tr>
                                                <td class="basic">Ручка</td>
                                                <td class="description"><?= $door->pen ?></td>
                                            </tr>
                                            <tr>
                                                <td class="basic">Утеплитель</td>
                                                <td class="description"><?= $door->heater ?></td>
                                            </tr>
                                        </table>
                                        <div class="price">ЦЕНА: <?= $door->price ?></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!--contact
            <div id="contact">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <?php foreach ($doors as $door): ?>
                            <div class="contact-heading">
                                <h2><?= $door->name_product ?></h2>
                                <p>Тут будут фотографии, и текст.</p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <div class="contact-heading">
                            <h2>contact</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada
                                porta elementum vitae.</p>
                        </div>
                    </div>
                </div>-->
        </div>
    </div>
</div>

