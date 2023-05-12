<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function home(){
        $movies = MovieController::all();

        return view('home', compact('movies'));
    }
}
