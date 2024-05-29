<?php

use App\Events\NewUserNotification;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

//just simple registration page
Route::get('/user-registration', function () {
    return view('user_registration');
});

//submit form
Route::post('/user-registration', function () {

    //get user name
    $userName = request()->name;
    
    //send user name to event
    event( new NewUserNotification($userName));
    return redirect('/user-registration');
});
