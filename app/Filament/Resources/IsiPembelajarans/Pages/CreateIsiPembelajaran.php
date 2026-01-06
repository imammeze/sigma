<?php

namespace App\Filament\Resources\IsiPembelajarans\Pages;

use App\Filament\Resources\IsiPembelajarans\IsiPembelajaranResource;
use Filament\Resources\Pages\CreateRecord;

class CreateIsiPembelajaran extends CreateRecord
{
    protected static string $resource = IsiPembelajaranResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}