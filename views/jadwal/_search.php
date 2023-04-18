<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JadwalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jadwal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_kelas') ?>

    <?= $form->field($model, 'id_guru') ?>

    <?= $form->field($model, 'id_mapel') ?>

    <?= $form->field($model, 'jam_mulai') ?>

    <?php // echo $form->field($model, 'jam_selesai') ?>

    <?php // echo $form->field($model, 'hari') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
