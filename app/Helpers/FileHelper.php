<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image;

class FileHelper
{

    /**
     * Returns path to image dir
     * @return string
     */
    public static function getImageDir()
    {
        return base_path('public/images/gallery/');
    }

    /**
     * Checks if uploaded file is valid image file
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     * @return bool
     */
    public static function validImage($file)
    {
        $mimeType = $file->getMimeType();

        $imageMimeTypes = [
            'image/jpeg'
        ];

        return in_array($mimeType, $imageMimeTypes);
    }

    /**
     * Creates random filename for the images
     * @return string
     */
    public static function createImageFilename()
    {
        $filename = 'vylcans_lv_' . md5(time() . rand(10000, 99999));

        if (file_exists(self::getImageDir() . $filename . 'jpg')) {
            return self::createImageFilename();
        }

        return $filename;
    }

    /**
     * Saves large image
     *
     * @param $originalFilePath
     * @param $newFileName
     */
    public static function saveImage($originalFilePath, $newFileName)
    {
        $img = Image::make($originalFilePath);
        // resize the image to a width of 300 and constrain aspect ratio (auto height)
        $img->resize(1000, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->sharpen(15);

        // insert watermark at bottom-right corner with 10px offset
        $img->insert(base_path('public/images/watermark.png'), 'bottom-right', 10, 10);

        $img->save(self::getImageDir() . $newFileName . '.jpg');
    }

    /**
     * Saves thumbnail
     *
     * @param $originalFilePath
     * @param $newFileName
     */
    public static function saveThumbnail($originalFilePath, $newFileName)
    {
        $img = Image::make($originalFilePath);
        // resize the image to a width of 300 and constrain aspect ratio (auto height)
        $img->fit(150, 150);

        $img->sharpen(6);

        $img->save(self::getImageDir() . $newFileName . '_thumb.jpg');
    }
}