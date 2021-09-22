<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Models\About;
use App\Models\Service;
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
    $abouts= About::all();
    $services=Service::all();
    return view('home', compact("abouts", "services"));
});

Route::get('/back', function () {
    return view("back.home");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/back/about', AboutController::class);
Route::resource('/back/service', ServiceController::class);
