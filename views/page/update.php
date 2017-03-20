<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\seo\models\SeoPage */

$this->title = 'Update Seo Page: ' . $model->id;
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
