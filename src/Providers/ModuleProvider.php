<?php

namespace TypiCMS\Modules\NiceArtisan\Providers;

use Illuminate\Support\ServiceProvider;
use TypiCMS\Modules\NiceArtisan\Composers\SidebarViewComposer;

class ModuleProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/permissions.php', 'typicms.permissions'
        );
        /*
         * Sidebar view composer
         */
        $this->app->view->composer('core::admin._sidebar', SidebarViewComposer::class);

    }

    public function register()
    {
        //
    }
}
