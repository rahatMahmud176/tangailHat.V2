<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\District;
use View;
use App\Models\Union;
use App\Models\Upozilla;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer('*',function($view){
             $view->with([
                 'upozillas'    =>Upozilla::orderBy('id','DESC')->get(),
                  'unions'      =>Union::orderBy('id','DESC')->get(),
                  'categories'  =>Category::orderBy('id','DESC')->get(),
                  'districts'   =>District::orderBy('id','DESC')->get(),
            ]);
         });
    }
}
