<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\LocaleHelper;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Profile;
use App\Models\Section;
use App\Repositories\ImageRepository;
use App\Repositories\SectionRepository;
use App\Helpers\FileHelper;


class AdminController extends Controller {

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/home');
    }

    /*
     * =====================================================
     * IMAGES RELATED ACTIONS
     * =====================================================
     */

    public function images()
    {
        $sections = Section::all();

        return view('admin/images')
            ->with([
                'sections' => $sections,
                'inactiveImages' => ImageRepository::getInactiveImages()
            ]);
    }

    public function uploadImage()
    {
        if (\Request::hasFile('file')) {
            $file = \Input::file('file');

            if (FileHelper::validImage($file)) {

                $filename = FileHelper::createImageFilename();

                FileHelper::saveImage($file->getRealPath(), $filename);

                FileHelper::saveThumbnail($file->getRealPath(), $filename);

                $image = new Image();
                $image->filename = $filename;
                $image->active = false;
                $image->save();

                return \Response::json([
                    'file' => [
                        'id' => $image->id,
                        'url' => asset('images/gallery/' . $filename . '_thumb.jpg')
                    ]
                ]);
            }
        }

        return \Response::json('Some shit happened', 400);
    }

    /*
     * =====================================================
     * SECTIONS RELATED ACTIONS
     * =====================================================
     */

    public function sections()
    {
        $sections = Section::all();

        return view('admin/sections')->with([
            'sections' => $sections
        ]);
    }

    public function addSection()
    {
        $title = \Input::get('title');

        if (empty($title) or strlen($title) < 3) {
            return \Response::make(
                'Lūdzu ievadiet nosaukumu',
                400
            );
        }

        SectionRepository::createSection($title);

    }

    public function removeSection()
    {

    }

    /*
     * =====================================================
     * COMMENTS RELATED ACTIONS
     * =====================================================
     */

    public function comments()
    {
        return view('admin/comments');
    }

    /*
     * =====================================================
     * PROFILE RELATED ACTIONS
     * =====================================================
     */

    public function profile()
    {
        $profileData = Profile::lists('content', 'locale');

        $locales = LocaleHelper::getNamedLocales();

        return view('admin/profile')
            ->with('profileData', $profileData)
            ->with('locales', $locales);
    }

    public function saveProfile()
    {
        $locale = \Input::get('locale');

        $profileEntry = Profile::where('locale', '=', $locale)->first();

        if (!$profileEntry) {
            $profileEntry = new Profile();
            $profileEntry->locale = $locale;
        }

        $profileEntry->content = \Input::get('content');
        $profileEntry->save();

        return redirect()->route('adminProfile');
    }
}