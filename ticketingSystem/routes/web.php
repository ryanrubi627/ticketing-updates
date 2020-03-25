<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/home', 'HomeController@display');
Route::post('/create', 'HomeController@insert');
Route::post('/update', 'HomeController@update');

Route::get('/admin', 'AdminPageController@display');
Route::post('/admin/insert', 'AdminPageController@insert');
Route::get('/admin/closed_ticket', 'AdminPageController@display_closed_ticket');
Route::delete('/delete/{id}', 'AdminPageController@delete');



// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//     			'arr1' => 'this is first array', 
//     			'arr2' => 'this is second array'
//     		];

//     if(!array_key_exists($post, $posts)){
//     	abort(404);
//     }

//     return view('practice', [
//     							'post' => $posts[$post]
//     						]);
// });


// Route::get('practice', 'practice_controller@show');




// Route::get('/', function () {
//     return view('welcome2');
// });
// Route::get('/about', function () {

// 	return view('about', ['articles' => App\Article::latest()->get()]);

// });


// Route::get('/articles/{id}', 'ArticlesController@index');










