@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($postingan->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $postingan[0]->category->name }}" class="card-img-top" alt="{{ $postingan[0]->category->name }}">
        <div class="card-body text-center">
            <h5 class="card-title"><a href="/posts/{{ $postingan[0]->slug }}" class="text-dark text-decoration-none">{{ $postingan[0]->title }}</a></h5>
            <p><small class="text-muted">
                By. <a href="/authors/{{ $postingan[0]->author->username }}">{{ $postingan[0]->author->name }}</a> in <a href="/categories/{{ $postingan[0]->category->slug }}">{{ $postingan[0]->category->name }}</a> {{ $postingan[0]->created_at->diffForHumans() }}
            </small></p>

            <p class="card-text">{{ $postingan[0]->excerpt }}</p>
            <a href="/posts/{{ $postingan[0]->slug }}" class="btn btn-primary">Read more</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($postingan->skip(1) as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <p><small class="text-muted">
                            By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> {{ $postingan[0]->created_at->diffForHumans() }}
                          </small></p>

                          <p class="card-text">{{ $post->excerpt }}</p>
                          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    
@endsection