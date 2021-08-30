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
        DB::table('wallpaper')->insert([
            "name" => "Birthday",
            "image" => "1.jpg",
            "description" => "Just a birthday at the squad's home"    
        ]);
        DB::table('wallpaper')->insert([
            "name" => "Boat",
            "image" => "2.jpg",
            "description" => "Boat :/"    
        ]);
        DB::table('wallpaper')->insert([
            "name" => "Nighty Night",
            "image" => "3.jpg",
            "description" => "Just a nice day at December 31st 23:59"    
        ]);
        DB::table('wallpaper')->insert([
            "name" => "Champions",
            "image" => "4.jpg",
            "description" => "If Dao is the champion, I am <a href=\"https://github.com/taylorotwell\">Taylor Otwell</a>"    
        ]);
        DB::table('wallpaper')->insert([
            "name" => "Dao vs Bazzi",
            "image" => "5.jpg",
            "description" => "The most badass action ever. I bought Saber because of this wallpaper. Also dunno but I love Programming (Especially Fullstack Web Development) since this was discovered"    
        ]);
        DB::table('wallpaper')->insert([
            "name" => "Season 4",
            "image" => "6.jpg",
            "description" => "Another badass wallpaper that I love :>"    
        ]);
        DB::table('wallpaper')->insert([
            "name" => "PUSH THE KART!!!",
            "image" => "7.png",
            "description" => "Next time, use GoSend, you blue boy!"    
        ]);
        DB::table('wallpaper')->insert([
            "name" => "WW3",
            "image" => "8.png",
            "description" => "Dunno how hoomans will perceive this kind of war. They might order an airstrike"    
        ]);
    }
}
