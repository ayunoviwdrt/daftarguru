<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Jadwal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jadwal-form">
    
    <?php $form = ActiveForm::begin(); ?>
    <br>
    <?php
    $dataPost = ArrayHelper::map(\app\models\Kelas::find()->asArray()->all(), 'id', 'nama');
    echo $form->field($model, 'id_kelas')
        ->dropDownList(
            $dataPost,
            ['id_kelas' => 'jadwal']
        )->label('Kelas');
    ?>
    <br>
    <?php
    $dataPost = ArrayHelper::map(\app\models\Guru::find()->asArray()->all(), 'id', 'nama');
    echo $form->field($model, 'id_guru')
        ->dropDownList(
            $dataPost,
            ['id_guru' => 'jadwal']
        )->label('Nama');
    ?>
    <br>
    <?php
    $dataPost = ArrayHelper::map(\app\models\Mapel::find()->asArray()->all(), 'id', 'mapel');
    echo $form->field($model, 'id_mapel')
        ->dropDownList(
            $dataPost,
            ['id_mapel' => 'jadwal']
        )->label('Mapel');
    ?>

    <?php //= $form->field($model, 'id_kelas')->textInput() 
    ?>

    <?php //= $form->field($model, 'id_guru')->textInput() 
    ?>
    <?php //= $form->field($model, 'id_mapel')->textInput() 
    ?>
    <?php //<?= $form->field($model, 'jam_mulai')->textInput() 
    ?>
    
    <br>
    <?= $form->field($model, 'jam_mulai')->textInput()?>
    <br>
    <?= $form->field($model, 'jam_selesai')->textInput() ?>
    <br>
    <?= $form->field($model, 'hari')->textInput(['maxlength' => true]) ?>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
