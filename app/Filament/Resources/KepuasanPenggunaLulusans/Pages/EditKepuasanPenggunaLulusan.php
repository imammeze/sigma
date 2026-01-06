<?php

namespace App\Filament\Resources\KepuasanPenggunaLulusans\Pages;

use App\Filament\Resources\KepuasanPenggunaLulusans\KepuasanPenggunaLulusanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKepuasanPenggunaLulusan extends EditRecord
{
    protected static string $resource = KepuasanPenggunaLulusanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}