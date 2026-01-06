<?php

namespace App\Filament\Resources\UnitSpmis\Pages;

use App\Filament\Resources\UnitSpmis\UnitSpmiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUnitSpmi extends EditRecord
{
    protected static string $resource = UnitSpmiResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}