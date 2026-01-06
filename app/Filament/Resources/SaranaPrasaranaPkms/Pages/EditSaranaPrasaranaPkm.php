<?php

namespace App\Filament\Resources\SaranaPrasaranaPkms\Pages;

use App\Filament\Resources\SaranaPrasaranaPkms\SaranaPrasaranaPkmResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSaranaPrasaranaPkm extends EditRecord
{
    protected static string $resource = SaranaPrasaranaPkmResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}