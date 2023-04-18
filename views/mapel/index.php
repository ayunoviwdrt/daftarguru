<?php

use app\models\Mapel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MapelSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mapel';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mapel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mapel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         
            'mapel',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mapel $model, $key, $index, $column) {
                    return Url::toRoute([$action, ]);
                 }
            ],
        ],
    ]); ?>


</div>
