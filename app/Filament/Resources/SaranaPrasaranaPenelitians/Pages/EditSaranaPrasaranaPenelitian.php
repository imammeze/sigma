<?php

namespace App\Filament\Resources\SaranaPrasaranaPenelitians\Pages;

use App\Filament\Resources\SaranaPrasaranaPenelitians\SaranaPrasaranaPenelitianResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSaranaPrasaranaPenelitian extends EditRecord
{
    protected static string $resource = SaranaPrasaranaPenelitianResource::class;

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