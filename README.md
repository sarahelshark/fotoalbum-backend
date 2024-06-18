// Intro > App concept
approach-> 
destination->

**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {

        if($photo->user_id == auth()->id()){

        $categories = Category::all();  
        return view('admin.photos.edit',compact('photo', 'categories'));
        } else{
            return to_route('admin.photos.index')->with('message','error: action not authorized');
        }
        
        
    }

    Route::get('photos/{photo}', function($id){
    $photo = Photo::with(['category','user'])->where('id', $id)->first(); 
    //user:null> I need to define the relationship between Photo & User if I want to have diff users in my platform, so the eager loading is relevant, in quel caso User> hasMany (Photo::class) e Photo BelongsTo(User::class) one 2 many relationship
    if($photo){
        return $photo;
    }else{
        return response()->json([
            'success' => false,
            'results'=> 'error 404 not found'

        ]);
    }
});