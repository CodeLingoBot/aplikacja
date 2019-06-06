@extends('layouts.application')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-12">
                <div class="card" style="width: 30rem;">
                    <img src="{{ $photo->url }}" class="card-img-top" alt="Photo image">
                    <div class="card-body">
                        <p class="card-text"><b>Orginal title: <br></b> {{ $photo->title }} </p>

                        <form action="{{ route('photos.update', $photo)}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <div class="label"><b>Twój tytuł</b></div>
                                <input type="text" name="custom_title" value="{{ $photo->custom_title }}" placeholder="{{ __('Twój własny tutuł...') }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="label"><b>Opis</b></div>
                                <textarea type="text" name="description" class="form-control"> {{ $photo->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label><b>Autor</b></label>
                                <select name="user_id" class="form-control">
                                    <option value="NULL">{{ __('Brak') }}</option>
                                    @foreach($users as $user)
                                        @if($photo->user_id == $user->id)
                                            <option value="{{ $user->id }}" selected>{{ $user->email }}</option>
                                        @else
                                            <option value="{{ $user->id }}">{{ $user->email }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label><b>Album</b></label>
                                <select name="album_id" class="form-control">
                                    <option value="NULL">{{ __('Brak') }}</option>
                                    @foreach($albums as $album)
                                        @if($photo->album_id == $album->id)
                                            <option value="{{ $album->id }}" selected>{{ $album->title }}</option>
                                        @else
                                            <option value="{{ $album->id }}">{{ $album->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary" style="width: 100%">Zapisz</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection
