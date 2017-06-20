<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/assets/';
    public $css = [
        "css/bootstrap.min14ed.css?v=3.3.6",
        "css/font-awesome.min93e3.css?v=4.4.0",
        "css/animate.min.css",
        "css/style.min862f.css?v=4.1.0",
    ];
    public $js = [
        "js/jquery.min.js?v=2.1.4",
        "js/bootstrap.min.js?v=3.3.6",
        "http://tajs.qq.com/stats?sId=9051096",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
