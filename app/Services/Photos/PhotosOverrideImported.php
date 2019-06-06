<?php
/**
 * Created by PhpStorm.
 * User: Reinert Karol
 * Date: 06.06.2019
 */

namespace App\Services\Photos;


use App\Photo;
use App\Services\DataService\PhotosData;
use Illuminate\Support\Facades\Session;

class PhotosOverrideImported implements StrategyInterface
{

    public function handle()
    {
        /*
         * It's more quicker to delete all records from table
         * and import new rather than check every single record for update in
         * this case.
         */
        $this->deleteAllPhotos();
        $this->store();
    }

    /*
     * Delete everything from photos table.
     */
    protected function deleteAllPhotos()
    {
        Photo::truncate();
    }

    /*
     * Store in DB
     */
    public function store()
    {
        // Get all parsed downloaded photos.
        $photosArray = (new PhotosData())->getAll();

        // Insert into DB using eloquent.
        $photos = Photo::insert($photosArray);

    }
}
