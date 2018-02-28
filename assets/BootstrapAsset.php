<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap';
    public $css = [
        // 'dist/css/bootstrap.min.css',
    ];
    public $js = [
        'assets/js/vendor/popper.min.js',
        'dist/js/bootstrap.min.js',
    ];
}
