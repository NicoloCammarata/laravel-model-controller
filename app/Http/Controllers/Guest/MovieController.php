<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;

class MovieController extends Controller
{
    public function index()
    {

        
        
        
        
        return view('layouts.movies.index');
    }
    
}
