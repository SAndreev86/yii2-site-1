<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="container">
    <div class="row">
        <? include 'menu.php'; ?>
        <div class="col-sm-9">

            <div class="row">
                <div class="col-md-10 col-sm-12">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                    <label class="col-sm-2 control-label">Наименование:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'name_product')->textInput(['value' => $action->name_product])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Конструкция:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'design')->textInput(['value' => $action->design])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Наружная отделка:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'externalDecoration')->textInput(['value' => $action->external_decoration])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Внутренняя отделка:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'internalDecoration')->textInput(['value' => $action->internal_decoration])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Осн. замок:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'mainCastle')->textInput(['value' => $action->main_сastle])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Доп. замок:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'additionalCastle')->textInput(['value' => $action->additional_сastle])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Ночная задвижка:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'nightValve')->textInput(['value' => $action->night_valve])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Ручка:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'pen')->textInput(['value' => $action->pen])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Утеплитель:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'heater')->textInput(['value' => $action->heater])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Цена:</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'price')->textInput(['value' => $action->price])->label(false, ['style' => 'display:none']); ?>
                    </div>
                    <label class="col-sm-2 control-label">Изображение: <img
                                src="/<? echo($action->image != '' ? $action->image : 'images/goods/noimage.png') ?>"
                                alt="..." class="img-rounded"></label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'image')->textInput(['value' => $action->image])->fileinput()->label(false, ['style' => 'display:none']); ?>
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>

                </div>
                <div class="col-md-8 col-sm-0"></div>
            </div>
        </div>
    </div>
</div>
    