@extends('layouts.main')

@section('container')

    @foreach ($postingan as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article>
        
    @endforeach
    
@endsection