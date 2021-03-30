<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class ApiController extends Controller
{
	/*
	This function returns all posts rows
	*/
    public function index(Request $request){
    	$posts = Posts::all();
    	return response($posts, 200);

    }
    /*
    Returns the post with specified id

    */

    public function get_post(Request $request){
    	$post=Posts::find($request->post_id);

    	if($post==null){
    		return response(['message'=>'There is no post with that id'], 404);
    	}
    	return response($post, 200);
    }
}
