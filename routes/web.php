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

Route::post('/api/create/wishlist', 'App\Http\Controllers\WishListController@create');

Route::get('/refresh-token', function () {
    return response()->json([
        'token' => csrf_token()
    ], 200);
});
