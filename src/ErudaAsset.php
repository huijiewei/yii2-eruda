<?php


namespace huijiewei\eruda;

use yii\web\AssetBundle;
use yii\web\View;

class ErudaAsset extends AssetBundle
{
    public $sourcePath = '@npm/eruda';

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $js = [
        'eruda.min.js',
    ];
}
