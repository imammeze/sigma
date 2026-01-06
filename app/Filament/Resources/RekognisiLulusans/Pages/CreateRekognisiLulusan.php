<?php

namespace App\Filament\Resources\RekognisiLulusans\Pages;

use App\Filament\Resources\RekognisiLulusans\RekognisiLulusanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRekognisiLulusan extends CreateRecord
{
    protected static string $resource = RekognisiLulusanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}