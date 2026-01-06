<?php

namespace App\Filament\Resources\PerolehanHkis\Pages;

use App\Filament\Resources\PerolehanHkis\PerolehanHkiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPerolehanHki extends EditRecord
{
    protected static string $resource = PerolehanHkiResource::class;

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