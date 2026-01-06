<?php

namespace App\Filament\Resources\SistemTataKelolas\Pages;

use App\Filament\Resources\SistemTataKelolas\SistemTataKelolaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSistemTataKelola extends EditRecord
{
    protected static string $resource = SistemTataKelolaResource::class;

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