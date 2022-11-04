@extends('layout.main')

@section('container')
    <h1 class='mb-5'>Halaman Blog Posts</h1>

    @foreach ($Posts as $post)
    <article>
        <h2><a href="/posts/{{$post->id }}">{{$post->title}}</a></h2>
        <p>{{ $post->excerpt }}</p>
    @endforeach

@endsection
