<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Breadcrumbs;

AppAsset::register($this);
$url = Yii::getAlias("@web") . '/img/';
$baseUrl = str_replace('/backend/web','',Yii::$app->urlManager->getBaseUrl());
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<link rel="icon" type="image/x-icon" href="favicon.ico"/>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="sb-nav-fixed">
<?php $this->beginBody() ?>

<nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
    <?= $this->render('_topBar') ?>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion bg__bg-blue" id="sidenavAccordion"
             style="background: linear-gradient(0deg, rgba(28, 103, 175, 0.9), rgba(28, 103, 175, 0.9)), url(<?= $url ?>trongdong3.jpg);background-repeat: no-repeat;background-position: 68% 240%;">
            <div class="sb-sidenav-menu">
                <?= $this->render('_sideBar') ?>

            </div>
            <div class="sb-sidenav-footer p-0">

                <?php if (!Yii::$app->user->isGuest): ?>
                    <?= Html::a(
                        'Đăng xuất',
                        ['/site/logout'],
                        ['data-method' => 'post', 'class' => 'btn btn-primary btn-block text-align-left m-0']
                    ) ?>
                <?php else: ?>
                    <?= Html::a('Login', ['/site/login'], ['class' => 'btn btn-primary btn-block text-align-left m-0']) ?>
                <?php endif; ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>

            <div class="container-fluid  bg__form">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <!-- Main Content -->
                <?= $content ?>
                <!-- End -->

            </div>
        </main>
    </div>
</div>

<!--Modal ảnh 3x4-->
<div class="modal fade" id="modelAvatar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Chọn ảnh</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe  width="100%" height="550" frameborder="0"
                         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0&field_id=reporterdetail-rep_avt">
                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<!--Modal ảnh mặt trước CMND-->
<div class="modal fade" id="modelCIDFront" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload CMND mặt trước</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe  width="100%" height="550" frameborder="0"
                         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0&field_id=reporterdetail-rep_cmnd_front">
                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<!--Modal ảnh mặt sau CMND-->
<div class="modal fade" id="modelCIDBack" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload CMND mặt sau</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe  width="100%" height="550" frameborder="0"
                         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0&field_id=reporterdetail-rep_cmnd_back">
                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
