<?php

namespace App\Filament\Resources\KualifikasiTendiks\Pages;

use App\Filament\Resources\KualifikasiTendiks\KualifikasiTendikResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKualifikasiTendik extends CreateRecord
{
    protected static string $resource = KualifikasiTendikResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}