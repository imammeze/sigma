<?php

namespace App\Filament\Resources\PemetaanCplPls\Pages;

use App\Filament\Resources\PemetaanCplPls\PemetaanCplPlResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPemetaanCplPl extends EditRecord
{
    protected static string $resource = PemetaanCplPlResource::class;

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