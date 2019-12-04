<?php

namespace Modules\SettingEmailGmail\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\SettingEmailGmail\Entities\SettingEmailGmail;
use Modules\SettingEmailGmail\Observers\SettingEmailGmailObserver;

class ObserviceServiceProvider extends ServiceProvider {

    //protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        SettingEmailGmail::observe(SettingEmailGmailObserver::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
