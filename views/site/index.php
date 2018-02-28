<?php

/* @var $this yii\web\View */

$this->title = 'Twitch Variety Game Streamer';
?>

<div class="row">
    <div class="col-lg-6 d-flex align-items-stretch">
        <?= $this->render('partials/_stats'); ?>
    </div><!-- .col -->
    <div class="col-lg-6 d-flex align-items-stretch">
        <?= $this->render('partials/_schedule'); ?>
    </div><!-- .col -->
    <div class="col-lg-6 d-flex align-items-stretch">
        <?= $this->render('partials/_games'); ?>
    </div><!-- .col -->
    <div class="col-lg-6 d-flex align-items-stretch">
        <?= $this->render('partials/_social'); ?>
    </div><!-- .col -->
</div><!-- .row -->
