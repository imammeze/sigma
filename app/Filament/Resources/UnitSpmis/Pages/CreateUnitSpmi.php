<?php

namespace App\Filament\Resources\UnitSpmis\Pages;

use App\Filament\Resources\UnitSpmis\UnitSpmiResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUnitSpmi extends CreateRecord
{
    protected static string $resource = UnitSpmiResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}