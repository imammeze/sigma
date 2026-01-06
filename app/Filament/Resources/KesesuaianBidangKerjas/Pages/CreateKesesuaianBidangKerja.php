<?php

namespace App\Filament\Resources\KesesuaianBidangKerjas\Pages;

use App\Filament\Resources\KesesuaianBidangKerjas\KesesuaianBidangKerjaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKesesuaianBidangKerja extends CreateRecord
{
    protected static string $resource = KesesuaianBidangKerjaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}