<?php

use App\Http\Controllers\InformationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DorouController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [DorouController::class, 'welcome'])
    ->name('main.welcome');

Route::get('about', [PageController::class, 'about'])
    ->name('about.about');

Route::get('members', [TeamController::class, 'index'])
    ->name('members.team');

Route::get('members/{id}', [TeamController::class, 'show'])
    ->name('members.show');

Route::get('information', [InformationController::class, 'index'])
    ->name('information.index');

Route::get('information/{id}', [InformationController::class, 'show'])
    ->name('information.show');

//Route::resource('posts', PostController::class)->except('show', 'index');
