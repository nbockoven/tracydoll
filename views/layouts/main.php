<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>TracyDoll | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container-fluid py-3 h-100">
    <div class="row h-100">
        <div class="col-sm-4 d-flex align-items-center">
            <img src="/images/chibi.png" alt="TracyDoll Chibi" class="img-fluid">
        </div><!-- .col -->
        <div class="col">
            <div class="d-block">
                <?= $this->render('_navbar'); ?>

                <?= $content; ?>
            </div><!-- .d-block -->
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container-fluid -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
