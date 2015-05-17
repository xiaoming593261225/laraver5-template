<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image;

class LocaleHelper
{

    public static function getNamedLocales()
    {
        return [
            'lv' => 'Latviešu',
            'en' => 'English'
        ];
    }

}