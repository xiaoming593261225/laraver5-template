<?php

namespace App\Repositories;

use App\Models\Image;

class ImageRepository
{
    public static function getInactiveImages()
    {
        return Image::where('active', false)->orderBy('id', 'desc')->get();
    }
}