<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data['post'] = Post::all();
       return view('index', $data); 
    }
}
