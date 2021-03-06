<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Adminuser */

$this->title = yii::t('app', 'create_adminuser');
$this->params['breadcrumbs'][] = ['label' => yii::t('app', 'create'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminuser-create">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'real_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        $model::STATUS_DELETED=> yii::t('app', 'status_deleted'),
        $model::STATUS_ACTIVE=> yii::t('app', 'status_active'),
    ],
        [
            'prompt' => yii::t('app', 'prompt'),
            ''
        ]) ?>

    <div class="form-group">
        <?= Html::submitButton(yii::t('app', 'create'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
