<?php

use App\Http\Controllers\dashboardhandler;
use App\Http\Controllers\jobrequesthandler;
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
    return view('index');
});
Route::post('/jobrequest', [jobrequesthandler::class, 'sendrequest']); //contact form
Route::get('/admin', [dashboardhandler::class, 'index']);
Route::view('/viewrequest','jobrequest');
