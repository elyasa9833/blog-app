@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p class="mb-5">By. <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name}}</a></p>
        {{ $post->body }}
    </article>

    <a href="/posts">Back to posts</a>
@endsection