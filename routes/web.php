<?php

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

Route::get('/', [DorouController::class, 'welcome']);

Route::get('about', [PageController::class, 'about']);

Route::get('members', [TeamController::class, 'team']);

//Route::resource('posts', PostController::class)->except('show', 'index');
