@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $single_post->title }}</h2>
        <h5 class="mb-5">By. {{ $single_post->author }} in <a href="/categories/{{ $single_post->category->slug }}">{{ $single_post->category->name}}</a></h5>
        {{ $single_post->body }}
    </article>

    <a href="/posts">Back to posts</a>
@endsection