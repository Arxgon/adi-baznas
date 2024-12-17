<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Year;
use App\Observers\YearObserver;
use App\Models\AttendanceLeader;
use App\Observers\AttendanceLeaderObserver;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Year::observe(YearObserver::class);
        AttendanceLeader::observe(AttendanceLeaderObserver::class);

        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                     ->label('Absensi'),
                NavigationGroup::make()
                    ->label('Kas'),
                NavigationGroup::make()
                    ->label('Tambahan')
                    ->collapsed(),
            ]);
        });
    }
}
