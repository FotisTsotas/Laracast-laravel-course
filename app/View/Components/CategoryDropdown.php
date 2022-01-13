<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{
    
    public function render()
    {
        return view('components.category-dropdown',[
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))

        ]
    );
    }
}
