<?php

namespace App\Providers;

class CustomPostTypeServiceProvider
{
    protected $posttypes = [
        \App\Artist::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach($this->posttypes as $file){
            $file::registerPostype();
        }
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
