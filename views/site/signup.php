<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
 
<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-group">
    <div>
        <?= Html::submitButton('Добавить пользователя', ['class' => 'btn btn-success']) ?>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
</div>
<?php ActiveForm::end() ?>
