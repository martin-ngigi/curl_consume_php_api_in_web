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

//add_user_data
/**
 * '/add_user_data' is the URL
 * 'add_user_data' is the method defined in the UserController for adding a user
 * eg. http://127.0.0.1:8000/add_user_data
 */
Route::post('/add_user_data', [UserController::class, 'user_add_method']);

//update_user
/**
 * '/update_user' is the URL
 * 'update_user' is the method defined in the UserController for adding a user
 * eg. http://127.0.0.1:8000/update_user
 */
Route::get('/update_user', [UserController::class, 'updateUserPageMethod']);

//search_user_update_data
/**
 * '/search_user_update_data' is the URL
 * 'search_user_update_data' is the method defined in the UserController for adding a user
 * eg. http://127.0.0.1:8000/search_user_update_data
 */
Route::post('/search_user_update_data', [UserController::class, 'searchUserUpdateDataMethod']);

//update_user_to_api
/**
 * '/update_user_to_api' is the URL
 * 'update_user_to_api' is the method defined in the UserController for adding a user
 * eg. http://127.0.0.1:8000/update_user_to_api/1
 */
Route::post('/update_user_to_api/{id}', [UserController::class, 'updateUserToAPIMethod']);

