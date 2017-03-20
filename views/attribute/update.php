<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\seo\models\SeoAttribute */

$this->title = 'Update Seo Attribute: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Seo Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seo-attribute-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
