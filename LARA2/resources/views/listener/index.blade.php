@extends('layouts.base')

@section('body')
    <div class="container-lg">
        {{-- {{dd($listeners)}} --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">fname</th>
                    <th scope="col">lname</th>
                    <th scope="col">address</th>
                    <th scope="col">email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listeners as $listener)
                    <tr>
                        <td>{{ $listener->id }}</td>
                        <td>{{ $listener->fname }}</td>
                        <td>{{ $listener->lname }}</td>
                        <td>{{ $listener->address }}</td>
                        <td>{{ $listener->email }}</td>
                        <td><a href="{{ route('listeners.edit', $listener->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                        </td>
                        {{-- <td><a href="{{route('listeners.destroy', $listener->id)}}" style="color:red"><i class="fa-regular fa-trash-can" ></i></a></td> --}}
                        <td>
                           
                                <form action="{{ route('listeners.destroy', $listener->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn "><i class="fa-regular fa-trash-can" style="color:red"></i></button>

                                </form>
                            </i>

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection