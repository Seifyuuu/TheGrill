<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeureController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SociallinkController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use App\Models\About;
use App\Models\Service;
use App\Models\Chef;
use App\Models\Footer;
use App\Models\Customer;
use App\Models\Heure;
use App\Models\Table;
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
    $chefs = Chef::all();
    $customers = Customer::all();
    $tables = Table::all();
    $heures = Heure::all();
    $footers = Footer::all();
    return view('home', compact("abouts", "services","chefs", "customers", "tables","footers", "heures"));
});

Route::get('/back', function () {
    return view("back.home");
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/back/about', AboutController::class);
Route::resource('/back/service', ServiceController::class);
Route::resource('/back/chef', ChefController::class);
Route::resource('/back/icon', IconController::class);
Route::resource('/back/sociallink', SociallinkController::class);
Route::resource('/back/customer', CustomerController::class);
Route::resource('/back/table', TableController::class);
Route::resource('/back/heure', HeureController::class);
Route::resource('/back/footer', FooterController::class);
Route::resource('/back/user', UserController::class);



