@extends('layout.main')
@section('container')
<article class="mb-5">
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>
    <p>By. ACIL in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>
<a href="/blog">back to posts</a>
@endsection
