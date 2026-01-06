<?php

namespace App\Filament\Resources\DiseminasiPkms\Pages;

use App\Filament\Resources\DiseminasiPkms\DiseminasiPkmResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDiseminasiPkm extends CreateRecord
{
    protected static string $resource = DiseminasiPkmResource::class;

     protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}