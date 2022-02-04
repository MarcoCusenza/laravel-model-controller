<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
  public function index()
  {
    $allMovies = Movie::all();
    dd($allMovies);
    return view("home");
  }
}
