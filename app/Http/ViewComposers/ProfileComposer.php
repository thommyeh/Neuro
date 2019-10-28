<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Article;
use App\Models\Category;


class ProfileComposer
{



    /**
     * Create a new profile composer.
     *

     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $sorted = Article::orderBy('Datec', 'desc')->take(5)->get();
        $categories = Category::all();


        $view->with('sorted', $sorted)
        ->with('categories', $categories)
        ;
    }
}
