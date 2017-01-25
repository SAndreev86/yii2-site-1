<?php

use yii\helpers\Html;

?>
<div class="row">
    <div class="col-xs-2">
        <ul class="navmenu navmenu-default navmenu-fixed-left" style="background: #333;">

            <li><a href="admin/doors">Двери: <?= $categories['Двери'] ?></a></li>
            <li><a href="#">Окна: <?= $categories['Окна'] ?></a></li>
            <li><a href="#">Витражи: <?= $categories['Витражи'] ?></a></li>
            <li><a href="#">Балконные рамы: <?= $categories['Балконные рамы'] ?></a></li>

        </ul>
        <?php echo Yii::$app->user->isGuest ? (
        ['label' => 'Login', 'url' => ['/admin/login']]
        ) : (
            Html::beginForm(['/admin/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->login . ')',
                ['class' => 'btn btn-success logout btn-block']
            )
            . Html::endForm()
        )
        ?>
    </div>
    <div class="col-xs-10"></div>
</div>

