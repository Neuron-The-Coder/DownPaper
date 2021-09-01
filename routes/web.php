<?php

use App\Http\Controllers\WallpaperController;
use Illuminate\Support\Facades\DB;
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
  return view('test', [
    'var1' => "Hello",
    'var2' => DB::table('wallpaper')->where('id', '=', '1')->get()
  ]);
});

Route::get('/db_dump', function(){
  echo("Still Fine");
  dd(parse_url(getenv('DATABASE_URL')));
});