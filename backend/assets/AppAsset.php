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
        'css/dist/styles.css',
        'https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css',
        'https://kit.fontawesome.com/2e97b948ea.js',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js',
    ];
    public $js = [
        'https://kit.fontawesome.com/2e97b948ea.js',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js',
        'https://code.jquery.com/jquery-3.5.1.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
        'https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js',
        'js/scripts.js',

    ];
    public $img=[
        'img/trongdong3.jpg',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
