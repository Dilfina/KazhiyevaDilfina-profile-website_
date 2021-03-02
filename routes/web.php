<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Models\Posts;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');



Route::get('/​post/create', function () {
    DB::table('post')->insert([
    	'title'=> 'Alien',
    	'body'=>300,
    ]);
});

Route::get('/post', function () {
	$post= Post::find(1);
    return $post;
});

Route::get('/posts/create', function (){
	DB::table('posts')->insert([
		'title'=>'DDMS',
		'body'=>300
	]);

});
Route::get('/posts', function () {
	$post= Posts::find(2);
    return $post;
});
Route::get('/met/{id}/{name?}/{surname?}', function($id, $name="Ali", $surname='Askar'){
	return $id." ".$name. " ".  $surname;

});

Route::get('blog/index', [BlogController::class, 'index']);