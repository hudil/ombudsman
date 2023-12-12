<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/plugins/global/plugins.bundle.css',
        'assets/plugins/custom/prismjs/prismjs.bundle.css',
        'assets/css/style.bundle.css',
        'assets/css/themes/layout/header/base/light.css',
        'assets/css/themes/layout/header/menu/light.css',
        'assets/css/themes/layout/brand/dark.css',
        'assets/css/themes/layout/aside/dark.css'
    ];
    public $js = [
        'assets/plugins/global/plugins.bundle.js',
        'assets/plugins/custom/prismjs/prismjs.bundle.js',
        'assets/js/scripts.bundle.js',
        'assets/js/pages/crud/ktdatatable/base/data-local.js'
    ];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap5\BootstrapAsset'
    // ];
}
