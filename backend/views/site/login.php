<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">H+</h1>

        </div>
        <h3>欢迎使用 H+</h3>

        <?php $form = ActiveForm::begin(['id' => 'login-form','class'=> 'm-t']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'用户名'])->label(false); ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'密码'])->label(false); ?>

            <div class="form-group">
                <?= Html::submitButton('登 录', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>
            </div>
            <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a>
            </p>
        <?php ActiveForm::end(); ?>


        <!--<form class="m-t" role="form" action="http://www.zi-han.net/theme/hplus/index.html">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="密码" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


            <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a>
            </p>

        </form>-->
    </div>
</div>