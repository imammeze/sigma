<?php

namespace App\Filament\Resources\PublikasiPenelitians\Pages;

use App\Filament\Resources\PublikasiPenelitians\PublikasiPenelitianResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPublikasiPenelitian extends EditRecord
{
    protected static string $resource = PublikasiPenelitianResource::class;

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