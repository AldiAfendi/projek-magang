<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controller\LoginController;
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


 Route::get('/login', function () {
    return view('login.login16');
 });

 Route::get('/register16', function () {
    return view('login.register16');
 });

 Route::get('/forget16', function () {
    return view('login.forget16');
 });



// Route::get('/login', [LoginController::class, 'index']);
