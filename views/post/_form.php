<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form ActiveForm */
?>
<h2>Add new post</h2>
<div class="post-_form">
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'content')->textarea() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- post-_form -->
