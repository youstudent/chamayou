<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SpStore */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sp-store-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shoper_id')->textInput() ?>

    <?= $form->field($model, 'sp_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinces_id')->textInput() ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'area_id')->textInput() ?>

    <?= $form->field($model, 'add_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sp_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cover')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intro')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
