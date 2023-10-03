@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h3>
    
    @foreach ($categories as $catt)
        <ul>
            <li>
                <h2><a href="/categories/{{ $catt->slug }}">{{ $catt->name }}</a></h2>
            </li>
        </ul>
    
    @endforeach
    
    
@endsection