<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    public function index()
    {
        return view("sekolah.sekolah", [
            "title"=> "Sekolah",
            "sekolah"=> sekolah::all()
        ]);
    }
    public function show($sekolah) 
    {
        return view ("sekolah.detail3", [
            "title"=> "detail3.sekolah",
            "sekolah"=> sekolah::find($sekolah),
        ]);
    }
}
