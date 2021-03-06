<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model b4djo\seo\models\SeoPage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seo-page-form">
    <?php $form = ActiveForm::begin([
        'enableClientValidation' => false,
    ]); ?>

    <?= $form->field($model, 'route')->textInput(['maxlength' => true]) ?>

    <?php foreach ($pageAttributes as $i => $attribute): ?>
        <?= $form->field($attribute, '[' . $i . ']content')->textInput()->label($attribute->labelForm) ?>
    <?php endforeach; ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('seo', 'Create') : Yii::t('seo', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
