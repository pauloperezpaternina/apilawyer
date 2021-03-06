<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Panel\SubscriptionController;
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

Auth::routes();

Route::get('/panel', [App\Http\Controllers\HomeController::class, 'index'])->name('panel');

Route::resource('panel/subscriptions', SubscriptionController::class, ['active'=>true])
->only(['index', 'show'])
->names('subscriptions')
->middleware('auth');

