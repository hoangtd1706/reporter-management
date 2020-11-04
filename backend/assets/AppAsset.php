<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/dist/style.css',
        'css/style.css',
        'css/datepicker.css',
        'css/dist/styles.css',
        'https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css',
        'https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css',
    ];
    public $js = [
        'js/yii2-dynamic-form.js',
        'js/scripts.js',
        'js/script.js',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
        'https://kit.fontawesome.com/2e97b948ea.js',
    ];
    public $img=[
        'img/trongdong3.jpg',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
