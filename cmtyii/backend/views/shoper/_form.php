<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Shoper */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shoper-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'boss')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'credit_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contract_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'withdraw_type')->dropDownList([
        '1' => '支付宝',
        '2' => '微信',
        '3' => '银行卡',
    ]) ?>

    <?= $form->field($model, 'bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'credit_remain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'salesman_id')->textInput() ?>

    <?= $form->field($model, 'add_time')->textInput() ?>

    <?= $form->field($model, 'beans_incom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'withdraw_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sp_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
