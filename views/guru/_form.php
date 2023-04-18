<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Guru $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="guru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <br>
    <?= $form->field($model, 'nama')->textarea(['rows' => 6]) ?>

    <br>
    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <br>
    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <br>
    <?= $form->field($model, 'agama')->dropDownList([
        'Hindu' => 'Hindu', 'Islam' => 'Islam', 'Buddha' => 'Buddha', 'Kristen Protestan' => 'Kristen Protestan', 'Kristen Katolik' => 'Kristen Katolik', 'Konghucu' => 'Konghucu',
    ], ['prompt' => '- Pilih Agama']) ?>

    <br>
    <?= $form->field($model, 'jenis_kelamin')->dropDownList([
        'Perempuan' => 'Perempuan', 'Laki-Laki' => 'Laki-Laki',
    ], ['prompt' => '- Jenis Kelamin']) ?>

    <br>
    <?= $form->field($model, 'status')->radioList([
        'PNS' => 'PNS', 'Kontrak' => 'Kontrak',
    ]) ?>
    
    <br>
    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <br>
    <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>

    <br>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>