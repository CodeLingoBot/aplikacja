<?php
/**
 * Created by PhpStorm.
 * User: Reinert Karol
 * Date: 06.06.2019
 */

namespace App\Services\Photos;


use App\Photo;
use App\Services\DataService\PhotosData;

class PhotosImportNew implements StrategyInterface
{

    public function handle()
    {
        // Downloaded photos
        $photosDownloaded = $this->downloadPhotosFromServer();

        // Store
        $this->store($photosDownloaded);
    }

    /**
     * @return array
     */
    public function downloadPhotosFromServer()
    {
        return (new PhotosData())->getAll();
    }

    public function store($photosDownloaded)
    {
        foreach ($photosDownloaded as $downloaded) {
            Photo::firstOrCreate(
                ['id' => $downloaded['id']],
                ['title' => $downloaded['title']],
//                ['albumId' => $downloaded['albumId']],
                ['url' => $downloaded['url']],
                ['thumbnailUrl' => $downloaded['thumbnailUrl']]
            );
        }
    }
}
