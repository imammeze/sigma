<?php

namespace App\Filament\Resources\SaranaPrasaranas\Pages;

use App\Filament\Resources\SaranaPrasaranas\SaranaPrasaranaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSaranaPrasarana extends ViewRecord
{
    protected static string $resource = SaranaPrasaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
