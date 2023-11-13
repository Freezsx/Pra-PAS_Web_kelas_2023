<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index()
    {
        return view ("kuliner.all2", [
            "title"=> "kuliner",
            "kuliner"=> Kuliner::all() 
        ]);
    }

    public function show($kuliners) 
    {
        return view ("kuliner.detail2", [
            "title"=> "detail2.kuliner",
            "kuliner"=> Kuliner::find($kuliners),
        ]);
    }
}
