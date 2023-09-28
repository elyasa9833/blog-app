@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $single_post->title }}</h2>
        <h5 class="mb-5">{{ $single_post->author }}</h5>
        {{ $single_post->body }}
    </article>

    <a href="/posts">Back to posts</a>
@endsection