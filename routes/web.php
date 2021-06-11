<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Models\Room;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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
Route::get('/welcome', function () {
    return view('welcome');
});
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


Auth::routes();

Route::group(['middleware'=>['protectedPage']],function(){
    Route::get('search',[RoomController::class,'search']); 
    Route::get('/profile',[ProfileController::class,'index'])->name('profile'); 
    Route::put('/profile-update',[ProfileController::class,'update'])->name('profile-update'); 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('room', RoomController::class);
    Route::resource('post', PostController::class);
    Route::POST('/post-comment/{id}',[CommentController::class,'store'])->name('post-comment');
});
Route::POST('/contact-us/send', [App\Http\Controllers\SendEmailController::class, 'send'])->name('contactus');

