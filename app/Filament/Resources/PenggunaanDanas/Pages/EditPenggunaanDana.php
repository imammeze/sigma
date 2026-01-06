<?php

namespace App\Filament\Resources\PenggunaanDanas\Pages;

use App\Filament\Resources\PenggunaanDanas\PenggunaanDanaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPenggunaanDana extends EditRecord
{
    protected static string $resource = PenggunaanDanaResource::class;

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