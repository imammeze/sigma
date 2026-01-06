<?php

namespace App\Filament\Resources\KerjasamaPkms\Pages;

use App\Filament\Resources\KerjasamaPkms\KerjasamaPkmResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKerjasamaPkm extends CreateRecord
{
    protected static string $resource = KerjasamaPkmResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}