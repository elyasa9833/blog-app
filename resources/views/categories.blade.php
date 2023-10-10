@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>
    
    @foreach ($categories as $catt)
        <ul>
            <li>
                <h3><a href="/categories/{{ $catt->slug }}">{{ $catt->name }}</a></h3>
            </li>
        </ul>
    
    @endforeach
    
    
@endsection