<?php

namespace App\Filament\Resources\RekognisiLulusans\Pages;

use App\Filament\Resources\RekognisiLulusans\RekognisiLulusanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRekognisiLulusan extends EditRecord
{
    protected static string $resource = RekognisiLulusanResource::class;

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