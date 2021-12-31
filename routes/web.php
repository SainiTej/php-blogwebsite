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

Route::get('/blog',[\App\Http\Controllers\FirstProjectController::class,'index']);

Route::get('/blog/{firstProject}',[\App\Http\Controllers\FirstProjectController::class,'show']);


Route::get('/blog/create/post', [\App\Http\Controllers\FirstProjectController::class, 'create']);          //shows create post form
Route::POST('/blog/create/post', [\App\Http\Controllers\FirstProjectController::class, 'store']);          //saves the created post to the databse
Route::get('/blog/{firstProject}/edit', [\App\Http\Controllers\FirstProjectController::class, 'edit']);        //shows edit post form
Route::put('/blog/{firstProject}/edit', [\App\Http\Controllers\FirstProjectController::class, 'update']);      //commits edited post to the database 
Route::delete('/blog/{firstProject}', [\App\Http\Controllers\FirstProjectController::class, 'destroy']);       //deletes post from the database
