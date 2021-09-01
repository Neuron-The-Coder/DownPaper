<?php

use App\Http\Controllers\WallpaperController;
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

Route::get('/', [WallpaperController::class, 'getViewWallpaper'])->name('dashboard');
Route::get('/test', function() {
  return 'This app is working correctly, just the DB is f-ed up';
});

Route::get('/db_dump', function(){
  echo("Still Fine");
  dd(parse_url(getenv('DATABASE_URL')));
});