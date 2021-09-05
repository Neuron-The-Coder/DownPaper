<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WallpaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(github_fetch("/wallpaper/wallpaper.csv"), "r");
        while(!feof($file)){
            $line = fgets($file);
            $data = explode('#', $line);

            DB::table('wallpaper')->insert([
                "name" => $data[1],
                "image" => $data[2],
                "description" => $data[3]
            ]);
        }    
        fclose($file);
    }
}
