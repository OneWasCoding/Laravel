@extends('layouts.base')

@section('body')
    <div class="container-lg">
        <form action="{{url('/artists/store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Artist Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Artist Country</label>
                <input type="text" class="form-control" name="country" id="country" aria-describedby="country">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Artist Image</label>
                <input type="text" class="form-control" name="img_path" id="image" aria-describedby="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
@endsection