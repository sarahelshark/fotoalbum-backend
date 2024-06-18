<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index(){
        return response()->json([
            'test' =>'success',
        
            'results' => Photo::with(['category'])->orderByDesc('id')->paginate(3),
        
            
        ]);
    }
    public function show($id){
            $photo = Photo::with(['category'])->where('id', $id)->first(); 
            //first() se non mi da la foto, allora mi dara null
            //spiegone sul readme
            if($photo){
                return $photo;
            }else{
                return response()->json([
                    'success' => false,
                    'results'=> 'error 404 not found'
        
                ]);
            }
        
    }
}
