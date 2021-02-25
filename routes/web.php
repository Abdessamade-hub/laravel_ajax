<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/home',"App\Http\Controllers\StudentController@getStudents");
Route::get('/create_student',"App\Http\Controllers\StudentController@createStudents");

Route::post('/save_student',"App\Http\Controllers\StudentController@saveStudents");


// Route::post('/save_student',"App\Http\Controllers\StudentController@saveStudent");


Route::get('/',"App\Http\Controllers\StudentController@index")->name('home');
Route::get('/edit/{id}',"App\Http\Controllers\StudentController@edit");
Route::get('/show/{id}',"StudentController@show");
Route::get('/create',"App\Http\Controllers\StudentController@create");
Route::post('/store',"App\Http\Controllers\StudentController@store");
Route::post('/update/{id}',"App\Http\Controllers\StudentController@update");
// Route::post('/delete/{id}',"StudentController@delete");


//post
Route::get('/posts',"App\Http\Controllers\PostController@index");
Route::post('addPost',"App\Http\Controllers\PostController@addPost");
Route::post('editPost',"App\Http\Controllers\PostController@editPost");
Route::post('deletePost',"App\Http\Controllers\PostController@deletePost");



Route::get('/post/fetch_data',"App\Http\Controllers\PostController@fetch_data");
// Route::get('/acc', function(){
//     return view('post/index');
// })->name('acc');



