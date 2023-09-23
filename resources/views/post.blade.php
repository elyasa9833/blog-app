@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $single_post["title"] }}</h2>
        <h5>{{ $single_post["author"] }}</h5>
        <p>{{ $single_post["body"] }}</p>
    </article>

    <a href="/blog">Back to posts</a>
@endsection