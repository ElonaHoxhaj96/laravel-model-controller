<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class PageController extends Controller
{
     // il petodo index è il metodo che si usa per la home
     public function index(){
         return view('home');
    }
    public function movie(){
        $movies = Movie::all();
        return view('movies');
    }
   
    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
