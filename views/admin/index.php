<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin([
    'options' => ['class' => 'form2 form-register1'],
]); ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-4 col-md-4"></div>
            <div class="col-xs-8  col-sm-4 col-md-4">


                <?= $form->field($model, 'Login')->label('Логин'); ?>
                <?= $form->field($model, 'Password')->passwordInput()->label('Пароль'); ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                </div>


            </div>
            <div class="col-xs-2 col-sm-4 col-md-4"></div>
        </div>
    </div>

<?php ActiveForm::end(); ?>