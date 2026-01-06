<?php

namespace App\Filament\Resources\KesesuaianBidangKerjas\Pages;

use App\Filament\Resources\KesesuaianBidangKerjas\KesesuaianBidangKerjaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKesesuaianBidangKerja extends EditRecord
{
    protected static string $resource = KesesuaianBidangKerjaResource::class;

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