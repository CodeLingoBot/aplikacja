<?php

namespace App\Services\DataService;

class PhotosData extends DataServiceAbstract
{
    /**
     * Set URL
     * @return string
     */
    public function setUrl(): string
    {
        return 'https://jsonplaceholder.typicode.com/photos';
    }
}
