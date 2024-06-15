@extends('layouts.admin')

@section('content')


 
<main>
  

    <section class="p-5 text-center container my-5">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <div class="container-fluid my-5">
            <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" width="200" height="200">
                <defs>
                    <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                        <stop id="stop1" stop-color="rgba(214, 51, 133, 1)" offset="0%"></stop>
                        <stop id="stop2" stop-color="rgba(214, 51, 133, 1)" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <path fill="none" d="M14.8,-13.6C22,-11.5,32.6,-9.6,37.7,-3.3C42.8,3,42.3,13.6,36,17.3C29.6,21,17.5,17.8,8.4,19.5C-0.6,21.2,-6.6,27.8,-9.7,26.6C-12.8,25.5,-13.1,16.6,-17.1,9.8C-21.2,3,-28.9,-1.7,-28.9,-5.7C-28.9,-9.7,-21.2,-12.8,-15.1,-15.1C-9,-17.5,-4.5,-18.9,-0.4,-18.4C3.8,-18,7.5,-15.8,14.8,-13.6Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="1" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path>
            </svg>
        </div>
          @include('partials.session-message')

        <h1 class="fw-light text-primary" >Photos Management</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#album" class="btn btn-primary my-2">Manage your collection</a>
          </p>
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light" id="album">
      <div class="container mt-4" >
        <h2 class="fw-light mb-3 text-primary ">
          <a class="text-primary text-decoration-none" href="{{route('admin.photos.create')}}">
            add new 
            <i class="fa-solid fa-plus"></i>
          </a>
        </h2>
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >
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
                <div class="btn-group ">
           
                  
                    <a class="btn btn-sm btn-outline-primary white-text rounded-0" href="{{route('admin.photos.show' , $photo)}}" >View</a>
                  
                  
                    <a class="btn btn-sm btn-outline-primary white-text" href="{{route('admin.photos.edit' , $photo)}}">Edit</a>
                  

                  @include('admin.photos.partials.delete-modal')
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