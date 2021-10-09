<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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


Route::get('/', [usercontroller::class, 'home'])->name('home');

Route::get('/login', [usercontroller::class, 'loginPage'])->name('login');
Route::post('/login', [usercontroller::class, 'loginSubmit'])->name('login');


Route::get('/registration', [usercontroller::class, 'registrationPage'])->name('registration');
Route::post('/registration', [usercontroller::class, 'registrationSubmit'])->name('registration');

Route::get('/contact', [usercontroller::class, 'contactPage'])->name('contact');
Route::post('/contact', [usercontroller::class, 'contactSubmit'])->name('contact');