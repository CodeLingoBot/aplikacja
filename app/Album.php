<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Album
 * @package App
 * @property string $title/.
 */
class Album extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class, 'album_id', 'id');
    }

    public function create($request)
    {
        $this->title = $request->title;
        $this->save();
    }
}
