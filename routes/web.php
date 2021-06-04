<?php

use App\Http\Controllers\RoomController;
use App\Models\Room;
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
    $rooms = Room::orderby('id','desc')->limit(8)->get();
    return view('frontend.pages.Homepage',compact('rooms'));
});
Route::get('/aboutus', function () {
    return view('frontend.pages.aboutus');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/contactus', function () {
    return view('frontend.pages.contactus');
});
Route::get('/gallary', function () {
    return view('frontend.pages.gallary');
});
Route::resource('room', RoomController::class);