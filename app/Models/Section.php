<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function imageCount()
    {
        $images = $this->images;
        dd($images);
    }

}
