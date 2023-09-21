<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers;


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

Route::get('main/', function () {
    return view('index');
});

Route::get('/', [PagesController::class, 'home']);
Route::get('header/',[PagesController::class,'headerPage']);
Route::get('services/', [PagesController::class, 'services']);
Route::get('about_us/',[PagesController::class, 'aboutus']);
Route::get('contact/',[PagesController::class,'contactus']);
Route::get('mission/',[PagesController::class,'mission']);
Route::get('vision/',[PagesController::class,'vision']);
Route::get('objectives/',[PagesController::class,'objective']);
Route::get('project1/',[PagesController::class,'project1']);
Route::get('project2/',[PagesController::class,'project2']);
Route::get('project3/',[PagesController::class,'project3']);
Route::get('project4/',[PagesController::class,'project4']);
Route::get('project5/',[PagesController::class,'project5']);
Route::get('project6/',[PagesController::class,'project6']);

Route::post('datasubmit', 'App\Http\Controllers\PagesController@datasubmit');

// Route::POST('datasubmit', 'PagesController@datasubmit');





// Route::get('about/', [PagesController::class, 'about'] );
