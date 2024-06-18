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