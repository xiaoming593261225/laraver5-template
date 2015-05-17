<?php

namespace App\Repositories;

use App\Models\Section;

class SectionRepository
{
    public static function all($onlyActive = false)
    {
        $query = Section::orderBy('title', 'desc');

        if ($onlyActive) {
            $query->where('active', '=', true);
        }

        return $query->get();
    }

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