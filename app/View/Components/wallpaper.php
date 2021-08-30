<?php

namespace App\View\Components;

use Illuminate\View\Component;

class wallpaper extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name;
    public $image;
    public $description;

    public function __construct($wallpaper)
    {
        $this->name = $wallpaper->name;
        $this->image = $wallpaper->image;
        $this->description = $wallpaper->description;
    }

    public function imagePath(){
        return asset("storage/wallpaper/$this->image");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.wallpaper');
    }
}
