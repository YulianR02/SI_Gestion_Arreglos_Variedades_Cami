<?php

namespace App\http\ViewComposer;
use App\Category;
use Illuminate\Contracts\View\View;

class CategoriesComposer
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function compose(View $view)
    {
        $categorias = Category::with('subcategories','image')->get();
        $view->with('categorias',$categorias);
    }
}
