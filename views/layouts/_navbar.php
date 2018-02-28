<? use yii\helpers\Html; ?>

<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3 border border-danger">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="/images/chibi.png" alt="TracyDoll Chibi" class="d-inline-block align-top" style="max-width: 60px">
        <span class="h1">TracyDoll</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/"><i class="fas fa-fw fa-lg fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <?= Html::a('<div class="fa-lg d-inline-block"><span class="fa-layers fa-fw"><i class="fas fa-shopping-bag"></i><span class="fa-layers-counter bg-danger"></span></span></div> Shop', ['shop/index'], ['class' => 'nav-link']); ?>
            </li>
        </ul>
    </div><!-- .navbar-collapse -->
</nav>
