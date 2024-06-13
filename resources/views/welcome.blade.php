@extends('layouts.admin')
@section('content')

<main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          @auth
                <h1 class="fw-light text-primary ">{{ Auth::user()->name }}'s Album</h1>
            @else
                <h1 class="fw-light text-primary  ">Album Preview</h1>
            @endauth          
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>

    @auth

    <div class="container px-4 py-5" id="custom-cards">
      
      <h2 class="fw-light mb-3 text-primary pb-2 border-bottom border-primary">Latest Pictures</h2>
  
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                    
                  </div>
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                  <small>Earth</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                  <small>3d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                    
                  </div>
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                  <small>Pakistan</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                  <small>4d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                    
                  </div>
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                  <small>California</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                  <small>5d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
    @endauth     
    
  
</main>
@endsection