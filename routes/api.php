<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectoneController;
use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::match(['post', 'get'], '/blog', [BlogController::class, 'blog']);
Route::match(['post', 'get'], '/blog/{id}', [BlogController::class, 'single_blog']);
Route::match(['post', 'get'], '/get_authors', [BlogController::class, 'get_authors']);
Route::match(['post', 'get', 'put'], '/edit_blog', [BlogController::class, 'editBlog']);
Route::match(['post', 'get',], '/create_blog', [BlogController::class, 'createBlog']);
Route::match(['post', 'get'], '/delete_blog', [BlogController::class, 'deleteBlog']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::match(['post', 'get'], '/add_user', [CrudController::class, 'addUser']);
Route::match(['post', 'get'], '/all_users', [CrudController::class, 'getUsers']);
