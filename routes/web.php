<?php

use App\Http\Controllers\KulinerController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello";
});

Route::get("/home", function () {
    return view("Home", [
        "title"=> "Home",
    ]);
});

Route::get("/about", function () {
    return view("about", [
        "title"=> "About",
        "nama"=> "Muhammad 'Abid Fadhlullah Maajid",
        "kelas"=> "11 PPLG 2",
        "foto"=> "img/fotoabid.jpeg",
    ]);
});

Route::get("/wisata/all",[WisataController::class,'index']);
    
Route::get("/wisata/detail{wisatawan}",[WisataController::class,'show']);

Route::get("/kuliner/all2",[KulinerController::class,'index']);
    
Route::get("/kuliner/detail2{kuliners}",[KulinerController::class,'show']);

Route::get('/sekolah/sekolah',[SekolahController::class,'index']);

Route::get('/sekolah/detail3{seholahs}',[SekolahController::class,'show']);