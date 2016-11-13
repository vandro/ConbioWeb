<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\Module $module
 * @var amnah\yii2\user\models\User $user
 * @var amnah\yii2\user\models\User $profile
 * @var string $userDisplayName
 */

$module = $this->context->module;

$this->title = Yii::t('user', 'Register');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>ConbioWeb</b></a>
    </div>
    <!-- /.login-logo -->
<div class="login-box-body">
<h1 class="login-box-msg"><?= Html::encode($this->title) ?></h1>

        <?php if ($flash = Yii::$app->session->getFlash("Register-success")): ?>

        <div class="alert alert-success">
            <p><?= $flash ?></p>
        </div>

    <?php else: ?>

        <?php $form = ActiveForm::begin([
            'id' => 'register-form',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                //'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
                //'labelOptions' => ['class' => 'col-lg-2 control-label'],
            ],
            'enableAjaxValidation' => true,
        ]); ?>

        <?php if ($module->requireEmail): ?>
            <?= $form->field($user, 'email') ?>
        <?php endif; ?>

        <?php if ($module->requireUsername): ?>
            <?= $form->field($user, 'username') ?>
        <?php endif; ?>

        <?= $form->field($user, 'newPassword')->passwordInput() ?>

        <?php /* uncomment if you want to add profile fields here
        <?= $form->field($profile, 'full_name') ?>
        */ ?>

        <div class="form-group">
        <div class="row">
            <div class="col-xs-8">
            </div>
            <div class="col-xs-4">
                <?= Html::submitButton(Yii::t('user', 'Register'), ['class' => 'btn btn-primary btn-block btn-flat']) ?>                
            </div>
        </div>

        </div>

        <?php ActiveForm::end(); ?>

        <?php /*if (Yii::$app->get("authClientCollection", false)): ?>
            <div class="col-lg-offset-2 col-lg-10">
                <?= yii\authclient\widgets\AuthChoice::widget([
                    'baseAuthUrl' => ['/user/auth/login']
                ]) ?>
            </div>
        <?php endif; */ ?>

    <?php endif; ?>

            <?= Html::a(Yii::t('user', 'Login'), ["/user/login"]) ?><br>
            <?= Html::a(Yii::t("user", "Forgot password") . "?", ["/user/forgot"]) ?> <br>
            <?= Html::a(Yii::t("user", "Resend confirmation email"), ["/user/resend"]) ?>
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->