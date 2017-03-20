<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seo Page Attributes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-page-attribute-index">

    <p>
        <?= Html::a('Create Seo Page Attribute', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'page_id',
            'pageRoute.route',
            //'attribute_id',
            'tagName.name',
            'content:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
