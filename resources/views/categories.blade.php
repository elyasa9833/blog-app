@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $catt)
            <div class="col-md-4">
                <a href="/categories/{{ $catt->slug }}">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="https://source.unsplash.com/500x500?{{ $catt->name }}" alt="{{ $catt->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title flex-fill text-center p-4 fs-1" style="background-color: rgba(0,0,0,0.6)">{{$catt->name}}</h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    
    {{-- @foreach ($categories as $catt)
        <ul>
            <li>
                <h3><a href="/categories/{{ $catt->slug }}">{{ $catt->name }}</a></h3>
            </li>
        </ul>
    
    @endforeach --}}
    
    
@endsection