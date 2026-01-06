<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\RerataBebanDtprChart;
use App\Filament\Widgets\DayaTampungChart;
use Filament\Panel;
use Filament\PanelProvider;
use App\Filament\Pages\Dashboard;
use App\Enums\NavigationGroup;
use Filament\Actions\CreateAction;
use Filament\Support\Colors\Color;
use App\Filament\Widgets\StatsDashboard;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class SigmaPanelProvider extends PanelProvider
{
    public function boot(): void
    {
        CreateAction::configureUsing(function (CreateAction $action) {
            $action
                ->label('Tambah Data');
        });
    }
    
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('sigma')
            ->path('sigma')
            ->login(\App\Filament\Pages\Auth\CustomLogin::class)
            ->brandLogo(asset('images/logo-sigma.png'))
            ->brandLogoHeight('3rem')
            ->navigationGroups([
                NavigationGroup::BudayaMutu->value,
                NavigationGroup::RelevansiPendidikan->value,
                NavigationGroup::RelevansiPenelitian->value,
                NavigationGroup::RelevansiPKM->value,
                NavigationGroup::Akuntabilitas->value,
                NavigationGroup::DiferensiasiMisi->value,
            ])
            ->colors([
                'primary' => Color::hex('#B3232B'),
            ])
            ->viteTheme('resources/css/filament/sigma/theme.css')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->sidebarCollapsibleOnDesktop()
            ->widgets([
                StatsDashboard::class,
                RerataBebanDtprChart::class,
                DayaTampungChart::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}