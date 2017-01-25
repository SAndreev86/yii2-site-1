<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

?>
<div class="container">
    <div class="row">
        <? include 'menu.php'; ?>
        <div class="col-sm-9">

            <div class="row">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                    <div class="row">
                        <label class="col-sm-2 control-label">
                            Изображение: <img
                                    src="/<? echo($action->image != '' ? $action->image : 'images/goods/noimage.png') ?>"
                                    alt="..." class="img-rounded">
                            <?= $form->field($model, 'image')->textInput(['value' => $action->image])->fileinput()->label(false, ['style' => 'display:none']); ?>
                        </label>
                        <div class="col-sm-10">

                                    <label class=" control-label">Наименование:</label>
                                    <?= $form->field($model, 'name')->textInput(['value' => $action->name])->label(false, ['style' => 'display:none']); ?>

                        </div>
                    </div>


                    <div class="row">
                        <label class=" col-md-1 col-sm-2 control-label">Описание:</label>
                        <div class="col-md-11 col-sm-10">
                            <?= $form->field($model, 'description')->widget(TinyMce::className(), [
                                'options' => ['rows' => 10, 'value' => $action->description,],
                                'language' => 'ru',
                                'clientOptions' => [
                                    'plugins' => [
                                        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                                        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                        'save table contextmenu directionality emoticons template paste textcolor'
                                    ],
                                    'toolbar' => 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
                                ]
                            ])->label(false, ['style' => 'display:none']); ?>
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                <div class="col-md-0 col-sm-0"></div>
            </div>
        </div>
    </div>
</div>
    