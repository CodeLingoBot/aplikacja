<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 * @package App
 * @property int $id
 * @property int $albumId
 * @property string $title
 * @property string $custom_title
 * @property string $url
 * @property string $thumbnailUrl
 * @property string $description
 * @property int $user_id
 */
class Photo extends Model
{
    protected $fillable = ['id', 'album_id', 'title', 'custom_title', 'url', 'thumbnailUrl', 'description', 'user_id'];

    public function album()
    {
        return $this->hasOne(Album::class, 'id', 'album_id');
    }
}
