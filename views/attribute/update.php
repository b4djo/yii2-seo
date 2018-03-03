<?php

/* @var $this yii\web\View */
/* @var $model b4djo\seo\models\SeoAttribute */

$this->title = \Yii::t('seo', 'Update') . ': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Seo Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seo-attribute-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
