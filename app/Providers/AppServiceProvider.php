<?php

namespace App\Providers;

use App\Models\FooterContact;
use App\Models\FooterMain;
use App\Models\FooterQuickLink;
use App\Models\FooterService;
use App\Models\NavItem;
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
        $navItem = NavItem::where('status', 'active')->get();
        view()->share('navItem', $navItem);

        $footerServices = FooterService::all();
        view()->share('footerServices', $footerServices);

        $footerQuickLink = FooterQuickLink::all();
        view()->share('footerQuickLink', $footerQuickLink);

        $footerContact = FooterContact::all();
        view()->share('footerContact', $footerContact);

        $footerMain = FooterMain::firstOrFail();
        view()->share('footerMain', $footerMain);

    }
}
