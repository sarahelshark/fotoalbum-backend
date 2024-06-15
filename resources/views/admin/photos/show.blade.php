@extends('layouts.admin')

@section('content')

<header class="py-3">
    <div class="container d-flex align-items-center justify-content-center">
        <h1>Your Ph&#9825;to</h1>
    </div>
</header>

<div class="container mt-4 ">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
        <div class="col">
            @if (Str::startsWith($photo->cover_image , 'https://'))
            <img loading="lazy"  class="card-img-top" width="100%" height="225" src="{{$photo->cover_image}}" alt="{{$photo->name}}" >
           @else
            <img loading="lazy" class="card-img-top" width="100%" height="225" src="{{asset('storage/' . $photo->cover_image)}}" alt="{{$photo->name}}" >
                     
           @endif
        </div>
        <div class="col">
            <h3 class="text-muted">
                {{$photo->name}}
            </h3>
            
            <p>
                {{$photo->description}}
            </p>
            <div class="links">
                
               <a class="btn btn-primary" role="button" href="{{route('admin.photos.index')}}">
                Go Back
               </a>
            </div>
        </div>
    </div>
</div>

@endsection