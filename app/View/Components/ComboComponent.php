<?php

namespace App\View\Components;

use App\Models\About;
use App\Models\Brend;
use App\Models\Client;
use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ComboComponent extends Component
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
        $abouts=About::all();
        $brends=Brend::all();
        $clients = Client::all();
        $newses=News::query()->orderByDesc('id')->limit(2)->get();
        return view('components.combo-component', compact('clients','brends','abouts','newses'));
    }
}
