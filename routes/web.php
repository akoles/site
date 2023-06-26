<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Menuset;
use App\Models\Titleset;
use App\Models\Mainpageset;
use App\Http\Controllers\ApiController;

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

Route::get('/saymyname/{name?}/', function (string $name = 'default') {
    return view('saymyname', ['name' => $name]);});
Route::get('/account', function () {
    return view('account');});
Route::get('/convertor', function () {
    return view('convertor');});
Route::get('/footer', function () {
    return view('footer');});
Auth::routes();
Route::get('/home', [\App\Http\Controllers\ApiController::class, 'index']);
Route::get('/', [\App\Http\Controllers\ApiController::class, 'index']);
Route::get('/Currencies', [\App\Http\Controllers\ApiController::class, 'index2']);
Route::resource('titleset', \App\Http\Controllers\TitlesetController::class);
Route::resource('menuset', \App\Http\Controllers\MenusetController::class);
Route::resource('mainpageset', \App\Http\Controllers\MainpageController::class);
Route::resource ('guzzle', \App\Http\Controllers\GuzzleController::class);
Route::resource('footerset', \App\Http\Controllers\FooterController::class);


