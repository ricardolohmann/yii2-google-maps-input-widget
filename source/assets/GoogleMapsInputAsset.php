<?php

namespace ricardolohmann\assets;

use yii\web\AssetBundle;

class GoogleMapsInputAsset extends AssetBundle
{
    public static $key;

    public $sourcePath = '@ricardolohmann/web';

    public $js = [
        
    ];

    public function __construct($config = [])
    {
        $this->js[] = 'https://maps.googleapis.com/maps/api/js?key=' . self::$key . '&libraries=places&callback=initAutocomplete';

        parent::__construct($config);
    }
}
