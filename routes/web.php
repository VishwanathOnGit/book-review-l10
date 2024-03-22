<?php

use App\Http\Controllers\BookController;
use App\Http\Resources\UserCollection;
use App\Mail\Test;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return new Test();
    Mail::send(new Test());
    // Mail::send(new OrderShipped());
    return view('welcome');
});

Route::get('api-test', function () {
    return new UserCollection(User::get());
});

Route::resource('books', BookController::class);