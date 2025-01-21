@extends('layouts.base')

@section('body')
    <div class="container-lg">
        {{-- {{dd($albums)}} --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Album title</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Date Released</th>
                    <th scope="col">album</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                    <tr>
                        <td>{{$album->id}}</td>
                        <td>{{$album->title}}</td>
                        <td>{{$album->genre}}</td>
                        <td>{{$album->date_released}}</td>
                        <td>{{$album->artist_id}}</td>
                        <td><a href="{{route('albums.edit',$album->id)}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="{{route('albums.destroy', $album->id)}}" style="color:red"><i class="fa-regular fa-trash-can" ></i></a></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection