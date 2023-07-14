<?php

namespace App\Providers;

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
        $elements = [
            // Header Data
            "navItems" => config('store.navItems'),

            // Content Data
            "dcAssets" => config('store.dcAssets'),

            // Footer Data
            "footerArray" => [
                'dcItems' => config('store.dcItems'),
                'sitesItems' => config('store.sitesItems'),
                'socialLinks' => config('store.socialLinks')
            ]

            // "dcItems" => config('store.dcItems'),
            // "sitesItems" => config('store.sitesItems'),
            // "socialLinks" => config('store.socialLinks'),
            // "footerArray" = array('dcItems' => $dcItems, 'sitesItems' => $sitesItems, 'socialLinks' => $socialLinks);
        ];

        view()->share('elements', $elements);

    }
}
