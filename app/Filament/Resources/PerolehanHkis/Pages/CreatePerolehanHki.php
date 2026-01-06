<?php

namespace App\Filament\Resources\PerolehanHkis\Pages;

use App\Filament\Resources\PerolehanHkis\PerolehanHkiResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePerolehanHki extends CreateRecord
{
    protected static string $resource = PerolehanHkiResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}