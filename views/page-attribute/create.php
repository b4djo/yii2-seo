<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\seo\models\SeoPageAttribute */

$this->title = 'Create Seo Page Attribute';
$this->params['breadcrumbs'][] = ['label' => 'Seo Page Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-page-attribute-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
