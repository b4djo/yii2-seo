<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\seo\models\SeoPage */

$this->title = 'Create Seo Page';
$this->params['breadcrumbs'][] = ['label' => 'Seo Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-page-create">

    <?= $this->render('_form', [
        'model' => $model,
        'pageAttributes' => $pageAttributes,
    ]) ?>

</div>
