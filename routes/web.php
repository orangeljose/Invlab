<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowArticles;
use App\Http\Livewire\ShowRequests;
use App\Http\Livewire\ShowInventorys;
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
})->name('home');;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Route::get('/dashboard',  ShowArticles::class)
    // })->name('dashboard');
    Route::get('/articles', ShowArticles::class)->name('articles');
    Route::get('/requests', ShowRequests::class)->name('requests');
    Route::get('/inventorys', ShowInventorys::class)->name('inventorys');
});
