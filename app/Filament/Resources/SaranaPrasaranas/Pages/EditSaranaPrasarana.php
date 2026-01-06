<?php

namespace App\Filament\Resources\SaranaPrasaranas\Pages;

use App\Filament\Resources\SaranaPrasaranas\SaranaPrasaranaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSaranaPrasarana extends EditRecord
{
    protected static string $resource = SaranaPrasaranaResource::class;

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