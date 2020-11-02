<?php
/* @var $this yii\web\View */
$baseUrl = str_replace('/backend/web','',Yii::$app->urlManager->getBaseUrl());
print_r($baseUrl);
?>
<h1>file/index</h1>

<iframe  width="765" height="550" frameborder="0"
         src="<?php echo $baseUrl; ?>/file/dialog.php?type=0">
</iframe>