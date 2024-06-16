<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Photo;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//restituisce array di oggetti -> OPZIONE 1 
/*Route::get('photos', function(){
    return Photo::all();
});*/

//restituisce chiave:valore , + versatile _> OPZIONE 2 
Route::get('photos', function(){
    return response()->json([
        'test' =>'success',
        //cosa voglio restituire in json ? personalizzo la risposta
        //'results' => Photo::orderByDesc('id')->get(),  cosi prendo tutto
        //result restituira la mia array di oggettidella collection
    
        'results' => Photo::with(['category','user'])->orderByDesc('id')->paginate(3),
    
        //nel with ci metto i nomi dei metodi dei modelli che sto usando per recuperare tutto cio che mi serve
    ]);
}); 

Route::get('photos/{photo}', function ($id){

});

