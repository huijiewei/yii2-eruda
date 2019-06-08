<?php


namespace huijiewei\eruda;

use yii\base\Widget;
use yii\web\View;

class ErudaWidget extends Widget
{
    private $isMobile = false;

    public function init()
    {
        parent::init();

        $mobileDetect = new \Mobile_Detect();
        $this->isMobile = $mobileDetect->isMobile();

        if ($this->isMobile) {
            ErudaAsset::register($this->getView());
            $this->getView()->registerJs('eruda.init();', View::POS_HEAD);
        }
    }
}
