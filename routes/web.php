<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\PageController;

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
//     return view('index');
// });

Route::GET('/', [SiteController::class,'index'])->name('index');

Route::GET('/about', [SiteController::class,'about'])->name('about');

Route::GET('/how-to-apply', [SiteController::class,'apply'])->name('apply');

Route::GET('/contact-us', [SiteController::class,'contact'])->name('contact');

Route::GET('/partners/{slug}', [SiteController::class,'partner'])->name('partner');

Route::GET('/courses/{slug}', [SiteController::class,'course_detail'])->name('course.detail');

Route::GET('/courses', [SiteController::class,'course'])->name('course');

Route::post('/update-data', [PageController::class,'updateStatus'])->name('update-data');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
Route::POST('update/{id}', [PageController::class,'update'])->name('page.update');
});
