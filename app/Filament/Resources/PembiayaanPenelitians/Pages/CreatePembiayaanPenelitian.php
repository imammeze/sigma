<?php

namespace App\Filament\Resources\PembiayaanPenelitians\Pages;

use App\Filament\Resources\PembiayaanPenelitians\PembiayaanPenelitianResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePembiayaanPenelitian extends CreateRecord
{
    protected static string $resource = PembiayaanPenelitianResource::class;

     protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}