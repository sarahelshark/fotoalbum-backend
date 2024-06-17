@extends('layouts.admin')
@section('content')

<main>
    <section class="p-5 text-center container my-5">
        <div class="row py-lg-5 ">
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
            
            @auth
            <h1 class="fw-light text-primary ">{{ Auth::user()->name }}'s Album</h1>
        @else
            <h1 class="fw-light text-primary  ">Album Preview</h1>
        @endauth  
                  
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            
            @auth
            <a href="#custom-cards" class="btn btn-primary my-2">Let's get started!</a>
            @endauth
  
            @guest
            <a href="{{ route('login') }}" class="btn btn-primary my-2">Let's get started!</a>
            @endguest
           
          </div>
        </div>
    </section>
  
       
  </main>
        
      
@endsection