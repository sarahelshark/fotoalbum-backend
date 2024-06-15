<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Http\Controllers\Controller;  //siccome siamo in una sottoclasse, ci serve la parent class
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Photo::all());
        return view('admin.photos.index', ['photos' => Photo::orderByDesc('id')->paginate(6)]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhotoRequest $request)
    {
        $validated = $request->validated(); //validation
        //image path after the modify of .env , filesystems.php, php artisan storage:link
        $validated['cover_image'] = Storage::put('uploads', $request->cover_image);

        
        Photo::create($validated);
        //redirect
        return to_route('admin.photos.index')->with('message','Your new photo is now stored in the collection.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        return view('admin.photos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        return view('admin.photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
       //dd($request->all());
       //validated inputs
       $validated = $request->validated();

       //update image 
       if($request->has('cover_image')){
        if($photo->cover_image){
            Storage::delete($photo->cover_image);
        }
        $image_path = Storage::put('uploads', $request->cover_image);
        $validated['cover_image'] = $image_path;
       };

       //update model & save new version
       $photo->update($validated);

       //redirect
       return to_route('admin.photos.index')->with('message','Your photo is now updated, enjoy your collection.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
