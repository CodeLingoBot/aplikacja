@extends('layouts.application')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-4 text-center">
                <h1>Import</h1>

                <a href="/import" class="btn bg-danger text-white  mt-5">{{ __('Importuj lub nadpisz dane') }}</a>

                <a href="/import?type=import_new" class="btn bg-secondary text-white mt-5">{{ __('Importuj zdjęcia, które nie były wcześniej importowane') }}</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

@endsection
