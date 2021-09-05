<?php

namespace App\Http\Controllers;

use App\Models\Wallpaper;
use Illuminate\Support\Facades\Storage;

class WallpaperController extends Controller
{

    public function getViewWallpaper(){

        $wallpapers = Wallpaper::all();
        return view("dashboard", [
            "wallpapers" => $wallpapers,
            "style" => file_get_contents('https://raw.githubusercontent.com/Neuron-The-Coder/downpaper/main/storage/app/public/style.css')
        ]);
    }

    public function downloadWallpaper($image){
        $url = github_fetch('/wallpaper/'.$image);
        return response()->streamDownload(function() use ($image) {
            echo github_fetch_content('/wallpaper/'.$image);
        }, $image);
    }
}
