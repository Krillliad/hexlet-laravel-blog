<?php

use App\Http\Controllers\InformationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'welcome'])
    ->name('main.welcome');

Route::get('about', [PageController::class, 'about'])
    ->name('about.about');

Route::get('members', [TeamController::class, 'index'])
    ->name('members.team');

Route::get('members/{id}', [TeamController::class, 'show'])
    ->name('members.show');

Route::get('information', [InformationController::class, 'index'])
    ->name('information.index');

Route::get('information/create', [InformationController::class, 'create'])
    ->name('information.create');

Route::post('information', [InformationController::class, 'store'])
    ->name('information.store');

Route::get('information/{id}/edit', [InformationController::class, 'edit'])
    ->name('information.edit');

Route::patch('information/{id}', [InformationController::class, 'update'])
    ->name('information.update');

Route::delete('information/{id}', [InformationController::class, 'destroy'])
    ->name('information.destroy');

Route::get('information/{id}', [InformationController::class, 'show'])
    ->name('information.show');

