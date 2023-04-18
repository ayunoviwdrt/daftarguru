<?php

use app\models\Guru;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\GuruSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Daftar Guru : SMKN 1 Denpasar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Guru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            

            //'id',
            'nip',
            'nama:ntext',
            'tempat_lahir',
            'tanggal_lahir',
            'agama:ntext',
            'jenis_kelamin',
            'status',
            'alamat:ntext',
            'telepon',
            'email:email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Guru $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
