<?php

namespace App\Filament\Resources\KerjasamaPenelitians\Pages;

use App\Filament\Resources\KerjasamaPenelitians\KerjasamaPenelitianResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKerjasamaPenelitian extends EditRecord
{
    protected static string $resource = KerjasamaPenelitianResource::class;

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