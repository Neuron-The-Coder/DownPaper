<?php

namespace App\Http\Controllers;

use App\Models\Wallpaper;
use Illuminate\Http\Request;

class WallpaperController extends Controller
{

    public function getViewWallpaper(){

        $wallpapers = Wallpaper::all();
        return view("dashboard", [
            "wallpapers" => $wallpapers
        ]);
    }
}
