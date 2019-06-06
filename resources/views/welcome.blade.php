@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-content-center">

                <a href="{{ route('manage-import') }}" style="font-size: 32px; width: 100%" class="btn btn-lg btn-dark">Import</a>
                <a href="{{ route('photos.index') }}" style="font-size: 32px; width: 100%;" class="btn btn-lg bg-danger text-white mt-2">Zarządzanie zdjęciami </a>

            </div>
        </div>
    </div>
@endsection
