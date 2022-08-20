<?php

use App\Http\Controllers\studentController;
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
    return view('welcome');
});

Route::get('/hello/travel', function () {
    return redirect('/');
});

Route::get('/students', [studentController::class, 'students']);

Route::redirect('/hello/travel/agent', 'tashawan');

Route::view('/hello/travel/tashawan', 'tashawan'/** URI, viewFile */);

Route::view('/hello', 'hello');