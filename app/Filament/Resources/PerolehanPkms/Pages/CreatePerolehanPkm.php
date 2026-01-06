<?php

namespace App\Filament\Resources\PerolehanPkms\Pages;

use App\Filament\Resources\PerolehanPkms\PerolehanPkmResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePerolehanPkm extends CreateRecord
{
    protected static string $resource = PerolehanPkmResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}