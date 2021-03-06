<?php

namespace CodeShopping\Providers;

use CodeShopping\Models\Category;
use CodeShopping\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'CodeShopping\Http\Controllers';

    public function boot()
    {
        parent::boot();
        
        Route::bind('category', function($value){
           //dump and die
           $collection =  Category::whereId($value)->orWhere('slug', $value)->get();
           return $collection->first();
           
        });
        
        Route::bind('product', function($value){
           $collection =  Product::whereId($value)->orWhere('slug', $value)->get();
           return $collection->first();
           
        });        
    }

    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
    
}
