<?php

namespace App\Filament\Resources\KualifikasiTendiks\Pages;

use App\Filament\Resources\KualifikasiTendiks\KualifikasiTendikResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKualifikasiTendik extends EditRecord
{
    protected static string $resource = KualifikasiTendikResource::class;

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