<?php

namespace App\Http\Controllers;

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


//homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

//to go to the auth info
Route::prefix('login')->group(function () {

    //route to go to the auth form
    Route::get('/', function () {
        return view('welcome');
    })->name('login');

    //check form info to auth user
    Route::post('/', [ManageAccess::class, 'checkAuthInfo']);
});


// logged user route
Route::middleware('auth')->group(function () {

    Route::prefix('dashboard')->group(function (){
        Route::get('/', function () {
            return view('account.admin.admin_dashboard');
        })->name('dashboard');
        Route::post('/', [ManageAccess::class, 'logout']);

        Route::get('component/{component}/{type}', [ManageComponent::class, 'edit'])->name('component');
    });

});



