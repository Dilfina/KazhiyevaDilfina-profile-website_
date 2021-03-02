<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class BlogController extends Controller
{
    public function index(){
    	$blogs=Posts::all();
    	return view('blog.index')->with(['blogs'=>$blogs]);

    }
}
