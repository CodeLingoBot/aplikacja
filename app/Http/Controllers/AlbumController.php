<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests\Album\AlbumStoreRequest;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function create()
    {
        return view('album.create');
    }

    public function store(AlbumStoreRequest $request)
    {
        // Create album
        (new Album())->create($request);

        return redirect('/')->with('info', 'Pomyślnie utworzono album!');
    }
}
