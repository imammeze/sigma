<?php

namespace App\Filament\Resources\KondisiMahasiswas\Pages;

use App\Filament\Resources\KondisiMahasiswas\KondisiMahasiswaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKondisiMahasiswa extends EditRecord
{
    protected static string $resource = KondisiMahasiswaResource::class;

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