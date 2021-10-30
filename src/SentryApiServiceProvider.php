<?php

namespace PedroSantiago\SentryApi;

use Illuminate\Support\ServiceProvider;

class SentryApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Sentry::class, fn() => new Sentry(
           accessToken: config('services.sentry.api.token'),
           organization: config('services.sentry.api.organization'),
           baseURL: config('services.sentry.api.base_url', 'https://sentry.io')
       ));
    }
}
