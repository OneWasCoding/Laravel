<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <h1>Dear Lord Otwell</h1>
    <p>I hereby challenge you to a duel for the honour of Laravel.</p> --}}

    {{-- {{ $squirrel }}
    <p>{{ date('d/m/y') }}</p>
    <p>{!! '<script>alert("CHUNKY BACON!");</script>' !!}</p> --}}
    {{-- 
    @if ($something == 'red Panda')
        <p>Something is red, white, and brown!</p>
        <h1>test</h1>
    @elseif ($something == 'Giant Panda')
        <p>Something is black and white!</p>
    @else
        <p>Something could be a squirrel.</p>
    @endif --}}


    {{-- @foreach ($manyThings as $thing)
        <h1>names</h1>
        <p>{{ $thing }}</p>
    @endforeach --}}

    {{-- @for ($i = 0; $i < 10; $i++)
        <p>Even {{ $i }} red pandas, aren't enough!</p>
    @endfor --}}
    @include('header')
    <p>Why, the Narhwal surely bacons at midnight, my good sir!</p>
    @include('footer')







</body>

</html>