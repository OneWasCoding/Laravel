@extends('layouts.base')

@section('body')
    <div class="container-lg">
        {{-- {{ dd($artists) }} --}}
        <form action="{{ route('albums.update', $album->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Album Name</label>
                <input type="text" class="form-control" name="title" value="{{$album->title}}" id="name" aria-describedby="name">
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" name="genre" value="{{$album->genre}}" id="genre" aria-describedby="country">
            </div>

            <div class="mb-3">
                <label for="date_released" class="form-label">date Released</label>
                <input type="date" class="form-control" name="date_released" value="{{$album->date_released}}" id="date_released" aria-describedby="image">
            </div>
            <select class="form-select" aria-label="Default select example" name="artist_id">
                <option value="{{ $album_artist->id }}" selected>{{ $album_artist->name }}</option>
                @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                @endforeach


            </select>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
@endsection