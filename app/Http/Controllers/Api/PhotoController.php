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
}
