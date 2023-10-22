<?php

namespace App\View\Components;

use App\Models\Blog;
use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogCategoryComponent extends Component
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
        $categories=Category::with('blog')->get();

        return view('components.blog-category-component',compact('categories'));
    }
}