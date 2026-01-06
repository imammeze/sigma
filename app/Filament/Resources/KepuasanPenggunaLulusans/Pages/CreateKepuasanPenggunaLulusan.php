<?php

namespace App\Filament\Resources\KepuasanPenggunaLulusans\Pages;

use App\Filament\Resources\KepuasanPenggunaLulusans\KepuasanPenggunaLulusanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKepuasanPenggunaLulusan extends CreateRecord
{
    protected static string $resource = KepuasanPenggunaLulusanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}