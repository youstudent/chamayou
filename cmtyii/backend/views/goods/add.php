<?php
use backend\assets\AppAsset;

$this->title = '添加商品';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                </header>
                <div class="panel-body">
                    <?php
                    $form = \yii\bootstrap\ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
                    echo $form->field($model, 'goods_name')->textInput();
                    echo $form->field($model, 'file')->fileInput()->label('商品图片');
                    if(!$model->isNewRecord){
                     echo \yii\helpers\Html::img($model->cover,['width'=>'60px']);
                    }
                    echo $form->field($model, 'price')->textInput();
                    echo $form->field($model, 'store')->textInput();
                    echo $form->field($model, 'spec')->textInput();
                    echo $form->field($model, 'cat_id')->dropDownList($cate);
                    echo $form->field($model, 'content')->widget(\yii\redactor\widgets\Redactor::className(),[
                        'clientOptions' => [
                            'imageManagerJson' => ['/redactor/upload/image-json'],
                            'imageUpload' => ['/redactor/upload/image'],
                            'fileUpload' => ['/redactor/upload/file'],
                            'lang' => 'zh_cn',
                            'plugins' => ['clips', 'fontcolor','imagemanager']
                        ]
                    ]);
                    echo \yii\helpers\Html::submitInput('提交', ['class' => 'btn btn-success', 'style' => 'margin-right:1em;']);
                    \yii\bootstrap\ActiveForm::end();
                    ?>
                </div>
            </section>
        </div>
    </div>
</section>


    
