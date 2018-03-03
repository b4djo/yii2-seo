<?php

use b4djo\seo\models\SeoPage;
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
            [
                'attribute' => 'route',
                'value' => function (SeoPage $data) {

                    return Html::a(
                        Html::encode($data->route),
                        Yii::$app->urlManagerFrontend->baseUrl . $data->route,
                        [
                            'target' => '_blank',
                        ]
                    );
                },
                'format' => 'raw',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
