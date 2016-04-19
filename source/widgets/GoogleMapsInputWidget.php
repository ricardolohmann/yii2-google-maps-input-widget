<?php

namespace ricardolohmann\widgets;

use Yii;
use yii\widgets\InputWidget;

class GoogleMapsInputWidget extends InputWidget
{
    public $key;

    public function run()
    {
        Yii::setAlias('@ricardolohmann','@vendor/ricardolohmann');

        if (!isset($this->key)) {
            $this->key = Yii::$app->params['google-maps-key'];
        }

        \ricardolohmann\assets\GoogleMapsInputAsset::$key = $this->key;

        return $this->render('MapInputWidget', [
            'id' => $this->getId(),
            'model' => $this->model,
            'attribute' => $this->attribute
        ]);
    }
}
