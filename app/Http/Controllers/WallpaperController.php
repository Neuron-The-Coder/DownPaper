<?php

namespace App\Http\Controllers;

use App\Models\Wallpaper;
use Illuminate\Http\Request;

class WallpaperController extends Controller
{

    public function getViewWallpaper(){

        $wallpapers = Wallpaper::all();
        return view("dashboard", [
            "wallpapers" => $wallpapers,
            "style" => file_get_contents('https://raw.githubusercontent.com/Neuron-The-Coder/downpaper/main/storage/app/public/style.css')
        ]);
    }
}
