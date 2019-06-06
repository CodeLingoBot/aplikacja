<?php
/**
 * Created by PhpStorm.
 * User: reine
 * Date: 06.06.2019
 * Time: 20:11
 */

namespace App\Http\Controllers\API;


use App\Http\Resources\PhotoCollection;
use App\Photo;

class PhotosController
{
    public function index()
    {
        $photos = Photo::with('album')->paginate(5);
        return new PhotoCollection($photos);
    }
}
