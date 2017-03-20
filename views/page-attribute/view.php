<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\seo\models\SeoPageAttribute */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Seo Page Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-page-attribute-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'label' => 'page_id',
                'value' => $model->pageRoute->route,
            ],
            [
                'label' => 'attribute_id',
                'value' => $model->tagName->name,
            ],
            'content:ntext',
        ],
    ]) ?>

</div>
