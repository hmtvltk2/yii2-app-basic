<?php

namespace app\modules\main;

/**
 * app module definition class
 */
class Module extends \yii\base\Module
{

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $this->layout = 'main';
    }
}
