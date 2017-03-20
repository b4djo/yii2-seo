<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\seo\models\SeoPageAttribute */

$this->title = 'Update Seo Page Attribute: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Seo Page Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seo-page-attribute-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
