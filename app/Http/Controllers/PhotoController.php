<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.photos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);
        $users = User::all(['id', 'email']);
        $albums = Album::all();

        return view('photo.edit')
            ->withPhoto($photo)
            ->withAlbums($albums)
            ->withUsers($users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $photo)
    {
        $photo = Photo::find($photo);

        $photo->update($request->all());

        return redirect()->back()->with('info', 'Pomyślnie zaktualizowano.')->with('photo', $photo);
    }

}
