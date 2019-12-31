<?php
namespace App\Providers;
use App\Models\Category;
use Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.site._menu', function ($view) {
            $view->with('categories', Category::orderByRaw('-name ASC')->get()->nest());
        });

        View::composer('layouts.site._header', function ($view) {
            $view->with('cartCount', Cart::getContent()->count());
        });
    }
}
