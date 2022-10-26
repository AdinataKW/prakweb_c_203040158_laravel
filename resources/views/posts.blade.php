@extends('layout.main')

@section('container')


    @foreach ($Posts as $post)
        <h2>{{ $post["title"]}}</h2>
        <h5>{{ $post["author"]}}</h5>
        <p>{{ $post["body"]}}</p>
    @endforeach

@endsection
