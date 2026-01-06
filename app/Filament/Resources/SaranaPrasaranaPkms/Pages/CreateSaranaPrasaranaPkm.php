<?php

namespace App\Filament\Resources\SaranaPrasaranaPkms\Pages;

use App\Filament\Resources\SaranaPrasaranaPkms\SaranaPrasaranaPkmResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSaranaPrasaranaPkm extends CreateRecord
{
    protected static string $resource = SaranaPrasaranaPkmResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}