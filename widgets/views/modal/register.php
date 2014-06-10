<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 * @var ActiveForm $form
 */
?>

<div id="register" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel"><?= Yii::t('app/user', 'register modal heading'); ?></h4>
            </div>
            <div class="modal-body">
                <div class="register text-center">

                    <p class="help-block"><?= Yii::t('app/user', 'register help') ?></p>

                    <?php $form = ActiveForm::begin(); ?>

                    <?php if($model->getErrors()){
                        Yii::$app->view->registerJs('$("#register").modal("show")');
                    } ?>

                    <?= $form->field($model, 'mail') ?>

                    <div class="form-group text-center">
                        <?= Html::submitButton(Yii::t('app/user', 'Submit'), ['class' => 'btn btn-lg btn-main']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>

                </div><!-- register -->
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
