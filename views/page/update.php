<?php

/* @var $this yii\web\View */
/* @var $model b4djo\seo\models\SeoPage */

$this->title = Yii::t('seo', 'Update') . ': ' . $model->route;
$this->params['breadcrumbs'][] = ['label' => 'Seo Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seo-page-update">
    <?= $this->render('_form', [
        'model' => $model,
        'pageAttributes' => $pageAttributes,
    ]) ?>
</div>
