<?php

namespace App\Filament\Resources\PembiayaanPenelitians\Pages;

use App\Filament\Resources\PembiayaanPenelitians\PembiayaanPenelitianResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPembiayaanPenelitian extends EditRecord
{
    protected static string $resource = PembiayaanPenelitianResource::class;

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