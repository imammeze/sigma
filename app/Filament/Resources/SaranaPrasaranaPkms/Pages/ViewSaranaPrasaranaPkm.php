<?php

namespace App\Filament\Resources\SaranaPrasaranaPkms\Pages;

use App\Filament\Resources\SaranaPrasaranaPkms\SaranaPrasaranaPkmResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSaranaPrasaranaPkm extends ViewRecord
{
    protected static string $resource = SaranaPrasaranaPkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
