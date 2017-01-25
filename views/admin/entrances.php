<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="container">
    <div class="row">
        <? include 'menu.php'; ?>
        <div class="col-md-9">
            <a href="/admin/entrance/add" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span>
                Добавить</a>


            <div class="container1">
                <?php foreach ($entrances as $entrance): ?>
                    <div class="img_height_admin row">
                        <div class=" col-md-3 col-sm-2 col-xs-4">
                            <img src="/<?= $entrance->image ?>" alt="..." class="img_h img-thumbnail">
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-5">
                            <div class="title">
                                <a href="<?= 'entrance/' . $entrance->id ?>"><h4><?= $entrance->name ?></h4></a></div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <a href="<?= '/admin/entrance/' . $entrance->id ?>/delete" class="btn btn-default btn-sm"><i
                                        class="glyphicon glyphicon-remove fa-lg"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



        </div>
    </div>
</div>