<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        view()->composer('layout2.sidebar',function($view){

            $archives=\App\Post::archives();

            $tags=\App\Tag::has('posts')->pluck('name');



            $view->with(compact('archives','tags'));
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

        $this->app->App::bind(Stripe::class,function (){

            return new Stripe(config('services.stripe.secret'));


        });

    }
}
