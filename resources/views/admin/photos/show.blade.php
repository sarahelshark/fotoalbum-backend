@extends('layouts.admin')

@section('content')

<header class="py-3">
    <div class="container d-flex align-items-center justify-content-center text-primary">
        <h1>Your Photo</h1>
    </div>
</header>

<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-lg-6 d-flex justify-content-center">
            @if (Str::startsWith($photo->cover_image, 'https://'))
                <img loading="lazy" class="img-fluid" src="{{$photo->cover_image}}" alt="{{$photo->name}}">
            @else
                <img loading="lazy" class="img-fluid" src="{{asset('storage/' . $photo->cover_image)}}" alt="{{$photo->name}}">
            @endif
        </div>
        <div class="col-12 col-lg-6">
            <h3 class="text-primary mt-3 mt-lg-0">
                {{$photo->name}}
            </h3>
            <div>
                <strong class="text-primary">Category:</strong> {!! $photo->category ? $photo->category->name : '<small class="text-muted">uncategorized</small>' !!}
            </div>
            <p>
                {{$photo->description}}
            </p>
            <div class="links">
                <a class="btn btn-primary" role="button" href="{{route('admin.photos.index')}}">
                    See Your collection!
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
