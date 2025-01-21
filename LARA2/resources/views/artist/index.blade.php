@extends('layouts.base')

@section('body')
    <div class="container-lg">
        {{-- {{dd($artists)}} --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Artist Name</th>
                    <th scope="col">country</th>
                    <th scope="col">Image</th>
                    <th scope="col">date Created</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <td>{{$artist->id}}</td>
                        <td>{{$artist->name}}</td>
                        <td>{{$artist->country}}</td>
                        <td>{{$artist->img_path}}</td>
                        <td>{{$artist->created_at}}</td>
                        <td><a href="{{route('artist.edit',['id'=> $artist->id])}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="{{route('artist.delete',['id'=> $artist->id])}}" style="color:red"><i class="fa-regular fa-trash-can" ></i></a></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection