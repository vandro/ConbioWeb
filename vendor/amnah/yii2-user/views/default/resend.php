<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\models\forms\ResendForm $model
 */

$this->title = Yii::t('user', 'Resend');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>ConbioWeb</b></a>
    </div>
    <!-- /.login-logo -->
<div class="login-box-body">
<h1 class="login-box-msg"><?= Html::encode($this->title) ?></h1>

    <?php if ($flash = Yii::$app->session->getFlash('Resend-success')): ?>

        <div class="alert alert-success">
            <p><?= $flash ?></p>
        </div>

    <?php else: ?>

                <?php $form = ActiveForm::begin(['id' => 'resend-form',
            'options' => ['class' => 'form-horizontal'],]); ?>
                    <?= $form->field($model, 'email') ?>
                    <div class="form-group">
        <div class="row">
            <div class="col-xs-8">
            </div>
            <div class="col-xs-4">
                        <?= Html::submitButton(Yii::t('user', 'Submit'), ['class' => 'btn btn-primary btn-block btn-flat']) ?>
                    </div>
        </div>

                </div>
                <?php ActiveForm::end(); ?>

    <?php endif; ?>
            <?= Html::a(Yii::t('user', 'Login'), ["/user/login"]) ?><br>
            <?= Html::a(Yii::t("user", "Forgot password") . "?", ["/user/forgot"]) ?> 
    </div>


    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->