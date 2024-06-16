@extends('layouts.admin')

@section('content')
<section class="p-5 text-center container my-5">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-primary mb-3 ">Edit {{ Auth::user()->name }}'s Photo </h1>
        <div class="container-fluid">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url(@if (Str::startsWith($photo->cover_image, 'https://'))
             '{{ $photo->cover_image }}'
         @else
             '{{ asset('storage/' . $photo->cover_image) }}'
         @endif); ">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-3">
                  <span class="text-primary" >&#9825; preview</span>
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-primary">{{$photo->name}}</h3>
                  
                </div>
                <div>
                    {!! $photo->category ? $photo->category->name : '<small class="btn btn-primary mb-4">uncategorized</small>' !!}
                    
                </div>
              </div>
        </div>
        
        <p class="lead text-muted mt-3">
            {{$photo->description}}
        </p>
        <p>
          <a href="#form" class="btn btn-primary my-2">Let's get started!</a>
        </p>
      </div>
    </div>
</section>
 
<section class="container" >
    @include('partials.errors') 

    <form action="{{route('admin.photos.update', $photo)}}" method="post" id="form" enctype="multipart/form-data"> 
        @csrf 
        @method('PUT') 
        <div class="mb-3">
            <label for="name" class="form-label text-primary">New Title</label>
            <input
                type="text"
                class="form-control "
                name="name"
                id="name"
                aria-describedby="nameHelper"
                placeholder="Type a title here!"
                value="{{old('name', $photo->name)}}"
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
                        {{ old('type_id',$photo->category_id) == $category->id ? 'selected' : '' }}>
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
            <textarea class="form-control" name="description" id="description" rows="3"  >{{old('description', $photo->description)}}</textarea>

            @error('description')
             <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Update &#9825;
        </button>
        
       
    </form>
</section>


@endsection

