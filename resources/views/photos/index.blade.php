@extends('layouts.admin')

@section('content')


 
<main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-primary" >Photos Management</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
        <h2 class="fw-light mb-3 text-primary ">
          <a class="nav-link" href="{{route('admin.photos.create')}}">
            add new 
            <i class="fa-solid fa-plus"></i>
          </a>
        </h2>
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @forelse ($photos as $photo)
          <div class="col" >
            <div class="card h-100 shadow-sm" id="{{$photo->id}}">

              @if (Str::startsWith($photo->cover_image , 'https://'))
               <img loading="lazy"  class="card-img-top" width="100%" height="225" src="{{$photo->cover_image}}" alt="{{$photo->name}}" >
              @else
               <img loading="lazy" class="card-img-top" width="100%" height="225" src="{{asset('storage/' . $photo->cover_image)}}" alt="{{$photo->name}}" >
                        
              @endif
              
              <div class="card-body">
                <small class=" text-primary" > {{$photo->id}}</small>
                <h4>{{$photo->name}}</h4>
                
                <p class="card-text">{{$photo->description}}</p>

              </div>
              <div class="card-footer bg-white py-3"> <div class="d-flex flex-column align-items-center white-text">
                <div class="btn-group white-text ">
           
                  <button type="button" class="btn btn-sm btn-outline-primary white-text ">
                    <a class="white-text" href="{{route('admin.photos.show' , $photo)}}" >View</a>
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-primary white-text">
                    <a class="white-text" href="{{route('admin.photos.edit' , $photo)}}">Edit</a>
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary white-text">
                    <a class="text-secondary white-text" href="{{route('admin.photos.create')}}">Delete</a>
                  </button>
                </div>
                
              </div>
          </div>
            </div>
          </div>
          @empty
              
          @endforelse
          
        </div>
      </div>
    </div>
  
  </main>

@endsection