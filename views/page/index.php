<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('seo', 'Pages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-page-index">
    <p>
        <?= Html::a(Yii::t('seo', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'route',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
