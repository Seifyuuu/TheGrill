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

Route::resource('/back/about', AboutController::class)->middleware(['webmaster']);
Route::resource('/back/service', ServiceController::class)->middleware(['webmaster']);
Route::resource('/back/chef', ChefController::class)->middleware(['webmaster']);
Route::resource('/back/icon', IconController::class)->middleware(['webmaster']);
Route::resource('/back/sociallink', SociallinkController::class)->middleware(['webmaster']);
Route::resource('/back/customer', CustomerController::class)->middleware(['webmaster', 'editeur']);
Route::resource('/back/table', TableController::class)->middleware(['webmaster']);
Route::resource('/back/heure', HeureController::class)->middleware(['webmaster']);
Route::resource('/back/footer', FooterController::class)->middleware(['webmaster']);
Route::resource('/back/user', UserController::class);



