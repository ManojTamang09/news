<?php

use App\Http\Controllers\SliderController;
use App\Http\Controllers\UploadTextImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Models\Photo;
use App\Models\Slider;
use App\Models\UploadTextImage;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

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
    $flag=1;
    $images=DB::table('upload_text_images')
    ->select('upload_text_images.*')
    ->where('upload_text_images.status',$flag)
    ->orderBy('id', 'desc')->get();

    $photos=Photo::all();
    $video=DB::table('videos')
    ->select('videos.*')
    ->where('videos.status',$flag)
    ->orderBy('id', 'desc')->get();

    $sliders= Slider::orderBy('id', 'desc')->take(4)->get();
    return view('visitor.welcome',compact('images','photos','video','sliders'));
});

Auth::routes();


Route::group(['middleware' => 'auth'],function()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/usermaster',UserController::class);
    Route::get('/textimage/final',[App\Http\Controllers\UploadTextImageController::class, 'final'])->name('textimage.final');
    Route::get('/textimage/delete/{id}',[App\Http\Controllers\UploadTextImageController::class, 'delete'])->name('textimage.delete');
    Route::post('/approve/{id}',[App\Http\Controllers\UploadTextImageController::class, 'approve'])->name('approve');
    Route::resource('/textimage',UploadTextImageController::class);
    Route::get('/video/final',[App\Http\Controllers\VideoController::class, 'final'])->name('video.final');
    Route::post('/approvevideo/{id}',[App\Http\Controllers\VideoController::class, 'approvevideo'])->name('approvevideo');
    Route::resource('/video',VideoController::class);
    Route::resource('/slider',SliderController::class);
});

    Route::get('/visitor/{id}', [App\Http\Controllers\PagesController::class, 'details'])->name('visitor.details');
    Route::get('/visitor/detailsvideos/{id}', [App\Http\Controllers\PagesController::class, 'detailsvideos'])->name('visitor.detailsvideos');
    Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
    Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
    Route::get('/postdetails', [App\Http\Controllers\PagesController::class, 'postdetails'])->name('postdetails');
    Route::get('/allvideos', [App\Http\Controllers\PagesController::class, 'allvideos'])->name('allvideos');





Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
Route::resource('/users','UsersController',['except'=> ['show','create','store']])->middleware('auth');
});

