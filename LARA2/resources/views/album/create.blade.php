@extends('layouts.base')

@section('body')
    <div class="container-lg">
        {{-- {{ dd($artists) }} --}}
        <form action="{{ url('/albums') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Album Name</label>
                <input type="text" class="form-control" name="title" id="name" aria-describedby="name">
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" name="genre" id="country" aria-describedby="country">
            </div>

            <div class="mb-3">
                <label for="date_released" class="form-label">date Released</label>
                <input type="date" class="form-control" name="date_released" id="date_released" aria-describedby="image">
            </div>
            <select class="form-select" aria-label="Default select example" name="artist_id">
                <option selected>Open this select menu</option>
                @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                @endforeach


            </select>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
@endsection