<?php
/**
 * Created by PhpStorm.
 * User: reine
 * Date: 06.06.2019
 * Time: 13:23
 */

namespace App\Http\Controllers;


use App\Services\Photos\PhotosImportNew;
use App\Services\Photos\PhotosOverrideImported;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ImportController extends Controller
{

    public function import(Request $request)
    {
        $this->getImportStrategy($request)->handle();

        return redirect('/')->with('info', 'Pomyślnie wykonano operacje!');

    }

    protected function getImportStrategy($request)
    {
        if($request->type == 'import_new') {
            return new PhotosImportNew;
        }

        return new PhotosOverrideImported();
    }

}
