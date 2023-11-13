<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;

class WisataController extends Controller
{
    public function index()
    {
        return view ("wisata.all", [
            "title"=> "wisata",
            "wisata"=> wisata::all() 
        ]);
    }

    public function show($wisatawan) 
    {
        return view ("wisata.detail", [
            "title"=> "detail.wisata",
            "wisata"=> wisata::find($wisatawan),
        ]);
    }
}
