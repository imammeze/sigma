<?php

namespace App\Filament\Resources\PerolehanPkms\Pages;

use App\Filament\Resources\PerolehanPkms\PerolehanPkmResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPerolehanPkm extends EditRecord
{
    protected static string $resource = PerolehanPkmResource::class;

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