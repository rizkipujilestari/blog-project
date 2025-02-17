<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryComposer
{
    public function compose(View $view)
    {
        $categories = Category::select('id', 'name')
        ->withCount('article')
        ->get();

        $view->with('categories', $categories);
    }
}
