<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        
        $trains = Train::orderby("hourDeparture")->get();

        return view("welcome", compact("trains"));
    }
}
