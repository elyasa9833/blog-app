@extends('layouts.main')

@section('container')

    <h3 class="mb-5">Post Category: {{ $title }}</h3>
    @foreach ($postingan as $post)
    <article class="mb-5 border-bottom">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name}}</a>
        </p>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
    
    <a href="/categories">Back to categories</a>
    
@endsection