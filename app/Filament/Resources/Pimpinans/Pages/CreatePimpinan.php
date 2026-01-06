<?php

namespace App\Filament\Resources\Pimpinans\Pages;

use App\Filament\Resources\Pimpinans\PimpinanResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePimpinan extends CreateRecord
{
    protected static string $resource = PimpinanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); 
    }
}