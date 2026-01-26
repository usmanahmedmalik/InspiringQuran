<?php

namespace Usmanahmedmalik\InspiringQuran;

use Illuminate\Support\ServiceProvider;

class QuranServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->commands([
            InspireCommand::class,
        ]);
    }

    public function boot(): void
    {
    }
}
