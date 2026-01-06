<?php

namespace App\Filament\Resources\Pimpinans\Pages;

use App\Filament\Resources\Pimpinans\PimpinanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPimpinan extends EditRecord
{
    protected static string $resource = PimpinanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}