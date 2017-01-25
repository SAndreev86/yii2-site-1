<?php
use yii\helpers\Html;

?>


<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading"><a class="title11" href="#">Частным лицам</a></div>
        <div class="panel-body">
            Список товаров в нашем магазине:
        </div>
        <div class="list-group">
            <a href="/admin/windows" class="list-group-item">Окна и балконные рамы <span class="badge"><?= $categories['Окна'] ?></span></a>
            <a href="/admin/entrances" class="list-group-item">Входные группы и витражи <span class="badge"><?= $categories['Витражи'] ?></span></a>
            <a href="/admin/doors" class="list-group-item">Двери <span class="badge"><?= $categories['Двери'] ?></span></a>
        </div>
    </div>
    <?php echo Yii::$app->user->isGuest ? (
    ['label' => 'Login', 'url' => ['/admin/login']]
    ) : (
        Html::beginForm(['/admin/logout'], 'post')
        . Html::submitButton(
            'Выйти (' . Yii::$app->user->identity->login . ')',
            ['class' => 'btn btn-success logout btn-block']
        )
        . Html::endForm()
    )
    ?>

</div>