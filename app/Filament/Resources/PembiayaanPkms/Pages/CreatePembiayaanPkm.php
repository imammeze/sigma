<?php

namespace App\Filament\Resources\PembiayaanPkms\Pages;

use App\Filament\Resources\PembiayaanPkms\PembiayaanPkmResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePembiayaanPkm extends CreateRecord
{
    protected static string $resource = PembiayaanPkmResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}