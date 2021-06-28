<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
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


// {tenant}'.env('BASE_DOMAIN')

Route::domain('{tenant}.'.env('BASE_DOMAIN'))->middleware('tenant')->group(function() {
    
    Route::get('/', function ($tenant) {
    
        return $tenant;
    });

});

Route::get('/', function (Request $request) {
    return view('welcome');
 });



