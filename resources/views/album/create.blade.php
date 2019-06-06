@extends('layouts.application')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-12" style="width: 50rem;">
                <div class="card">
                    <div class="card-header">Tworzenie albumu</div>
                    <div class="card-body">
                        <form action="{{ route('album.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tytuł</label>
                                <input type="text" name="title" class="form-control">

                                <button type="submit" class="btn btn-info  mt-5" style="width: 100%">Stwórz nowy album</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection
