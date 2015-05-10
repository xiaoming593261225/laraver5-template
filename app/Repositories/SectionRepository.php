<?php

namespace App\Repositories;

use App\Models\Section;

class SectionRepository
{
    /**
     * Creates new section by title
     * @param $title
     */
    public static function createSection($title)
    {
        $section = new Section();
        $section->title = $title;

        $section->save();
    }
}