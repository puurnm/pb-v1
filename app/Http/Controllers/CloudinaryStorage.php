<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudinary;

class CloudinaryStorage extends Controller
{
    private const folder_path = 'portal-berita-v1';

    public static function path($path){
        return pathinfo($path, PATHINFO_FILENAME);
    }

    public static function upload($image, $filename){
        $newFilename = str_replace(' ', '_', $filename);
        $public_id = date('Y-m-d_His').'_'.$newFilename;
        $result = cloudinary()->upload($image, [
            "public_id" => self::path($public_id)
            // "folder"    => self::folder_path
        ])->getSecurePath();

        return $result;
    }

    public static function replace($path, $image, $public_id){
        $data = explode("/",$path);
        $imageID = explode(".",$data[7]);
        cloudinary()->destroy($imageID[0]);

        return self::upload($image, $public_id);
    }

    public static function delete($path){
        $data = explode("/",$path);
        $imageID = explode(".",$data[7]);
        return cloudinary()->destroy($imageID[0]);
    }
}
