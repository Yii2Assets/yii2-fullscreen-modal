<?php

namespace yii2assets\fullscreenmodal;

use Yii;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Widget;
use yii\bootstrap\Html;
use yii\bootstrap\Modal;

/**
 * Fullscreen Modal
 * @author Sathti Seethaphon <dixonsatit@gmail.com>
 */
class FullscreenModal extends Modal
{

    /**
     * Initializes the widget.
     */
    public function init()
    {
        $this->options = array_merge([
           'class' => 'modal-fs fade',
       ], $this->options);
        parent::init();

        FullscreenModalAsset::register($this->getView());
    }
}
