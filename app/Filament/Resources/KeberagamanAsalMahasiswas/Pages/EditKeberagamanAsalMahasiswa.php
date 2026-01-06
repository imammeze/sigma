<?php

namespace App\Filament\Resources\KeberagamanAsalMahasiswas\Pages;

use App\Filament\Resources\KeberagamanAsalMahasiswas\KeberagamanAsalMahasiswaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKeberagamanAsalMahasiswa extends EditRecord
{
    protected static string $resource = KeberagamanAsalMahasiswaResource::class;

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
