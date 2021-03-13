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
    public function store(Request $request){
    	Posts::create([
    		'title' => $request->title,
    		'body' => $request->body
    	]);
    	return back();

    }

    public function get_post($id){
    	$post = Posts::find($id);

    	if($post == null)
    		return response(['message'=> 'post not found'], 404);

    	return view('blog.detail')->with(['post'=>$post]);

    }

}
