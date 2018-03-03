<?php

/* @var $this yii\web\View */
/* @var $model b4djo\seo\models\SeoPage */

$this->title = \Yii::t('seo', 'Create');
$this->params['breadcrumbs'][] = ['label' => 'Seo Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-page-create">

    <?= $this->render('_form', [
        'model' => $model,
        'pageAttributes' => $pageAttributes,
    ]) ?>

</div>
