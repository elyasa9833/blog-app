@extends('layouts.main')

@section('container')

    @foreach ($postingan as $post)
        <article class="mb-5 border-bottom">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>By. <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name}}</a>
            </p>
            <p>{{ $post->excerpt }}</p>
        </article>
        
    @endforeach
    
@endsection