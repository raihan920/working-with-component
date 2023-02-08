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
    public $themeProperty;
    public $themeName;
    public function __construct($themeName=null) //$themeName='theme1'
    {
        $this->themeName = $themeName;
        $this->getTehemeProperty();
    }

    public function getTehemeProperty(){
        switch($this->themeName){
            case 'theme1':
                $this->themeProperty = 'theme 1 prop';
                return ['themeProperty', $this->themeProperty];
                break;
            case 'theme2':
                $this->themeProperty = 'midnight-blue-bg light-cyan-text';
                return ['themeProperty', $this->themeProperty];
                break;
            default:
                return '';
        }
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
