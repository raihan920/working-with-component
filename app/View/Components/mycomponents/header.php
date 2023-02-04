<?php

namespace App\View\Components\mycomponents;

use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $bgColorClass;
    public $fontColorClass;

    public function __construct() //$themeName='theme1'
    {
        // $this->themeName = $themeName;
        // switch($themeName){
        //     case 'theme1':
        //         break;
        //     case 'theme2':
        //         $this->bgColorClass = 'midnight-blue-bg';
        //         $this->fontColorClass = 'light-cyan-text';
        //         break;
        //     default:
        //         echo '';
        // }


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mycomponents.header');
    }
}
