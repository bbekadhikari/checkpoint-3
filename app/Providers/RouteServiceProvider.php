<?php

namespace App\Providers;

use App\Brand;
use App\Category;
use App\Product;
use App\Subcat;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        Route::bind('subcat',function ($term){
            return Subcat::where('id',$term)
                ->orWhere('slug',$term)->firstOrFail();
        });
        Route::bind('brand',function ($term){
            return Brand::where('id',$term)
                ->orWhere('slug',$term)->firstOrFail();
        });
//        Route::bind('product',function ($term){
//            return Product::where('id',$term)
//                ->orWhere('slug',$term)->firstOrFail();
//        });
        Route::bind('category',function ($term){
            return Category::where('id',$term)
                ->orWhere('slug',$term)->firstOrFail();
        });


        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
