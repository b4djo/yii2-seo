<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\seo\models\SeoAttribute */

$this->title = 'Create Seo Attribute';
$this->params['breadcrumbs'][] = ['label' => 'Seo Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-attribute-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
