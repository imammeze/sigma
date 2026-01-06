<?php

namespace App\Filament\Resources\PemetaanCplPls\Pages;

use App\Filament\Resources\PemetaanCplPls\PemetaanCplPlResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePemetaanCplPl extends CreateRecord
{
    protected static string $resource = PemetaanCplPlResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}