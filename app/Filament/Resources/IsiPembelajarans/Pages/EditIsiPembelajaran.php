<?php

namespace App\Filament\Resources\IsiPembelajarans\Pages;

use App\Filament\Resources\IsiPembelajarans\IsiPembelajaranResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditIsiPembelajaran extends EditRecord
{
    protected static string $resource = IsiPembelajaranResource::class;

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