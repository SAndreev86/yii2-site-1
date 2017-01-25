<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
	"css/flexslider.css",
	"css/bootstrap.min.css",
	"css/font-awesome.min.css",
	"css/style.css",
	"css/mystyle.css",
    ];
    public $js = [
    	"js/script.js",
        "js/bootstrap.min.js",
        "js/jquery.flexslider.js",
        "js/jquery.inview.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
