<?php

use App\Models\User;
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

// Route::get('/', function () {

//     return view('welcome');
// });

Route::domain('{tenant}.laravel8-aws.local')->group(function () {
    Route::get('/', function () {
      dd(User::find(1));
        return view('welcome');
     })->middleware('tenant');
});
Route::domain('laravel8-aws.local')->group(function () {
    Route::get('/', function () {
        dd(User::find(1));
          return view('welcome');
       });
});
// Route::middleware('tenant')->group(function() {
//     Route::get('/', function () {
      
//        return view('welcome');
//     });

//     // if(Spatie\Multitenancy\Models\Tenant::checkCurrent()){
//     //     // dd(User::find(1));
//     //   } else {
//     //     //   dd(User::find(1), "here");
//     //       echo "landlord"; exit;
//     //   }
//     //  dd(app('currentTenant'));
     
//     // Route::get('/', function () {
//     //     dd(app('currentTenant') );
//     //     return view('welcome');
//     // });
// });

