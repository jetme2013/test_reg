<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;


Modal::begin([
    'header'=>'<h4>Сброс пароля</h4>',
    'id'=>'reset-modal',
]);
?>

    <p>Для смены пароля введите секретную фразу:</p>

<?php $form = ActiveForm::begin([
    'id' => 'reset-form',
    'enableAjaxValidation' => true,
    'action' => ['site/ajax-reset']
]);
echo $form->field($model, 'password_secret_phrase')->textInput(['id' => 'secret-phrase'])->label('фраза для смены пароля');
echo $form->field($model, 'password')->passwordInput(['class' => 'hidden','id'=>'refresh-password'])->label(false);
?>

    <div class="form-group">
        <div class="text-right">

            <?php
            echo Html::button('Отмена', ['class' => 'btn btn-default', 'data-dismiss' => 'modal','style'=>'margin:5px;']);
            echo Html::submitButton('Сменить пароль', ['class' => 'btn btn-primary', 'name' => 'reset-button','style'=>'margin:5px;']);
            ?>

        </div>
    </div>

<?php
ActiveForm::end();
Modal::end();