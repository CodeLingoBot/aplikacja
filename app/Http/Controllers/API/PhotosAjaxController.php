<?php
/**
 * Created by PhpStorm.
 * User: reine
 * Date: 06.06.2019
 * Time: 16:13
 */

namespace App\Http\Controllers\API;


use App\Photo;
use Illuminate\Http\Request;

class PhotosAjaxController
{
    public function index(Request $request)
    {
        $query = Photo::select('id', 'url', 'title', 'custom_title', 'description');

        return datatables($query)->make(true);
    }
}
