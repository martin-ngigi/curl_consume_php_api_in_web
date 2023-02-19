<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * '/' is the URL
 * 'indexMethod' is the method defined in the UserController
 * eg. http://127.0.0.1:8000/
 */
Route::get('/', [UserController::class, 'indexMethod']);


/**
 * '/add_user' is the URL
 * 'addUserMethod' is the method defined in the UserController returning the page
 * eg. http://127.0.0.1:8000/add_user
 */
Route::get('/add_user', [UserController::class, 'addUserPageMethod']);

//user_add
/**
 * '/user_add' is the URL
 * 'user_add' is the method defined in the UserController for adding a user
 * eg. http://127.0.0.1:8000/add_user1
 */
Route::post('/add_user_data', [UserController::class, 'user_add_method']);
