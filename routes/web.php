<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Models\Posts;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;
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
Route::redirect('/', '/en');
Route::group(['prefix'=>'{language}'], function () {
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

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
	$post= Posts::find(1);
    return $post;
});

Route::get('/met/{id}/{name?}/{surname?}', function($id, $name="Ali", $surname='Askar'){
	return $id." ".$name. " ".  $surname;

});

Route::get('blog/index', [BlogController::class, 'index']);

Route::get('blog/create', function(){
	return view('blog.create');

});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');

//Route::get('/calling', 'DilfinaController@operation');

Route::get('/posts/{id}', [BlogController::class, 'get_post']);

Route::view('upload', 'upload');
Route::post('upload',[UploadController::class,'index']);

/*Route::get('/upl', function () {
    return view('upload');
});
Route::post('upload', [UploadController::class, 'index']);

//Route::get('/uploadfile', 'UploadController@index');
//Route::post('uploadfile', 'UploadController@showUploadFile');

Route::get('/uploadfile', [UploadController::class, 'index']);
Route::post('/uploadfile', [UploadController::class, 'showUploadFile']);*/

Route::get('mail/send', [MailController::class,'send']);

Route::get('/test', function () {
	dd(App::getLocale());
});

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
