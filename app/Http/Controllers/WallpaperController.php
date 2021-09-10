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

    public function downloadWallpaper($image){
        $url = github_fetch('/wallpaper/'.$image);
        return response()->streamDownload(function() use ($image) {
            echo github_fetch_content('/wallpaper/'.$image);
        }, $image);
    }

    public function getSpecificWallpaper(Request $req){

        $wall = $req->input("id");
        $response = Wallpaper::where("name", "LIKE", "$wall")->first();
        $response['image_url'] = github_fetch("/wallpaper/$response->image");
        $response ['image_download_url'] = route("download", ["image" => $response->image]);

        // $additional = [
        //     "image_url" => github_fetch("/wallpaper/$response->image"),
        //     "image_download_url" => route("download", ["image" => $response->image])
        // ];
        // return response()->json($response)->json($additional); 
        return response()->json($response);
    }
}
