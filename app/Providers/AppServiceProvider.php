<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\View\Components\mycomponents\CallToAction;
use App\View\Components\mycomponents\carousel;
use App\View\Components\mycomponents\FactsArea;
use App\View\Components\mycomponents\footer;
use App\View\Components\mycomponents\header;
use App\View\Components\mycomponents\news;
use App\View\Components\mycomponents\OurServices;
use App\View\Components\mycomponents\partners;
use App\View\Components\mycomponents\quote;
use App\View\Components\mycomponents\QuoteArea;
use App\View\Components\mycomponents\TsFeature;
use App\View\Components\mycomponents\WhyLogi;

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
        //registering components for autoloading.
        //so that we don't have to write the full path where a component is rendered.
        Blade::component('call-to-action', CallToAction::class);
        Blade::component('carousel', carousel::class);
        Blade::component('facts-area', FactsArea::class);
        Blade::component('footer', footer::class);
        Blade::component('header', header::class);
        Blade::component('news', news::class);
        Blade::component('our-services', OurServices::class);
        Blade::component('partners', partners::class);
        Blade::component('quote-area', QuoteArea::class);
        Blade::component('quote', quote::class);
        Blade::component('ts-feature', TsFeature::class);
        Blade::component('why-logi', WhyLogi::class);
    }
}
