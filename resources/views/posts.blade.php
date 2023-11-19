@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Search anything..." value="{{request('search')}}">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($postingan->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $postingan[0]->category->name }}" class="card-img-top" alt="{{ $postingan[0]->category->name }}">
        <div class="card-body text-center">
            <h5 class="card-title"><a href="/posts/{{ $postingan[0]->slug }}" class="text-dark text-decoration-none">{{ $postingan[0]->title }}</a></h5>
            <p><small class="text-muted">
                By. <a href="/authors/{{ $postingan[0]->author->username }}">{{ $postingan[0]->author->name }}</a> in <a href="/posts?category={{ $postingan[0]->category->slug }}">{{ $postingan[0]->category->name }}</a> {{ $postingan[0]->created_at->diffForHumans() }}
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
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.6)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{$post->category->name}}</a></div>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <p><small class="text-muted">
                            By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
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