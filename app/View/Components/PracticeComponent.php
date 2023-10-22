<?php

namespace App\View\Components;

use App\Models\Practice;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PracticeComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        
        $practices=Practice::all();
        return view('components.practice-component',compact('practices'));
    }
}
