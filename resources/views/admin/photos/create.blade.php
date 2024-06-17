@extends('layouts.admin')

@section('content')
<section class="p-5 text-center container my-5">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <div class="container-fluid">
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
        <h1 class="fw-light text-primary  ">Upload a new Photo to {{ Auth::user()->name }}'s Album </h1>
              
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#form" class="btn btn-primary my-2">Let's get started!</a>
        </p>
      </div>
    </div>
</section>
 
<section class="container" >
    @include('partials.errors') 

    <form action="{{route('admin.photos.store')}}" method="post" id="form" enctype="multipart/form-data"> 
        @csrf 
        <div class="mb-3">
            <label for="name" class="form-label text-primary">New Title</label>
            <input
                type="text"
                class="form-control "
                name="name"
                id="name"
                aria-describedby="nameHelper"
                placeholder="Type a title here!"
                value="{{old('name')}}"
            />
            <small id="nameHelper" class="form-text "></small>

            @error('name')
             <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label text-primary">Category</label>
            <select
                class="form-select "
                name="category_id"
                id="category_id"
            >
                <option selected disabled >Select one</option>
                
                @foreach ($categories as $category)
                    <option value="{{$category->id}}"
                        {{old('category_id') == $category->id ? 'selected' : ''}}>
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>
        

        <div class="mb-3">
            <label for="cover_image" class="form-label text-primary">Upload file</label>
            <input
                type="file"
                class="form-control"
                name="cover_image"
                id="cover_image"
                aria-describedby="coverImageHelper"
                
            />
            <small id="coverImageHelper" class="form-text text-muted">(Your Photo goes here)</small>

            @error('cover_image')
             <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label text-primary">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Capture the moment, tell a story, and make your audience feel like they were there!" value="{{old('description')}}"></textarea>

            @error('description')
             <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Create &#9825;
        </button>
        
       
    </form>
</section>


@endsection

