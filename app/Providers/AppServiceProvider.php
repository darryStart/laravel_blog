<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //切割字符串
        Blade::directive('substr', function($expression) {
            return "<?php echo substr{$expression}; ?>";
        });

        //时间打印
        Blade::directive('date',function ($expression) {
           return "<?php echo date{$expression};?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
