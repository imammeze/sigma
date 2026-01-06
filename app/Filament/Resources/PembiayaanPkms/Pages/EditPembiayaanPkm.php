<?php

namespace App\Filament\Resources\PembiayaanPkms\Pages;

use App\Filament\Resources\PembiayaanPkms\PembiayaanPkmResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPembiayaanPkm extends EditRecord
{
    protected static string $resource = PembiayaanPkmResource::class;

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